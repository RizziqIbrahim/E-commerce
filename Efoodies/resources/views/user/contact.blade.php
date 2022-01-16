@extends('user.master')

@section('title')
    E-Foodies | Contact
@endsection

@section('content')
	<!-- Contact section -->
	<section class="contact-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 contact-info">
					<h3><span style="color: #ff6600;">Get in</span> <span style="color: purple;">touch</span></h3>
					<p>kp.kebon Kalapa, RT.02/RW.011, Singasari, Kec. Jonggol, Bogor, Jawa Barat 16830</p>
					<p>+62812-6900-457</p>
					<p>smkmadinatulquran@gmail.com</p>
					<form class="contact-form">
						<input type="text" placeholder="Your name" value="{{auth()->user()->name}}" disabled>
						<input type="text" placeholder="Your e-mail" value="{{auth()->user()->email}}" disabled>
						<input type="text" placeholder="Subject">
						<textarea placeholder="Message"></textarea>
						<button class="site-btn">SEND NOW</button>
					</form>
				</div>
			</div>
		</div>
		<div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14376.077865872314!2d-73.879277264103!3d40.757667781624285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1546528920522" style="border:0" allowfullscreen></iframe></div>
	</section>
	<!-- Contact section end -->


	<!-- Related product section -->
	<section class="related-product-section spad">
		<div class="container">
			<div class="section-title">
				<h2 ><span style="color: #ff6600;"></span>Related <span style="color: purple;">Product</span></h2>
			</div>
			<div class="row">

			 @foreach ($relateds as $related)
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<div class="tag-new">New</div>
							<img src="{{ asset('img/product/'.$related->foto_makanan)}}" alt="{{$related->nama_makanan}}">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>{{$related->harga_makanan}}</h6>
							<p>{{$related->nama_makanan}}</p>
						</div>
					</div>
				</div>
		
		
	
				@endforeach
			</div>
		</div>
	</section>
	<!-- Related product section end -->
@endsection
