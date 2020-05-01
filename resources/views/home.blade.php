@extends('layouts.front')

@section('content')


<nav class="navbar navbar-main navbar-expand-lg navbar-light">
    <div class="container">
  
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <div class="collapse navbar-collapse" id="main_nav">


        <div class="collapse navbar-collapse" id="main_nav">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                 <a class="nav-link" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Supermarket</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Partnership</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Baby &amp Toys</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Fitness sport</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Clothing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Furnitures</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"> More</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Foods and Drink</a>
                  <a class="dropdown-item" href="#">Home interior</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Category 1</a>
                  <a class="dropdown-item" href="#">Category 2</a>
                  <a class="dropdown-item" href="#">Category 3</a>
                </div>
              </li>
            </ul>
          </div> <!-- collapse .// -->


          


















    
      </div> <!-- collapse .// -->
    </div> <!-- container .// -->
</nav>
  
  </header> <!-- section-header.// -->
  
  
  
  <!-- ========================= SECTION INTRO ========================= -->
  <!--<section class="section-intro">
  
  <div class="intro-banner-wrap">
      <img src="images/banner1.jpg" class="w-100 img-fluid">
  </div>
  
  </section> -->
  <!-- ========================= SECTION INTRO END// ========================= -->
  
  
  
  
  <!-- ========================= SECTION MAIN ========================= -->
<section class="section-main bg padding-y">
    <div class="container">
    
    <div class="row">
        <aside class="col-md-3">
            <nav class="card">
                <ul class="menu-category">
                    @foreach($categories as $category)
                        <li class="has-submenu">
                        <a href="{{route('products.index', ['category_id' => $category->id])}}">{{$category->name}}<i
                                    class="pe-7s-angle-right"></i></a>
        
                                    @php
                                        $children = TCG\Voyager\Models\Category::where('parent_id', $category->id)->get();
                                    @endphp
        
                               @if($children->isNotEmpty())
                                <div class="category-menu-dropdown">
        
                                    @foreach ($children as $child)
                                        <div class="category-dropdown-style category-common3">
                                            <div class="submenu">
                                                <a href="{{route('products.index', ['category_id' => $child->id])}}">
                                                {{$child->name}}
                                                </a>
                                            </div>

                                        </div>
                                    @endforeach
        
        
                                </div>
        
                              @endif
                        </li>
        
                    @endforeach
        
                </ul> 
                
            </nav>
        </aside> <!-- col.// -->
        <div class="col-md-9">
           <!-- <article class="banner-wrap">
                <img src="images/banner.png" class="w-100 rounded">
            </article> -->
        </div> <!-- col.// -->
    </div> <!-- row.// -->
    </div> <!-- container //  -->
    </section> 

    <!-- ========================= SECTION SPECIAL SERVICES ========================= -->
  <section class="section-specials padding-y border-bottom">
    <div class="container">	
    <div class="row">
    <div class="col-md-4">	
                <figure class="itemside">
                    <div class="aside">
                        <span class="icon-sm rounded-circle bg-primary">
                            <i class="fa fa-money-bill-alt white"></i>
                        </span>
                    </div>
                    <figcaption class="info">
                        <h6 class="title">Reasonable prices</h6>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labor </p>
                    </figcaption>
                </figure> <!-- iconbox // -->
        </div><!-- col // -->
        <div class="col-md-4">
                <figure class="itemside">
                    <div class="aside">
                        <span class="icon-sm rounded-circle bg-danger">
                            <i class="fa fa-comment-dots white"></i>
                        </span>
                    </div>
                    <figcaption class="info">
                        <h6 class="title">Customer support 24/7 </h6>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labor </p>
                    </figcaption>
                </figure> <!-- iconbox // -->
        </div><!-- col // -->
        <div class="col-md-4">
                <figure class="itemside">
                    <div class="aside">
                        <span class="icon-sm rounded-circle bg-success">
                            <i class="fa fa-truck white"></i>
                        </span>
                    </div>
                    <figcaption class="info">
                        <h6 class="title">Quick delivery</h6>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labor </p>
                    </figcaption>
                </figure> <!-- iconbox // -->
        </div><!-- col // -->
    </div> <!-- row.// -->
    
    </div> <!-- container.// -->
    </section>
    <!-- ========================= SECTION SPECIAL END// ========================= -->
  
  
  
  <!-- ========================= SECTION POPULAR PRODUCTS ========================= -->
  <section class="section-name  padding-y-sm">
  <div class="container">
  
  <header class="section-heading">
      <a href="{{route('product.all')}}" class="btn btn-outline-primary float-right">See all</a>
      <h3 class="section-title">Popular products</h3>
  </header><!-- sect-heading -->
  
      
  <div class="row">
    @foreach ($allProducts as $product)
    @include('product._single_product')
    @endforeach

  </div> <!-- row.// -->
  
  </div><!-- container // -->
  </section>
  <!-- ========================= SECTION  END// ========================= -->


  <!-- ========================= FOOTER ========================= -->
<footer class="section-footer border-top">
	<div class="container">
		<section class="footer-top padding-y">
			<div class="row">
				<aside class="col-md col-6">
					<h6 class="title">Brands</h6>
					<ul class="list-unstyled">
						<li> <a href="#">Adidas</a></li>
						<li> <a href="#">Puma</a></li>
						<li> <a href="#">Reebok</a></li>
						<li> <a href="#">Nike</a></li>
					</ul>
				</aside>
				<aside class="col-md col-6">
					<h6 class="title">Company</h6>
					<ul class="list-unstyled">
						<li> <a href="#">About us</a></li>
						<li> <a href="#">Career</a></li>
						<li> <a href="#">Find a store</a></li>
						<li> <a href="#">Rules and terms</a></li>
						<li> <a href="#">Sitemap</a></li>
					</ul>
				</aside>
				<aside class="col-md col-6">
					<h6 class="title">Help</h6>
					<ul class="list-unstyled">
						<li> <a href="#">Contact us</a></li>
						<li> <a href="#">Money refund</a></li>
						<li> <a href="#">Order status</a></li>
						<li> <a href="#">Shipping info</a></li>
						<li> <a href="#">Open dispute</a></li>
					</ul>
				</aside>
				<aside class="col-md col-6">
					<h6 class="title">Account</h6>
					<ul class="list-unstyled">
						<li> <a href="#"> User Login </a></li>
						<li> <a href="#"> User register </a></li>
						<li> <a href="#"> Account Setting </a></li>
						<li> <a href="#"> My Orders </a></li>
					</ul>
				</aside>
				<aside class="col-md">
					<h6 class="title">Social</h6>
					<ul class="list-unstyled">
						<li><a href="#"> <i class="fab fa-facebook"></i> Facebook </a></li>
						<li><a href="#"> <i class="fab fa-twitter"></i> Twitter </a></li>
						<li><a href="#"> <i class="fab fa-instagram"></i> Instagram </a></li>
						<li><a href="#"> <i class="fab fa-youtube"></i> Youtube </a></li>
					</ul>
				</aside>
			</div> <!-- row.// -->
		</section>	<!-- footer-top.// -->

		<section class="footer-bottom border-top row">
			<div class="col-md-2">
				<p class="text-muted"> &copy 2020 Company name </p>
			</div>
			<div class="col-md-8 text-md-center">
				<span  class="px-2">info@pixsellz.io</span>
				<span  class="px-2">+879-332-9375</span>
				<span  class="px-2">Street name 123, Avanue abc</span>
			</div>
			<div class="col-md-2 text-md-right text-muted">
				<i class="fab fa-lg fa-cc-visa"></i>
				<i class="fab fa-lg fa-cc-paypal"></i>
				<i class="fab fa-lg fa-cc-mastercard"></i>
			</div>
		</section>
	</div><!-- //container -->
</footer>
<!-- ========================= FOOTER END // ========================= -->

   
        
    

@endsection

































