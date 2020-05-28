
<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

         <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Favicon -->
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">

        <!-- Google Fonts -->
        <!--<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">-->
        
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="{{ asset('css/assets/bootstrap.min.css') }}">
        
  

		<!-- Fontawesome Icon -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

		<!-- Animate Css -->
        <link rel="stylesheet" href="{{ asset('css/assets/animate.css') }}">

        <!--Star rating-->
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/css/star-rating.min.css" />


        <!-- Owl Slider -->
        <link rel="stylesheet" href="{{ asset('css/assets/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/assets/owl.theme.default.min.css') }}">

        <!--Easy Zoom css-->
        <link rel="stylesheet" href="{{ asset ('css/jquery.exzoom.css') }}">

        <!--Pass Strength-->
        <link rel="stylesheet" href="{{ asset ('css/passtrength.css') }}">


        <!-- Custom Style -->
        <link rel="stylesheet" href="{{ asset ('css/assets/normalize.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/assets/responsive.css') }}">

        <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5eb47ba081d25c0e5849d6b6/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->

    </head>
    <body>

        <!-- Preloader -->
        <div class="preloader">
            <div class="load-list">
                <div class="load"></div>
                <div class="load load2"></div>
            </div>
        </div>
        <!-- End Preloader -->

        <!-- Top Bar -->
        <section class="top-bar">
            <div class="container">
                <div class="row">
                    
                    <div class="col-lg-12 col-md-12">
                        <div class="top-right text-right">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item"><a href="{{route('shop.intro')}}"><i class="fas fa-store mr-2" style="color: #fff;
                                    text-shadow: -1px -1px 0 #999,
                                            1px -1px 0 #999,
                                           -1px 1px 0 #999,
                                            1px 1px 0 #999;"></i>Become a Seller</a></li>
                            <li class="list-inline-item"><a href="{{url('WishList')}}"><img src="{{ asset('images/it-fav.png') }}" alt="">Wishlist<span style="color: #5677fc; font-weight:bold;">({{App\Wishlist::count()}})</span></a></li>
                            <li class="list-inline-item"><a href="{{route('users.edit')}}"><img src="{{ asset('images/user.png') }}" alt="">My Account</a></li>
                                
                                
                                
                                    <!-- Authentication Links -->
                                    @guest
                                        <li class="list-inline-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                        @if (Route::has('register'))
                                            <li class="list-inline-item">
                                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                            </li>
                                        @endif
                                    @else
                                        <li class="list-inline-item">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->first_name }} <span class="caret"></span>
                                            </a>
            
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>
            
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>
                                    @endguest
                                




                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Top Bar -->

        <!-- Logo Area -->
        <section class="logo-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="{{route('home')}}"><img src="{{ asset('images/pro-.png') }}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-5 padding-fix">
                        <form action="{{route('products.search')}}" class="search-bar" method="GET">
                            <input type="text" name="query" placeholder="I'm looking for...">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <div class="carts-area d-flex">
                            <div class="call-box d-flex">
                                <div class="call-ico">
                                    <img src="{{ asset('images/call.png') }}" alt="">
                                </div>
                                <div class="call-content">
                                    <span>Having trouble? Call us on</span>
                                    <p>+1 (111) 426 6573</p>
                                </div>
                            </div>
                            <div class="cart-box ml-auto text-center">
                                <a href="{{route('cart.index')}}">
                                    <img src="{{ asset('images/cart.png') }}" alt="cart">
                                    <span class="badge badge-pill badge-danger notify">{{Cart::session(auth()->id())->getContent()->count()}}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Logo Area -->

        

        <!-- Sticky Menu -->
        <section class="sticky-menu">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-3">
                        <div class="sticky-logo">
                            <a href="{{ url('/') }}"> <img src="images/pro-.png" alt="" class="img-fluid">
							
							</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-7">
                        <div class="main-menu">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item"><a>HOME <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown list-unstyled">
                                        <li><a href="index.html">Home Style 1</a></li>
                                        <li><a href="02-home-two.html">Home Style 2</a></li>
                                    </ul>
                                </li>
                                <li class="list-inline-item mega-menu"><a>MEGA MENU <i class="fa fa-angle-down"></i></a>
                                    <div class="mega-box">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="clt-area">
                                                    <h6>Clothing</h6>
                                                    <div class="link-box">
                                                        <a href="">- Western Clothing</a>
                                                        <a href="">- Traditional Clothing</a>
                                                        <a href="">- Winter Clothing</a>
                                                        <a href="">- Summer Clothing</a>
                                                        <a href="">- Inner Wear</a>
                                                        <a href="">- Night Wear</a>
                                                        <a href="">- Mens Clothing</a>
                                                        <a href="">- Womens Clothing</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="sm-phn">
                                                    <h6>Smartphones</h6>
                                                    <div class="dept-box">
                                                        <a href="">- Samsung</a>
                                                        <a href="">- Huawei</a>
                                                        <a href="">- One Plus</a>
                                                        <a href="">- Xiaomi</a>
                                                        <a href="">- Iphone</a>
                                                        <a href="">- Blackberry</a>
                                                        <a href="">- Nokia</a>
                                                        <a href="">- Oppo</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div class="lt-news">
                                                    <h6>Latest News</h6>
                                                    <div class="news-box d-flex">
                                                        <div class="news-img">
                                                            <img src="{{ asset('images/mega-img-1.jpg') }}" alt="">
                                                        </div>
                                                        <div class="news-con">
                                                            <p>Lorem ipsum dolor sit...</p>
                                                            <span>Feb 10, 2020</span>
                                                        </div>
                                                    </div>
                                                    <div class="news-box d-flex">
                                                        <div class="news-img">
                                                            <img src="{{ asset('images/mega-img-2.jpg') }}" alt="">
                                                        </div>
                                                        <div class="news-con">
                                                            <p>Lorem ipsum dolor sit...</p>
                                                            <span>Feb 12, 2020</span>
                                                        </div>
                                                    </div>
                                                    <div class="news-box d-flex">
                                                        <div class="news-img">
                                                            <img src="{{ asset('images/mega-img-3.jpg') }}" alt="">
                                                        </div>
                                                        <div class="news-con">
                                                            <p>Lorem ipsum dolor sit...</p>
                                                            <span>Feb 21, 2020</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="m-slider owl-carousel">
                                                    <div class="slider-item">
                                                        <img src="{{ asset('images/mega-1.jpg') }}" alt="" class="img-fluid">
                                                        <span>-65%</span>
                                                    </div>
                                                    <div class="slider-item">
                                                        <img src="{{ asset('images/mega-2.jpg') }}" alt="" class="img-fluid">
                                                        <span>-50%</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mega-bnr">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <a href="#" class="bnr-box text-center">
                                                                <img src="{{ asset('images/mega-b-1.jpg') }}" alt="">
                                                                <span>Camera</span>
                                                            </a>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <a href="#" class="bnr-box text-center">
                                                                <img src="{{ asset('images/mega-b-2.jpg') }}" alt="">
                                                                <span>Mouse</span>
                                                            </a>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <a href="#" class="bnr-box text-center">
                                                                <img src="{{ asset('images/mega-b-3.jpg') }}" alt="">
                                                                <span>Earphone</span>
                                                            </a>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <a href="#" class="bnr-box text-center">
                                                                <img src="{{ asset('images/mega-b-4.jpg') }}" alt="">
                                                                <span>Speaker</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-inline-item"><a>PAGES <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown list-unstyled">
                                        <li><a href="03-about-us.html">About Us</a></li>
                                        <li><a href="04-category.html">Category</a></li>
                                        <li><a href="05-single-product.html">Single Product</a></li>
                                        <li><a href="06-shopping-cart.html">Shopping Cart</a></li>
                                        <li><a href="07-checkout.html">Checkout</a></li>
                                        <li><a href="08-login.html">Log In</a></li>
                                        <li><a href="09-register.html">Register</a></li>
                                        <li><a href="10-wishlist.html">Wishlist</a></li>
                                        <li><a href="11-compare.html">Compare</a></li>
                                        <li><a href="15-track-order.html">Track Order</a></li>
                                        <li><a href="12-terms-condition.html">Terms & Condition</a></li>
                                        <li><a href="13-faq.html">Faq</a></li>
                                        <li><a href="14-404.html">404</a></li>
                                    </ul>
                                </li>
                                <li class="list-inline-item"><a>BLOG <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown list-unstyled">
                                        <li><a href="16-blog-one.html">Blog Style 1</a></li>
                                        <li><a href="17-blog-two.html">Blog Style 2</a></li>
                                        <li><a href="18-blog-three.html">Blog Style 3</a></li>
                                        <li><a href="19-blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li class="list-inline-item"><a href="20-contact.html">CONTACT</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-2">
                        <div class="carts-area d-flex">
                            <div class="src-box">
                                <form action="{{route('products.search')}}" method="GET">
                                    <input type="text" name="query" placeholder="Search Here">
                                    <button type="submit" name="button"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                            <div class="wsh-box ml-auto">
                                <a href="" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                    <img src="{{ asset('images/heart.png') }}" alt="favorite">
                                    <span>0</span>
                                </a>
                            </div>
                            <div class="cart-box ml-4">
                            <a href="{{route('cart.index')}}" data-toggle="tooltip" data-placement="top" title="Shopping Cart">
                                    <img src="{{ asset('images/cart.png') }}" alt="cart">
                                    <span class="badge badge-pill badge-danger notify">{{Cart::session(auth()->id())->getContent()->count()}}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Sticky Menu -->

        <!-- Menu Area -->
        <section class="menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-menu">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item"><a>HOME <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown list-unstyled">
                                        <li><a href="index.html">Home Style 1</a></li>
                                        <li><a href="02-home-two.html">Home Style 2</a></li>
                                    </ul>
                                </li>
                                <li class="list-inline-item mega-menu"><a>MEGA MENU <i class="fa fa-angle-down"></i></a>
                                    <div class="mega-box">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="clt-area">
                                                    <h6>Clothing</h6>
                                                    <div class="link-box">
                                                        <a href="">- Western Clothing</a>
                                                        <a href="">- Traditional Clothing</a>
                                                        <a href="">- Winter Clothing</a>
                                                        <a href="">- Summer Clothing</a>
                                                        <a href="">- Inner Wear</a>
                                                        <a href="">- Night Wear</a>
                                                        <a href="">- Mens Clothing</a>
                                                        <a href="">- Womens Clothing</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="sm-phn">
                                                    <h6>Smartphones</h6>
                                                    <div class="dept-box">
                                                        <a href="">- Samsung</a>
                                                        <a href="">- Huawei</a>
                                                        <a href="">- One Plus</a>
                                                        <a href="">- Xiaomi</a>
                                                        <a href="">- Iphone</a>
                                                        <a href="">- Blackberry</a>
                                                        <a href="">- Nokia</a>
                                                        <a href="">- Oppo</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div class="lt-news">
                                                    <h6>Latest News</h6>
                                                    <div class="news-box d-flex">
                                                        <div class="news-img">
                                                            <img src="{{ asset('images/mega-img-1.jpg') }}" alt="">
                                                        </div>
                                                        <div class="news-con">
                                                            <p>Lorem ipsum dolor sit...</p>
                                                            <span>Feb 10, 2020</span>
                                                        </div>
                                                    </div>
                                                    <div class="news-box d-flex">
                                                        <div class="news-img">
                                                            <img src="{{ asset('images/mega-img-2.jpg') }}" alt="">
                                                        </div>
                                                        <div class="news-con">
                                                            <p>Lorem ipsum dolor sit...</p>
                                                            <span>Feb 12, 2020</span>
                                                        </div>
                                                    </div>
                                                    <div class="news-box d-flex">
                                                        <div class="news-img">
                                                            <img src="{{ asset('images/mega-img-3.jpg') }}" alt="">
                                                        </div>
                                                        <div class="news-con">
                                                            <p>Lorem ipsum dolor sit...</p>
                                                            <span>Feb 21, 2020</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="m-slider owl-carousel">
                                                    <div class="slider-item">
                                                        <img src="{{ asset('images/mega-1.jpg') }}" alt="" class="img-fluid">
                                                        <span>-65%</span>
                                                    </div>
                                                    <div class="slider-item">
                                                        <img src="{{ asset('images/mega-2.jpg') }}" alt="" class="img-fluid">
                                                        <span>-50%</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mega-bnr">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <a href="#" class="bnr-box text-center">
                                                                <img src="{{ asset('images/mega-b-1.jpg') }}" alt="">
                                                                <span>Camera</span>
                                                            </a>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <a href="#" class="bnr-box text-center">
                                                                <img src="{{ asset('images/mega-b-2.jpg') }}" alt="">
                                                                <span>Mouse</span>
                                                            </a>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <a href="#" class="bnr-box text-center">
                                                                <img src="{{ asset('images/mega-b-3.jpg') }}" alt="">
                                                                <span>Earphone</span>
                                                            </a>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <a href="#" class="bnr-box text-center">
                                                                <img src="{{ asset('images/mega-b-4.jpg') }}" alt="">
                                                                <span>Speaker</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-inline-item"><a>PAGES <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown list-unstyled">
                                        <li><a href="03-about-us.html">About Us</a></li>
                                        <li><a href="04-category.html">Category</a></li>
                                        <li><a href="05-single-product.html">Single Product</a></li>
                                        <li><a href="06-shopping-cart.html">Shopping Cart</a></li>
                                        <li><a href="07-checkout.html">Checkout</a></li>
                                        <li><a href="08-login.html">Log In</a></li>
                                        <li><a href="09-register.html">Register</a></li>
                                        <li><a href="10-wishlist.html">Wishlist</a></li>
                                        <li><a href="11-compare.html">Compare</a></li>
                                        <li><a href="15-track-order.html">Track Order</a></li>
                                        <li><a href="12-terms-condition.html">Terms & Condition</a></li>
                                        <li><a href="13-faq.html">Faq</a></li>
                                        <li><a href="14-404.html">404</a></li>
                                    </ul>
                                </li>
                                <li class="list-inline-item"><a>BLOG <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown list-unstyled">
                                        <li><a href="16-blog-one.html">Blog Style 1</a></li>
                                        <li><a href="17-blog-two.html">Blog Style 2</a></li>
                                        <li><a href="18-blog-three.html">Blog Style 3</a></li>
                                        <li><a href="19-blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li class="list-inline-item"><a href="shopview">SHOPS VIEW</a></li>
                                <li class="list-inline-item trac-btn"><a href="">Track Your Order</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
			</div>
			{{--Display Success Message--}}
			@if(session()->has('message'))
			<div class="alert alert-success text-center" role="alert">
			   {{session('message')}}
			</div>
		@endif
	
		{{-- display error message --}}
	
		@if(session()->has('error'))
		<div class="alert alert-danger text-center" role="alert">
			{{session('error')}}
		</div>
		@endif
        </section>
        <!-- End Menu Area -->

        <!-- Mobile Menu -->
        <section class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <a href=""><img src="{{ asset('images/logo.png') }}" alt=""></a>
                                <a href=""><span>Sign In</span></a>
                                <ul class="list-unstyled">
                                    <li><a href="">Home</a>
                                        <ul class="list-unstyled">
                                            <li><a href="index.html">Home Style 1</a></li>
	                                        <li><a href="02-home-two.html">Home Style 2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="">Pages</a>
                                        <ul class="list-unstyled">
                                            <li><a href="03-about-us.html">About Us</a></li>
                                            <li><a href="04-category.html">Category</a></li>
                                            <li><a href="05-single-product.html">Single Product</a></li>
                                            <li><a href="06-shopping-cart.html">Shopping Cart</a></li>
                                            <li><a href="07-checkout.html">Checkout</a></li>
                                            <li><a href="08-login.html">Log In</a></li>
                                            <li><a href="09-register.html">Register</a></li>
                                            <li><a href="10-wishlist.html">Wishlist</a></li>
                                            <li><a href="11-compare.html">Compare</a></li>
                                            <li><a href="15-track-order.html">Track Order</a></li>
                                            <li><a href="12-terms-condition.html">Terms & Condition</a></li>
                                            <li><a href="13-faq.html">Faq</a></li>
                                            <li><a href="14-404.html">404</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="">Blog</a>
                                        <ul class="list-unstyled">
                                            <li><a href="16-blog-one.html">Blog Style 1</a></li>
                                            <li><a href="17-blog-two.html">Blog Style 2</a></li>
                                            <li><a href="18-blog-three.html">Blog Style 3</a></li>
                                            <li><a href="19-blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="20-contact.html">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Mobile Menu -->

        

        <!--Main Area-->
		<main class="py-4">
		@yield('content')
		</main>
		<!--End Main Area -->

        <!-- Footer Area -->
        <section class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="f-contact">
                            <h5>Contact Info</h5>
                            <div class="f-add">
                                <i class="fa fa-map-marker"></i>
                                <span>Address :</span>
                                <p>795 South Park Avenue, New York, NY USA 94107</p>
                            </div>
                            <div class="f-email">
                                <i class="fa fa-envelope"></i>
                                <span>Email :</span>
                                <p>enquery@domain.com</p>
                            </div>
                            <div class="f-phn">
                                <i class="fa fa-phone"></i>
                                <span>Phone :</span>
                                <p>+1 908 875 7678</p>
                            </div>
                            <div class="f-social">
                                <ul class="list-unstyled list-inline">
                                    <li class="list-inline-item"><a href=""><i class="fa fa-facebook"></i></a></li>
                                    <li class="list-inline-item"><a href=""><i class="fa fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href=""><i class="fa fa-linkedin"></i></a></li>
                                    <li class="list-inline-item"><a href=""><i class="fa fa-google-plus"></i></a></li>
                                    <li class="list-inline-item"><a href=""><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="f-cat">
                            <h5>Categories</h5>
                            <ul class="list-unstyled">
                                <li><a href=""><i class="fa fa-angle-right"></i>Clothing</a></li>
                                <li><a href=""><i class="fa fa-angle-right"></i>Electronics</a></li>
                                <li><a href=""><i class="fa fa-angle-right"></i>Smartphones & Tablets</a></li>
                                <li><a href=""><i class="fa fa-angle-right"></i>Computer & Office</a></li>
                                <li><a href=""><i class="fa fa-angle-right"></i>Home Appliances</a></li>
                                <li><a href=""><i class="fa fa-angle-right"></i>Leather & Shoes</a></li>
                                <li><a href=""><i class="fa fa-angle-right"></i>Kids & Babies</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="f-link">
                            <h5>Quick Links</h5>
                            <ul class="list-unstyled">
                                <li><a href=""><i class="fa fa-angle-right"></i>My Account</a></li>
                                <li><a href=""><i class="fa fa-angle-right"></i>Shopping Cart</a></li>
                                <li><a href=""><i class="fa fa-angle-right"></i>My Wishlist</a></li>
                                <li><a href=""><i class="fa fa-angle-right"></i>Checkout</a></li>
                                <li><a href=""><i class="fa fa-angle-right"></i>Order History</a></li>
                                <li><a href=""><i class="fa fa-angle-right"></i>Log In</a></li>
                                <li><a href=""><i class="fa fa-angle-right"></i>Our Locations</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="f-sup">
                            <h5>Support</h5>
                            <ul class="list-unstyled">
                                <li><a href=""><i class="fa fa-angle-right"></i>Contact Us</a></li>
                                <li><a href=""><i class="fa fa-angle-right"></i>Payment Policy</a></li>
                                <li><a href=""><i class="fa fa-angle-right"></i>Return Policy</a></li>
                                <li><a href=""><i class="fa fa-angle-right"></i>Privacy Policy</a></li>
                                <li><a href=""><i class="fa fa-angle-right"></i>Frequently asked questions</a></li>
                                <li><a href=""><i class="fa fa-angle-right"></i>Terms & Condition</a></li>
                                <li><a href=""><i class="fa fa-angle-right"></i>Delivery Info</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="footer-btm">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>Copyright &copy; 2020 | </p>
                    </div>
                    <div class="col-md-6 text-right">
                        <img src="{{ asset('images/payment.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="back-to-top text-center">
                <img src="{{ asset('images/backtotop.png') }}" alt="" class="img-fluid">
            </div>
			
        </section>
        <!-- End Footer Area -->


        <!-- =========================================
        JavaScript Files
        ========================================== -->

        <!-- jQuery JS -->
        <script src="{{ asset('js/assets/vendor/jquery-1.12.4.min.js') }}"></script>

        <!-- Bootstrap -->
        <script src="{{ asset('js/assets/popper.min.js') }}"></script>
        <script src="{{ asset('js/assets/bootstrap.min.js') }}"></script>

        <!-- Owl Slider -->
        <script src="{{ asset('js/assets/owl.carousel.min.js') }}"></script>

        <!-- Wow Animation -->
        <script src="{{ asset('js/assets/wow.min.js') }}"></script>

        <!-- Price Filter -->
        <script src="{{ asset('js/assets/price-filter.js') }}"></script>

        <!--Star Rating-->
       
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/js/star-rating.min.js"></script>


        <!-- Mean Menu -->
        <script src="{{ asset('js/assets/jquery.meanmenu.min.js') }}"></script>

        <!--Easy Zoom-->
        <script src="{{ asset('js/jquery.exzoom.js') }}"></script>
        <!--Pass strength-->
        <script src="{{ asset('js/jquery.passtrength.js') }}"></script>

        <!-- Custom JS -->
        <script src="{{ asset('js/plugins.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>
        
                 
    </body>
</html>
