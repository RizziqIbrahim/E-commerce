@extends('user.master')

@section('title')
E-Foodies | Category
@endsection

@section('content')

   <!-- Category section -->
	<section class="category-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 order-2 order-lg-1">
                <div class="filter-widget">
						<h2 class="fw-title">Categories</h2>
						<ul class="category-menu">
							<li><a href="#">Main Course</a>
								<ul class="ml-3 sub-menu">
									<li><a href="/welcome/sort-by-category/pizza">Pizza</a></li>
									<li><a href="/welcome/sort-by-category/spaghetti">Spaghetti</a></li>
									<li><a href="/welcome/sort-by-category/soup">Soup</a></li>
									<li><a href="/welcome/sort-by-category/steak">Steak</a></li>
									<li><a href="/welcome/sort-by-category/fried-rice">Fried Rice</a></li>
								</ul>
							</li>
							<li><a href="/welcome/sort-by-category/side-dish">Side Dish</a></li>
                            <li><a href="/welcome/sort-by-category/vegetables">Vegetables</a></li>
                            <li><a href="/welcome/sort-by-category/dessert">Dessert</a></li>
							<li><a href="/welcome/sort-by-category/fruits">Fruits</a></li>
							<li><a href="/welcome/sort-by-category/beverages">Beverages</a></li>
						</ul>
                    </div>	
                </div>
				<div class="col-lg-9  order-1 order-lg-2 mb-5 mb-lg-0">
					<div class="row">
					@foreach($foods as $q => $food)
						<div class="col-lg-4 col-sm-6">
							<div class="product-item">
								<div class="pi-pic">
									<div class="tag-sale">ON SALE</div>
									<img src="{{ asset('img/product/'.$food->foto_makanan)}}" width="263.75"height="395.63" alt="{{ $food->nama_makanan}}">
									<div class="pi-links">
										<a href="{{ route('product.addToCart', ['id' => $food->id]) }}" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
									</div>
								</div>
								<div class="pi-text">
									<h6>{{$food->harga}}</h6>
									<p><a href="{{ route('show-user',$food->slug_food)}}" class="text-dark">{{$food->nama_makanan}}</a></p>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
				
			</div>			
		</div>
	</section>
	<!-- Category section end -->
    @endsection