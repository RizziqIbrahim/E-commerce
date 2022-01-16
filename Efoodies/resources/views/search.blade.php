@extends('master')

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
									<li><a href="../sort-by-category/pizza">Pizza</a></li>
									<li><a href="../sort-by-category/spaghetti">Spaghetti</a></li>
									<li><a href="../sort-by-category/soup">Soup</a></li>
									<li><a href="../sort-by-category/steak">Steak</a></li>
									<li><a href="../sort-by-category/fried-rice">Fried Rice</a></li>
								</ul>
							</li>
							<li><a href="../sort-by-category/side-dish">Side Dish</a></li>
                            <li><a href="../sort-by-category/vegetables">Vegetables</a></li>
                            <li><a href="../sort-by-category/dessert">Dessert</a></li>
							<li><a href="../sort-by-category/fruits">Fruits</a></li>
							<li><a href="../sort-by-category/beverages">Beverages</a></li>
						</ul>
                    </div>
					
                    <div class="filter-widget mb-0">
                            <h4 class="mb-3">Price</h4>
                            <ul class="category-menu">
                                <li><a href="{{ route('high',['sort'=>'high_low']) }}">From Highest Price</a></li>
                            </ul>
                            <ul class="category-menu">
                                <li><a href="{{ route('low',['sort'=>'low_high']) }}">From Lowest Price</a></li>
                            </ul> 
                    </div>	
					</div>
				<div class="col-lg-9  order-1 order-lg-2 mb-5 mb-lg-0">
					<div class="row">
					@foreach($alls as $key => $all)
						<div class="col-lg-4 col-sm-6">
							<div class="product-item">
								<div class="pi-pic">
									<div class="tag-sale">ON SALE</div>
									<img src="{{ asset('img/product/'.$all->foto_makanan)}}" alt="{{ $all->nama_makanan}}">
									<div class="pi-links">
										<a href="{{ route('product.addToCart', ['id' => $all->id]) }}" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
									</div>
								</div>
								<div class="pi-text">
									<a href="{{ route('show',$all->slug_food)}}">
                                        <h6>{{$all->harga}}</h6>
                                        <p>{{$all->nama_makanan}}</p>
                                    </a>
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




