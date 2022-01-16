
@include('login')
@include('register')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
	<link href="{{asset('img/favicon.png')}}" type="image/gif" rel="icon" size="16x16">

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
	<style>

	</style>
    <title>@yield("title")</title>
    @yield("css")
    @yield("js")
    <script>
		function validateForm() {
                var x = document.forms["login-form"]["email"].value;
                var y = document.forms["login-form"]["password"].value;
                if (x && y == "") {
                    alert("Both of Form must be filled out");
                    return false;
                }
            }
	</script>
</head>
<body>
    <!-- Page Preloder -->
    <div id="preloder">
		<div class="loader"></div>
	</div>
    <!-- Header section -->
	<header class="header-section" >
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 text-center text-lg-left">
						<!-- logo -->
						<a href="/" class="site-logo mt-1">
							<img src="../img/logo.png" alt="">
						</a>
					</div>
					<div class="col-xl-6 col-lg-5">
						<form class="header-search-form" method="get" action="{{ route('search_results')}}">
                            @csrf
							<input type="text" name="q"placeholder="Search on e-foodies ....">
							<button><i class="flaticon-search"></i></button>
						</form>
					</div>
					<div class="col-xl-4 col-lg-5">
						<div class="user-panel">
							<div class="up-item mt-2">
								<a href="" data-toggle="modal" data-target="#modal"><i class="flaticon-profile"></i> {{ __('Sign In') }} </a>or <a href="" data-target="#reg" data-toggle="modal">Create Account</a>
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
					<li><a href="/">Home</a></li>
                    <li><a href="/menu">Menus
                        <span class="new">New</span>
                    </a></li>	
					</li>
					</li>
					<li><a href="../sort-by-category/dessert">Dessert</a>
                    </li>
                    <li><a href="../sort-by-category/beverages">Beverages</a>
					</li>
                    <li><a href="../sort-by-category/vegetables">Vegetables</a>
					</li>
                    <li><a href="../sort-by-category/fruits">Fruit</a>
					</li>
					<li><a href="/about-us">About Us</a>
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
    @yield('script')
	<script src="../js/jquery-3.2.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/jquery.slicknav.min.js"></script>
	<script src="../js/owl.carousel.min.js"></script>
	<script src="../js/jquery.nicescroll.min.js"></script>
	<script src="../js/jquery.zoom.min.js"></script>
	<script src="../js/jquery-ui.min.js"></script>
	<script src="../js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/32a576806c.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>
   
