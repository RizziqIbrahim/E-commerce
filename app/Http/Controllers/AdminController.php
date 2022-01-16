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
use App\Models\User;
use Stripe\Stripe;
use Stripe\Charge;
use App\Http\Requests;
use Illuminate\Pagination\Paginator;
use Session;

use Illuminate\Http\Request;
use Request as r;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::all();
        $ordersAdmin = Order::paginate(10);
        Paginator::useBootstrap();
        $ordersAdmin->transform(function($order, $key){
            $order->cart = unserialize($order->cart);
            return $order;
        });
        
        return view('admin.index',compact('users'), ['ordersAdmin' => $ordersAdmin]);
    }

    public function items()
    {
        $foods = Food::paginate(10);
        Paginator::useBootstrap();

        return view('admin.items',compact('foods'));
    }
    public function orders()
    {
        $ordersAdmin = Order::paginate(10);
        Paginator::useBootstrap();
        $ordersAdmin->transform(function($order, $key){
            $order->cart = unserialize($order->cart);
            return $order;
        });
        
        return view('admin.orders', ['ordersAdmin' => $ordersAdmin]);
    }

    public function getPost()
    {
        return view('admin.post');
    }
    public function post(Request $request)
    {
        $request->validate([
            'foto_makanan' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
       
        $imageName = time().'.'.$request->foto_makanan->extension();  
        $request->file('foto_makanan')->move(public_path('img\product'), $imageName);

        $food = new Food();
        $food->nama_makanan = $request->input('nama_makanan');
        $food->foto_makanan = $imageName;
        $food->harga = $request->input('harga');
        $food->deskripsi = $request->input('deskripsi');
        $food->stok = $request->input('stok');
        $food->category_id = $request->input('flexRadioDefault');
        $food->slug_food =  ucwords(str_replace(" ", "-", $request->input('nama_makanan')));
        $food->save();
        return redirect()->back()->with('success', 'Successfully Add Products!');
    }
        public function edit($id)
        {
            $food = DB::table('food')->where('id',$id)->get();
            return view('admin.edit',['food' => $food]);
        
        }
        public function update(Request $request)
        {
            $food = Food::where('id',$request->id)->update([
                'nama_makanan' => $request->nama_makanan,
                'deskripsi' => $request->deskripsi,
                'harga' => $request->harga,
                'stok' => $request->stok,
                'slug_food' => ucwords(str_replace(" ", "-", $request->input('nama_makanan'))),
    
            ]);
            // DB::table('food')->where('id',$request->id)->update([
                

            // ]);
            return redirect('admin/items')->with("success", "successfully Edit Product");
        }
        public function destroy($id)
        {
            $food = Food::where('id',$id)->delete();
            return redirect()->back()->with('success', 'Data Deleted Successfully ');
        }
}
