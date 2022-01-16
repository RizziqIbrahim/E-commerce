<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
	<link href="{{ asset('/img/favicon.png') }}" rel="shortcut icon"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
	<!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('/css/flaticon.css') }}"/>
	<link rel="stylesheet" href="{{ asset('/css/slicknav.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('/css/jquery-ui.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('/css/owl.carousel.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('/css/animate.css') }}"/>
	<link rel="stylesheet" href="{{ asset('/css/style.css') }}"/>
    <title>@yield("title")</title>
    @yield("css")
    @yield("js")
    
</head>
<body>
    <!-- Page Preloder -->
    <div id="preloder">
		<div class="loader"></div>
	</div>
    <!-- Header section -->
	<header class="header-section" >
		<div class="header-top">
			<div class="container" ">
				<div class="row">
					<div class="col-lg-2 text-center text-lg-left">
						<!-- logo -->
						<a href="/welcome" class="site-logo mt-1">
							<img src="{{ asset('/img/logo.png') }}" alt="">
						</a>
					</div>
					<div class="col-xl-6 col-lg-5">
						<form class="header-search-form" method="get" action="{{ route('search_results_')}}">
                            @csrf
							<input type="text" name="q"placeholder="Search on e-foodies ....">
							<button><i class="flaticon-search"></i></button>
						</form>
					</div>
					<div class="col-xl-4 col-lg-5">
						<div class="user-panel">
							<div class="up-item">
								<div class="dropdown">
								<i class="flaticon-profile"></i>
									<a class="dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-expanded="false">
										Hi, {{auth()->user()->name}}!
									</a>
									<ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
										<li><a href="{{ route('logout') }}" style="cursor: pointer" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item">Logout</a></li>
										<li><a class="dropdown-item" href="/welcome/account-details" type="button">Account Details</a></li>
									</ul>
								</div>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									@csrf
								</form>
							</div>
							<div class="up-item">
								<div class="shopping-card">
									<i class="flaticon-bag"></i>
									@if(Session::has('cart'))
									<span>{{Session::get('cart')->totalQty}}</span>
									@endif
								</div>
								<a href="{{ route('product.shoppingCart')}}">Food Bag</a>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>

		<nav class="main-navbar">
			<div class="container">
				<!-- menu -->
				<ul class="main-menu">
					<li><a href="/welcome">Home</a></li>
                    <li><a href="/welcome/menu">Menus
                        <span class="new">New</span>
                    </a></li>	
					</li>
					</li>
					<li><a href="/welcome/sort-by-category/dessert">Dessert</a>
                    </li>
                    <li><a href="/welcome/sort-by-category/beverages">Beverages</a>
					</li>
                    <li><a href="/welcome/sort-by-category/vegetables">Vegetables</a>
					</li>
                    <li><a href="/welcome/sort-by-category/fruits">Fruit</a>
					</li>
					<li><a href="/welcome/about-us">About Us</a>
					</li>
				</ul>
			</div>
		</nav>
	</header>
	<!-- Header section end -->
    @yield("content")
    <!-- Footer section -->
	<section class="footer-section">
		<div class="container">
			<div class="footer-logo text-center">
				<a href="/welcome"><img src="{{ asset('/img/logo_light.png') }}" alt=""></a>
			</div>			
		</div>
		<div class="social-links-warp">
			<div class="container">
				<div class="social-links text-center">
					<a href="" class="instagram"><i class="fa fa-instagram"></i><span>instagram</span></a>
					<a href="" class="google-plus"><i class="fa fa-google-plus"></i><span>g+plus</span></a>
					<a href="" class="pinterest"><i class="fa fa-pinterest"></i><span>pinterest</span></a>
					<a href="" class="facebook"><i class="fa fa-facebook"></i><span>facebook</span></a>
					<a href="" class="twitter"><i class="fa fa-twitter"></i><span>twitter</span></a>
					<a href="" class="youtube"><i class="fa fa-youtube"></i><span>youtube</span></a>
					
				</div>

<p class="text-center mt-5" style="color: #ff6600;">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made by <a href="#" target="_blank" style="color: rgb(83, 10, 83);">Madinatul Quran Teams</a></p>

			</div>
		</div>
	</section>
    <!-- Footer section end -->
    
    
	<!--====== Javascripts & Jquery ======-->
	<script src="{{ asset('/js/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('/js/jquery.slicknav.min.js') }}"></script>
	<script src="{{ asset('/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('/js/jquery.nicescroll.min.js') }}"></script>
	<script src="{{ asset('/js/jquery.zoom.min.js') }}"></script>
	<script src="{{ asset('/js/jquery-ui.min.js') }}"></script>
	<script src="{{ asset('/js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/32a576806c.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>
	@yield('scripts')
</body>
</html>