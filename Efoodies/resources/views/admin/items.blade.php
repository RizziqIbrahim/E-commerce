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
    <style>
        body{
            background-color: #EDEDED;
            font-weight:lighter;
        }
        .sidebar{
            margin-top:59px;
            height:782px;
            width:200px;
        }
        .navigation{
            cursor: pointer;
            height:47px;
            color:white;
        }
        .navigation:hover{
            background-color:white;
            color:orange;
        }
        .overview{
            width:500px;
            height:200px;
            background-color:purple;
            opacity:0.4;
            border-radius:10px;
            padding:20px;
            color:white;
        }
        .label{
            font-size:26px;
            padding:10px;
        }
        .flaticon-profile{
            font-size:80px;
            color:white;
        }
        .flaticon-shopping-cart{
            font-size:80px;
            color:white;
        }
        .angka{
            font-size:30px;
            font-weight:lighter;
        }

    </style>
    
</head>
<body>
    <!-- As a link -->
<nav class="navbar navbar-dark bg-light fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="/admin"><img src="../img/logo.png" alt=""></a>
  </div>
</nav>
    <div class="row">
        <div class="col-2">
            <section class="sidebar text-center fixed-top"style="background-color:purple;color:white;">
                <ul class="text-left">
                    <a href="/admin"><div class="text-left pt-3 pl-3 navigation">Dashboard</div></a>
                    <a href="/admin/post"><div class="text-left pt-3 pl-3 navigation">Post Data</div></a>
                    <a href="/admin/orders"><div class="text-left pt-3 pl-3 navigation">All Orders</div></a>
                    <a href="/admin/items"><div class="text-left pt-3 pl-3 navigation">All Items</div></a>
                    <a href="{{ route('logout') }}" style="cursor: pointer" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><div class="text-left pt-3 pl-3 navigation">Logout</div></a>
                </ul>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
				    @csrf
				</form>
    
            </section>
        </div>
        <div class="col-10 mt-5">
            <div class="container-fluid">
                    <div class="items mt-5">
                    @if(Session::has('success'))
                        <div class="alert alert-info">{{Session::get('success')}}</div>
                    @endif
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <td>Food</td>
                                    <td>Harga</td>
                                    <td>Stok</td>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($foods as $food)
                                <tr>
                                    <td>{{$food->nama_makanan}}</td>
                                    <td>{{$food->harga}}</td>
                                    <td class=>{{$food->stok}}</td>
                                    <td>
                                        <a href="/admin/destroy/{{$food->id}}" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> Destroy</a>
                                        <a href="/admin/edit/{{$food->id}}" class="btn btn-sm btn-info"><i class="fas fa-edit"></i> Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $foods->links()}}
                    </div>
        </div>
    </div>
    @yield("content")
    
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