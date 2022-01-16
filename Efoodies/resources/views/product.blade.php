
@extends('master')

@foreach($products as $q => $product)

@section('title')
E-Foodies | Products
@endsection

@section('content')


	<!-- product section -->
	<section class="product-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="product-pic-zoom">
						<img class="product-big-img" src="{{ asset('img/product/'.$product->foto_makanan)}}" alt="">
					</div>
					<!-- <div class="product-thumbs" tabindex="1" style="overflow: hidden; outline: none;">
						<div class="product-thumbs-track">
							<div class="pt active" data-imgbigurl=""><img src="" alt=""></div>
						</div>
					</div> -->
				</div>
				<div class="col-lg-6 product-details">
					<h2 class="p-title">{{ $product->nama_makanan}}</h2>
					<h3 class="p-price">{{$product->harga}}</h3>
					<h4 class="p-stock">Available: <span>{{$product->stok}}</span></h4>
					<div class="p-review">
						{{$ratings}} |<a href="">Add your review</a>
					</div>
					<div class="quantity">
						<p>Quantity</p>
                        <div class="pro-qty"><input type="text" value="1"></div>
                    </div>
					<a href="#" class="site-btn">SHOP NOW</a>
					<p class="mt-3 text-danger">* You need to Login to Start Shopping here.</p>
					<div id="accordion" class="accordion-area">
						<div class="panel">
							<div class="panel-header" id="headingOne">
								<button class="panel-link active" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">Description</button>
							</div>
							<div id="collapse1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
								<div class="panel-body">
									<p>"{{$product->deskripsi}}"</p>
								</div>
							</div>
						</div>
						<div class="panel">
							<div class="panel-header" id="headingTwo">
								<button class="panel-link" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">Payment Details </button>
							</div>
							<div id="collapse2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
								<div class="panel-body">
									<img src="{{ asset('/img/cards.png') }}" alt="">
									<p>"You can Use any Debit Card for Payment or You can do a payment with Cash On Delivery Method."</p>
								</div>
							</div>
						</div>
						<div class="panel">
							<div class="panel-header" id="headingTwo">
								<button class="panel-link" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse2">Review</button>
							</div>
							<div id="collapse3" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
								<div class="panel-body"style="back">
										<table class="table table-striped">
											<tbody>
											@foreach($comments as $key => $rating)
												<tr>
													<td>
													<div class="row">
														<div class="col-9">{{ $rating->user->name}}</div>
														<div class="col-3"><p>{{ $rating->created_at->diffForHumans()}}</p></div>
													</div>
													<p>{{$rating->comment}}</p>	
													</td>
												</tr>
												@endforeach	
											</tbody>
										</table>															
									<div class="mb-2">{{ $comments->links()}}</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		@endforeach
	</section>
	<!-- product section end -->


	<!-- RELATED PRODUCTS section -->
	
	<section class="related-product-section">
		<div class="container">
			<div class="section-title">
				<h2><span style="color: #ff6600;">RELATED</span> <span style="color: purple;">FOODS</span></h2>
			</div>
			<div class="product-slider owl-carousel">
			@foreach($relateds as $key => $related)
				<div class="product-item">
					<div class="pi-pic">
						<img src="{{ asset('img/product/'.$related->foto_makanan)}}" alt="">
						<div class="pi-links">
							<a href="{{ route('product.addToCart', ['id' => $related->id]) }}" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
						</div>
					</div>
					<div class="pi-text">
						<a href="{{ route('show',$related->slug_food)}}">
							<h6>Rp.{{$related->harga}}</h6>
							<p>{{$related->nama_makanan}}</p>
						</a>
					</div>
				</div>
			@endforeach
			</div>
		</div>
	</section>
	<!-- RELATED PRODUCTS section end -->
@endsection


