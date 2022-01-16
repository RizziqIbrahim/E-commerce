@extends('user.master')

@section('title')
E-Foodies | Checkout
@endsection

@section('content')
<!-- checkout section  -->
<section class="checkout-section spad">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 order-2 order-lg-1">
          <form class="checkout-form" id="checkout-form"method="post" action="{{ route('checkout')}}">
            <div class="cf-title">Billing Address</div>
            <div class="row">
            </div>
            <div class="row address-inputs">
              <div class="col-md-12">
                <textarea type="text" placeholder="Add Your Address"style="background-color:#f0f0f0; border:0px; border-radius:20px;" id="address"cols="30" rows="5"required  name="address"class="form-control mb-5"></textarea>
              </div>
              <div class="col-md-12">
                <input type="text" placeholder="Phone no."name="phoneNumber"id="phoneNumber">
              </div>
            </div>
            <div class="cf-title">Payment</div>
            <ul class="payment-list">
              <li>Credit / Debit card<a href="#"><img src="img/mastercart.png" alt=""></a></li>
              <!-- <li>Pay when you get the package</li> -->
              <div class="row address-inputs">
              <div class="col-md-12">
                <div id="charge-error"class="alert text-danger">
                </div>
                {{Session::get('error')}}
                <input type="text" id="name" required placeholder="Name" name="name">        
                <input type="text" id="card-name" required placeholder="Card Holder Name">
                <input type="text" id="card-number" required placeholder="Card Number">
              </div>
              <div class="col-md-6">
                <input type="text" id="card-expiry-month"placeholder="Expiration Month">
              </div>
              <div class="col-md-6">
              <input type="text" id="card-expiry-year"placeholder="Expiration Year">
              </div>
              <div class="col-md-3">
                <input type="text" id="card-cvc" required placeholder="CVC">
              </div>
            </ul>
            <button class="site-btn submit-order-btn">Place Order</button>
        </div>
        <div class="col-lg-4 order-1 order-lg-2">
          <div class="checkout-cart">
            <h3>Your Cart</h3>
            <table>
              <thead>
              </thead>
              <tbody>
              @foreach($alls as $product)
								<tr>
									<td>
										<img src="{{ asset('img/product/'.$product['image'])}}"class="rounded mb-3" width="100px" height="100"alt="">
									</td>
                  <td>
                  <div class="pc-title ml-5">
											<h5 class="mb-1">{{ $product['nama']}}</h5>
                      <h6 class="jumlah">Jumlah : {{ $product['qty']}}</h6>
                      <h6 class="harga">{{ $product['price'].'.000'}}</h6>
										</div>
                  </td>
                </tr>
              @endforeach
							</tbody>
              {{ csrf_field()}}
              </form>
            </table>
            <ul class="price-list">
            <li class="total"name="total">Total : {{$total.'.000'}}</li>
            </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- checkout section end -->
@endsection

@section('scripts')
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script type="text/javascript" src="{{ URL::to('src/checkout.js')}}"></script>
@endsection
 