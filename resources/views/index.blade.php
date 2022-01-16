@extends('master')

@section('title')
 E-Foodies | Your Satisfying is Our Main Purpose
@endsection

@section('content')
		<!-- Hero section -->
		<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg" data-setbg="{{asset('/img/bg.jpg')}}">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 text-white">
							<span>New Arrivals</span>
							<h2>pizza series</h2>
							<p>Fancy,Delicious,Satisfied Those Are Described Pizza Series Which We Have In E-Foodies. </p>
							<a href="../product/macaroni-pizza" class="site-btn sb-white">TRY IT</a>
							<a href="../product/macaroni-pizza" class="site-btn sb-line">DISCOVER</a>
						</div>
					</div>
					<div class="offer-card text-white">
						<span>from</span>
						<h2>100K</h2>
						<p>TRY IT NOW</p>
					</div>
				</div>
			</div>
			<div class="hs-item set-bg" data-setbg="{{asset('/img/bg-2.jpg')}}">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 text-white">
							<span>Every Last Week of The Month</span>
							<h2>Foods & Beverages</h2>
							<p>Best Quality Foods & Beverages Are Here.</p>
							<a href="../menu" class="site-btn sb-white">DISCOVER</a>
							<a href="../menu" class="site-btn sb-line">DISCOVER</a>
						</div>
					</div>
					<div class="offer-card text-white">
						<span>Disc From</span>
						<h2>5%</h2>
						<p>GET IT NOW</p>
					</div>
				</div>
			</div>
			<div class="hs-item set-bg" data-setbg="{{asset('/img/bg-3.jpg')}}">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 text-white">
							<span>Every Day Fresh Fruits for Beverages</span>
							<h2>Fresh Beverages</h2>
							<p>All The Freshest Beverages here suit for you in sunny days.Makes your mood better in every second. </p>
							<a href="../sort-by-category/beverages" class="site-btn sb-white">GET IT</a>
							<a href="../sort-by-category/beverages" class="site-btn sb-line">DISCOVER</a>
						</div>
					</div>
					<div class="offer-card text-white">
						<span>Disc From</span>
						<h2>10%</h2>
						<p>GET IT NOW</p>
					</div>
				</div>
			</div>
			<div class="hs-item set-bg" data-setbg="{{asset('/img/bg-4.jpg')}}">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 text-white">
							<span>Coffee Creamy!</span>
							<h2>Good Quality Coffe</h2>
							<p> The Freshest Coffe With Good Quality Soft Creamy Makes you better in your day.</p>
							<a href="../product/cappucino-coffee" class="site-btn sb-white">GET IT</a>
							<a href="../product/cappucino-coffee" class="site-btn sb-line">DISCOVER</a>
						</div>
					</div>
					<div class="offer-card text-white">
						<span>Start From</span>
						<h2>58K</h2>
						<p>GET IT NOW</p>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="slide-num-holder" id="snh-1"></div>
		</div>
	</section>
	<!-- Hero section end -->



	<!-- Features section -->
	<section class="features-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="{{asset('/img/icons/1.png')}}" alt="#">
						</div>
						<h2>Fast Secure Payments</h2>
					</div>
				</div>
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="{{asset('/img/icons/2.png')}}" alt="#">
						</div>
						<h2>Good Quality</h2>
					</div>
				</div>
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="{{asset('/img/icons/3.png')}}" alt="#">
						</div>
						<h2>Free & fast Delivery</h2>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Features section end -->


	<!-- letest product section -->
	<section class="top-letest-product-section">
		<div class="container">
			<div class="section-title">
				<h2><span style="color: #ff6600;">LATEST</span> <span style="color: purple;">VARIANS</span></h2>
			</div>
			<div class="product-slider owl-carousel">
			@foreach($latests  as $key => $latest)
				<div class="product-item">
					<div class="pi-pic">
						<img src="{{ asset('img/product/'.$latest->foto_makanan) }}" width="263.75"height="395.63" alt="{{$latest->nama_makanan}}">
						<div class="pi-links">
							<a href="{{ route('product.addToCart', ['id' => $latest->id]) }}" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
						</div>
					</div>
					<div class="pi-text">
						<a href="{{ route('show',$latest->slug_food)}}">
							<h6>Rp.{{$latest->harga}}</h6>
							<p class="text-dark">{{$latest->nama_makanan}}</p>
						</a>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</section>
	<!-- letest product section end -->



	<!-- Product filter section -->
	<section class="product-filter-section">
		<div class="container">
			<div class="section-title">
				<h2><span style="color: #ff6600;">TOP RATED</span> <span style="color: purple;">FOODS</span></h2>
			</div>
			<ul class="product-filter-menu text-center">
				<li><a href="sort-by-category/fruits">FRUITS</a></li>
				<li><a href="sort-by-category/beverages">BEVERAGES</a></li>
				<li><a href="sort-by-category/side-dish">SIDEDISH</a></li>
				<li><a href="sort-by-category/pizza">PIZZA</a></li>
				<li><a href="sort-by-category/steak">STEAK</a></li>
				<li><a href="sort-by-category/fried-rice">FRIED RICE</a></li>
			</ul>
			<div class="row">
			@foreach($tops  as $key => $top)
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="{{ asset('img/product/'.$top->foto_makanan)}}"width="263.75"height="395.63" alt="{{$top->nama_makanan}}">
							<div class="pi-links">
								<a href="{{ route('product.addToCart', ['id' => $top->id]) }}" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
							</div>
						</div>
						<div class="pi-text">
							<a href="{{ route('show',$top->slug_food)}}">
								<h6>Rp.{{$top->harga}}</h6>
								<p class="text-dark">{{$top->nama_makanan}}</p>
							</a>
						</div>
					</div>
				</div>
				@endforeach
			</div>	
		</div>
	</section>
	<!-- Product filter section end -->


	<!-- Banner section -->
	<section class="banner-section">
		<div class="container">
			<div class="banner set-bg" data-setbg="{{asset('img/banner-bg.jpg')}}">
				<div class="tag-new">NEW</div>
				<span class="text-white">New Arrivals</span>
				<h2 class="text-white">Macaroni Pizza</h2>
				<a href="../product/macaroni-pizza" class="site-btn">TRY NOW</a>
			</div>
		</div>
	</section>
	<!-- Banner section end  -->
@endsection



	


	

