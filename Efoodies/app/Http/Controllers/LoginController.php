<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use App\Models\Food;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Rating;
use App\Models\Transaksi;
use App\Models\Order;
use App\Models\OrderAdmin;
use Stripe\Stripe;
use Stripe\Charge;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Session;
use Request as r;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified','admin']);
    }

    public function welcome()
    {
        $latests = Food::orderBy("created_at", "desc")->paginate(4);
        $tops = Food::orderBy("harga", "desc")->paginate(8);
        $alls = Food::orderBy("nama_makanan", "desc")->paginate(9);
        $navbars = Food::all();
        return view('user.index',compact('latests','tops','alls','navbars'));
    }

    public function account()
    {
        $orders = Auth::user()->orders;
        $orders->transform(function($order, $key){
            $order->cart = unserialize($order->cart);
            return $order;
        });
        $id = auth()->user()->id;
        return view('user.details',compact('id'), ['orders' => $orders]);
    }

    public function index(Request $request)
    { 
        $alls = Food::paginate(9);
        Paginator::useBootstrap();
        $request->session()->reflash();
        $request->session()->keep('success','error');
        return view("user.menu", compact("alls"));
    }

    public function search_results(Request $request)
    {
       if (isset($request->q)) {
           $alls = Food::where('nama_makanan', 'like', '%' .$request->q. '%')->orWhere('deskripsi','like', "%($request->q)%")->orWhere('slug_food', 'like', "%($request->q)%")->orderBy("id", "desc")->paginate(9);
           $alls->appends($request->only('q'));
           $q = $request->q;
           return view("user.search", compact("alls"));
       } else {
            abort(404);
       }

    }
    public function show($slug = null)
    {
        $products = Food::where("slug_food", $slug)->get();
        $relateds = Food::orderBy("created_at", "desc")->paginate(5);
        $ratings = Rating::where("food_id", $products[0]->id)->count();
        $comments = Rating::where("food_id", $products[0]->id)->paginate(3);
        Paginator::useBootstrap();
        if(count($products)>0){
            return view("user.product", compact("products", "relateds", "ratings", "comments"));
        }else{
            abort(404);
        }
    }

    public function addComment(Request $request)
    {    
        $ratings = new Rating();
        $ratings->comment = $request->input('comment');
        $ratings->food_id = $request->input('id');
        $ratings->user_id = Auth::user()->id;
        $ratings->save();
        return redirect()->back();
    }
   
    public function sort_by_category($slug = null)
    {
        $categories = Category::where("slug_category", $slug)->get();
        if(count($categories)>0){
            $foods = Food::where("category_id", $categories[0]->id)->get();
            return view("user.sort-by-category", compact("foods"));
        }else{
            abort(404);
        }
    }

    public function edit($id)
    {
        $id = auth()->user()->id;
        return view('user.edit',compact('id'));
    }

    public function update_user(Request $request)
    {    
        $users = Auth::user();
    
        User::find($users->id)->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        
        return redirect()->route('userUpdate',compact('users'));
    }

    public function about(){
        return view('user.about');
    }

    
    public function price(Request $request)
    {
    // $foods = Food::all();
       if(request()->sort == 'high_low')
       {
        $foods = Food::all()->sortByDesc('harga');
        return view('user.sort-by-price',compact('foods'));
       }else
       {
        $foods = Food::all()->sortBy('harga');
        return view('user.sort-by-price',compact('foods'));
       }
    }

    public function getAddToCart(Request $request, $id)
    {
        
        $adds = Food::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart); 
        $cart->add($adds, $adds->id); 
        // dd($request->session()->get('cart'));
        $request->session()->put('cart', $cart);
        return redirect()->back();
    }

    public function getReduceByOne($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart); 
        $cart->reduceByOne($id); 
        
        Session::put('cart', $cart);
        return redirect()->back();
        
    }
    public function getIncreaseByOne($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart); 
        $cart->increaseByOne($id); 
        
        Session::put('cart', $cart);
        return redirect()->back();
        
    }

    public function getRemoveItem($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart); 
        $cart->removeItem($id);
        
        Session::put('cart', $cart);
        return redirect()->back();
    }
    

    public function getCart()
    {
     $relateds = Food::orderBy("created_at", "desc")->paginate(5);
        if (!Session::has('cart')) {
            return view("user.cart", compact('relateds'));
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view("user.cart" , ['alls' => $cart->items, 'totalPrice' => $cart->totalPrice], compact('relateds'));
        
    }

    
    public function getCheckout()
    {
        if (!Session::has('cart')) {
            return redirect()->route("product.shoppingCart")->with('failed', 'Add Item To Cart First to Continue Checkout');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        return view("user.checkout", ['alls' => $cart->items, 'totalPrice' => $cart->totalPrice, 'total' => $total]);
        
    }
    public function postCheckout(Request $request)
    {
        if (!Session::has('cart')) {
            return redirect()->route("product.shoppingCart");
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        Stripe::setApiKey('sk_test_51Hh5aTHycm94aOrrGGZ26ICiySxg4HONIlxkrTuW0VGM9GOdmoUSHa08kngkildHqPyPVcqAM6Qh5iHwLlGV3AA100EIpf0Zp4');
        try{
            $charge = Charge::create(array(
                "amount" => $cart->totalPrice * 100000,
                "currency" => "idr",
                "source" => $request->input('stripeToken'),
                "description" => "Test Charge",
            ));
             $order = new Order();
             $order->cart = serialize($cart);
             $order->address = $request->input('address');
             $order->phone_number = $request->input('phoneNumber');
             $order->name = $request->input('name');
             $order->payment_id = $charge->id;
             Auth::user()->orders()->save($order);

             $orderAdmin  = new OrderAdmin();
             $orderAdmin->cart = serialize($cart);
             $orderAdmin->address = $request->input('address');
             $orderAdmin->phone_number = $request->input('phoneNumber');
             $orderAdmin->name = $request->input('name');
             $orderAdmin->payment_id = $charge->id;
             Auth::user()->order_admins()->save($orderAdmin);


        }catch (\Exception $e){
            return redirect()->route('checkout')->with('error', $e->getMessage());
        }
        Session::forget('cart');
        return redirect()->route('user-menu')->with('success', 'Successfully Purchased Products!');
    }
}
    
