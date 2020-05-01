@extends('layouts.front')

@section('content')

<article class="card card-product-list" style="outline:none">
	<div class="row no-gutters">
		<aside class="col-md-6">
			<a href="#" class="img-wrap" sty>
				
				<img src="{{asset('storage/'.$productDetails->cover_img)}}">
			</a>
		</aside> <!-- col.// -->
		<div class="col-md-6">
			<div class="info-main">
			<h4>{{$productDetails->name}}</h4>
				<div class="rating-wrap mb-3">
					<ul class="rating-stars">
						<li style="width:80%" class="stars-active"> 
							<i class="fa fa-star"></i> <i class="fa fa-star"></i> 
							<i class="fa fa-star"></i> <i class="fa fa-star"></i> 
							<i class="fa fa-star"></i> 
						</li>
						<li>
							<i class="fa fa-star"></i> <i class="fa fa-star"></i> 
							<i class="fa fa-star"></i> <i class="fa fa-star"></i> 
							<i class="fa fa-star"></i> 
						</li>
					</ul>
					<div class="label-rating">7/10</div>
				</div> <!-- rating-wrap.// -->

				<div class = "py-2"><!--Defining the brand-->
				<p><b>Brand:</b> {{$productDetails->brand}}</p>
				</div>
				
			

			

			<div class="price-wrap">
			<span class="price h5" style="font-size:30px;" class="mt-5">KES {{$productDetails->price}}</span>	
			<!--	<del class="price-old"> $198</del>-->
			</div> <!-- info-price-detail // -->

			<!--<p class="text-success">Free shipping</p>-->
				<br>
				<p>
					<a href="#" class="btn btn-primary"> Add to Cart</a>
					<a href="#" class="btn btn-light "><i class="fa fa-heart"></i> 
						<span class="text">Add to wishlist</span>
					</a>
				</p>


				

				<div class="col-md-12" >
					
						<div class="product-detail">
							<div class="mt-4">
							<h4>Product Details</h4>
							<p>{{$productDetails->details}}</p>
							</div>
							<div class="mt-4">
								<h4>Product Information</h4>
								<p>{{$productDetails->description}}</p>
							</div>
				
				
						</div>
				
				
					
				</div>





			
			</div> <!-- info-main.// -->
		</div> <!-- col.// -->

		
		
	
				
				
			
		
	</div> <!-- row.// -->
</article> <!-- card-product .// -->


<!-- ========================= SECTION CONTENT END// ========================= -->


<!-- ========================= FOOTER ========================= -->
<footer class="section-footer border-top padding-y">
	<div class="container">
		<p class="float-md-right"> 
			&copy Copyright 2020 All rights reserved
		</p>
		<p>
			<a href="#">Terms and conditions</a>
		</p>
	</div><!-- //container -->
</footer>
<!-- ========================= FOOTER END // ========================= -->
    
@endsection