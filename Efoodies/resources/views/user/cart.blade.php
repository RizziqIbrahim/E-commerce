@extends('user.master')

@section('title')
E-Foodies | Food Bag
@endsection

@section('content')
<!-- cart section start -->
<section class="cart-section spad">
    <div class="container">
    @if(Session::has('failed'))
      <div class="alert alert-warning">{{Session::get('failed')}}</div>
    @endif 
      <div class="row">
        <div class="col-lg-8">
          <div class="cart-table">
            <h3>Your Cart</h3>
            <div class="cart-table-warp">
              <table>
              <thead>
                <tr>
                  <th class="product-th">Product</th>
                  <th class="quy-th">Quantity</th>
                  <th class="total-th">Price</th>
                </tr>
              </thead>
              <tbody>  
								@if(Session::has('cart'))
                 @foreach($alls as $product)
                <tr>
									<td class="product-col">
										<img src="{{ asset('img/product/'.$product['image'])}}" alt="">
										<div class="pc-title">
                      <a href="{{ route('show-user',$product['slug_food'])}}">
                        <h4>{{ $product['nama']}}</h4>
                        <p>{{ $product['price'].'.000'}}</p>
                      </a>
										</div>
									</td>
									<td class="quy-col"> 
										<div class="quantity">
                        <strong><a href="{{ route('product.increaseByOne', ['id' => $product['item']['id']])}}"><button class="btn btn-sm">+</button></a></strong>
                          <h6 class="">{{ $product['qty']}}</h6>
                        <strong><a href="{{ route('product.reduceByOne', ['id' => $product['item']['id']])}}"><button action=""class="btn btn-sm">-</button></a></strong>
                    </div>
									</td>
                  <td class="total-col" data-th="Subtotal"><h4>{{ $product['price'].'.000'}}</h4></td>
                  <td class="actions">
                    <a href="{{ route('product.remove', ['id' => $product['item']['id']])  }}"><i class="fas fa-times text-danger ml-5"></i></a>
                  </td>
                </tr>
                @endforeach
                @else
                  <tr class="mb-5"><td>No Items In The Cart</td></tr>  
                @endif
							</tbody>
            </table>
            </div>
            @if(Session::has('cart'))
            <div class="total-cost">
              <h6>Total : Rp {{ $totalPrice *1000}}</h6>
            </div>
            @endif
          </div>
        </div>
        <div class="col-lg-4 card-right">
          <a href="/checkout" class="site-btn">Proceed to Checkout</a>
          <a href="/menu" class="site-btn sb-dark">Continue shopping</a>
        </div>
      </div>
    </div>
  </section>
  <!-- cart section end -->

  <!-- Related product section -->
  <section class="related-product-section">
    <div class="container">
      <div class="section-title text-uppercase">
        <h2><span style="color: #ff6600;">Continue</span> <span style="color: purple;">Shopping</span> </h2>
      </div>
      <div class="row">
      
      <div class="product-slider owl-carousel">
			@foreach($relateds as $key => $related)
				<div class="product-item">
					<div class="pi-pic">
						<img src="{{ asset('img/product/'.$related->foto_makanan)}}" alt="">
						<div class="pi-links">
              <a href="{{ route('product.addToCart', ['id' => $related->id]) }}"class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
						</div>
					</div>
					<div class="pi-text">
              <a href="{{ route('show-user',$related->slug_food)}}">
							<h6>Rp.{{$related->harga}}</h6>
							<p>{{$related->nama_makanan}}</p>
						</a>
					</div>
				</div>
			@endforeach
			</div>

      </div>
    </div>
  </section>
   <!-- Related product section end -->
@endsection


