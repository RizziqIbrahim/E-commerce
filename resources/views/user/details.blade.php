@extends('user.master')

@section('title')
    E-Foodies | Account Details
@endsection

@section('content')
<div class="container">
    <div class="row text-center justify-content-center">
        <div class="card mt-lg-5 mb-lg-5">
            <div class="card-body">
                <i class="fas fa-user"></i>
                <h5>User Account Details</h5>
                <hr>
                <div class="mt-5">
                    <p class="text-center" style="font-size: large;"><strong>Username</strong> : {{auth()->user()->name}}</p>
                    
                    <p class="text-center" style="font-size: large;"><strong>Email</strong> : {{auth()->user()->email}}</p>
                    
                </div>
                <div class="">
                    <a href="{{route('userEdit',auth()->user()->id)}}" class="site-btn text-white mt-lg-5" style="background-color: #ff6600;">Edit Account Details</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="card mt-lg-5 mb-lg-5 rounded-0">
           <div class="mt-5 mb-3"><h5>Your Orders</h5></div>
           <table class="table table-hover">
                <thead>
                    <tr>
                        <td>Payment Id</td>
                        <td>Ordered at</td>
                        <td>Items</td>
                        <td>Total</td>   
                    </tr>
                </thead>
                @foreach($orders as $order)
                <tbody>
                @foreach($order->cart->items as $item)
                    <tr>
                        <td>#{{ $order->payment_id}}</td>
                        <td>{{ $order->created_at->diffForHumans()}}</td>
                        <td>{{ $item['nama']}} | Jumlah {{ $item['qty']}}</td>
                        <td>Rp.{{ $item['price']}}000</td>
                    </tr>
                @endforeach
                </tbody>
                @endforeach
           </table>
        </div>
    </div>
</div>
@endsection