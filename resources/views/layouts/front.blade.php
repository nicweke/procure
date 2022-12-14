
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    {{--<link rel="stylesheet" href="fonts/Linearicons/Linearicons/Font/demo-files/demo.css">--}}



    
    <link rel="stylesheet" href="{{ asset('css/new/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/new/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{ asset('css/new/css/slick.css')}}">
    <link rel="stylesheet" href="{{ asset('css/new/css/lightgallery.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/new/css/fontawesome-stars.css')}}">
    <link rel="stylesheet" href="{{ asset('css/new/css/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/new/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/new/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/new/css/style-light.css')}}">
    <link rel="stylesheet" href="{{ asset('css/new/css/top.css')}}">

    
    

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
    
        <!------One Signal Script------->
        <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
        <script>
          var OneSignal = window.OneSignal || [];
          OneSignal.push(function() {
            OneSignal.init({
              appId: "b14b48b7-f2ca-484d-ad9b-68290d59cc81",
            });
          });
        </script>
        <!-------End of Script-------------->
</head>

<body>

    <!-- preloader -->
<div id="preloader">
	<div class="preloader">
		<span></span>
		<span></span>
	</div>
</div>
<!-- preloader end  -->


    <header class="header header--1" data-sticky="true">

        <div class="proposition_wrapper" style="margin-bottom: 7px;">
            <div class="proposition_outer">
                
                <a href="{{route('shop.intro')}}" title="Sell on Procure" class="text-center">
                <div class="proposition_inner" id="proposition_inner_1">
                        <div class="proposition_img_container" id="proposition_img_container_1">
                            <span class="text-center"><span style="position: relative;bottom:9px; padding:3px;"><i class="fas fa-cash-register"></i></span><b>SELL ON PROCURE</b> </span> 
                            
                        </div>
                </div>
                </a>
                
            <a href="{{route('track')}}" title="Track Our Order" class="text-center">
                <div class="proposition_inner" id="proposition_inner_2">
                        <div class="proposition_img_container" id="proposition_img_container_2">
                            <span class="text-center"><span style="position: relative;bottom:9px; padding:4px;"><i class="far fa-chart-bar"></i></span><b>&nbsp;TRACK YOUR ORDER</b></span> 
                            
                        </div>
                </div>
                </a>
                
            <a href="" title="My Account" class="text-center">
                <div class="proposition_inner" id="proposition_inner_3">
                        <div class="proposition_img_container" id="proposition_img_container_3">
                            <span class="text-center"><span style="position: relative;bottom:9px; padding:3px;"><i class="far fa-user"></i></span><b>&nbsp;MY ACCOUNT</b></span>
             
                        </div>
                </div>
                </a>
        
                <a href="/covid-19" title="COVID-19 Update" class="text-center">
                <div class="proposition_inner" id="proposition_inner_4">
                        <div class="proposition_img_container" id="proposition_img_container_4">
                            <span class="text-center"><b>&nbsp;</b>TRACK</span>

                        </div>
                </div>
                </a>
                
            </div>
        </div>
   
<div class="header__top" style="background-color:#ffffff;border-bottom:0.5px solid #e8eddf;">
            <div class="ps-container">
                <div class="header__left">
                    <div class="menu--product-categories">
                        <div class="menu__toggle"><span style="color: #000000"><i class="fas fa-bars"></i></span><span>Product Categories</span></div>
                        <div class="menu__content">
                            <ul class="menu--dropdown">
                                <?php  use App\Category;?>
                                <?php $categories = Category::whereNull('parent_id')->get();?>
                                
                                @foreach($categories as $category)
                        
                                <li class="current-menu-item menu-item-has-children has-mega-menu"><a href="{{route('products.index', ['category_id' => $category->id])}}"><i class="icon-laundry"></i> {{$category->name}}</a>
                                    <div class="mega-menu">
                                        <div class="mega-menu__column">
                                            @php
                                            $children = TCG\Voyager\Models\Category::where('parent_id', $category->id)->get();
                                            @endphp
                                            @if($children->isNotEmpty())
                                            @foreach ($children as $child)
                                            <h4><a href="{{route('products.index', ['category_id' => $child->id])}}">
                                                {{$child->name}}
                                                </a><span class="sub-toggle"></span></h4>
                                            
                                            @php
                                                $grandChild = TCG\Voyager\Models\Category::where('parent_id', $child->id)->get();
                                            @endphp
                                            @if($grandChild->isNotEmpty())
                                            <ul class="mega-menu__list">
                                                @foreach ($grandChild as $c)
                                                <li class="current-menu-item "><a href="{{route('products.index', ['category_id' => $c->id])}}">{{$c->name}}</a>
                                                </li>
                                                @endforeach
                                            </ul>
                                            @endif
                                            @endforeach
                                            @endif    
                                        </div>
                          
                                @endforeach
                            </ul>
                        </div>
                    </div><a class="ps-logo" href="{{route('home')}}"><img src="{{ asset('images/new/emaillogo.png')}}" alt="" style="position: relative; left: 15px; bottom:6px;"></a>
                </div>
                <div class="header__center">
                    <form class="ps-form--quick-search" action="{{route('products.search')}}" method="GET">
                        <input class="form-control" type="text" name="query" placeholder="Search Procure..." style="border-radius: 4px 0px 0px 4px;border-right:none;">
                        <button type="submit">Search</button>
                    </form>
                </div>
                <div class="header__right">
                    <div class="header__actions"><!--<a class="header__extra" href="#"><i class="far fa-chart-bar" style="color: #2d00f7"></i><span><i>0</i></span></a>--><a class="header__extra" href="{{url('WishList')}}"><i class="far fa-heart" style="color: #2d00f7;"></i><span><i style="color: #ffffff">{{App\Wishlist::count()}}</i></span></a>
                        <div class="ps-cart--mini"><a class="header__extra" href="{{route('cart.index')}}" ><i class="fas fa-shopping-bag" style="color: #2d00f7"></i><span><i style="color: #ffffff">
                            @auth
                            {{Cart::session(auth()->id())->getContent()->count()}}
                            @else
                            0
                            @endauth
                        </i></span></a>
                     
                        </div>
                        <div class="ps-block--user-header">
                            <div class="ps-block__left"><i class="far fa-user" style="color: #2d00f7"></i></div>
                            <div class="ps-block__right">


                                @guest
                                        <li style="list-style-type: none">
                                            <a href="{{ route('login') }}">{{ __('Login') }}</a>
                                        
                                        @if (Route::has('register'))
                                            <li style="list-style-type: none">
                                            <a href="{{ route('register') }}">{{ __('Register') }}</a>
                                            </li>
                                        @endif
                                    @else
                                        <li style="list-style-type: none">
                                            <a href="#" role="button"  aria-haspopup="true" aria-expanded="false" >
                                                {{ Auth::user()->first_name }}
                                            </a>
            
                                            <div>
                                                <a  href="{{ route('logout') }}"
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
                                        
                            </div>





                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navigation">
            <div class="ps-container">
                <div class="navigation__right">
                    <ul class="menu">
                        @foreach($categories as $category)
                        <li class="menu-item-has-children has-mega-menu"><a href="{{route('products.index', ['category_id' => $category->id])}}"><b>{{$category->name}}</b></a><span class="sub-toggle"></span>
                            <div class="mega-menu">
                                <div class="mega-menu__column">
                                    @php
                                        $children = TCG\Voyager\Models\Category::where('parent_id', $category->id)->get();
                                @endphp
                                        @if($children->isNotEmpty())
                                        @foreach ($children as $child)
                                    <h4><a href="{{route('products.index', ['category_id' => $child->id])}}">
                                        <b>{{$child->name}}</b>
                                        </a><span class="sub-toggle"></span></h4>

                                        @php
                                        $grandChild = TCG\Voyager\Models\Category::where('parent_id', $child->id)->get();
                                    @endphp
                                    @if($grandChild->isNotEmpty())
                                    <ul class="mega-menu__list">
                                        @foreach ($grandChild as $c)
                                        <li class="current-menu-item "><a href="{{route('products.index', ['category_id' => $c->id])}}">{{$c->name}}</a>
                                        </li>
                                        @endforeach
                                        
                                    </ul>
                                    @endif
                                    @endforeach
                                    @endif
                                </div> 
                            </div>
                        </li>
                        @endforeach
                    {{--</ul>
                    <ul class="navigation__extra">
                    <li><a href="{{route('shop.intro')}}">Sell on Procure</a></li>
                        <li><a href="{{route('track')}}">Track your order</a></li>
                 
                    </ul>--}}
                </div>
            </div>
        </nav>
    </header>
    <header class="header header--mobile" data-sticky="true">
        <div class="header__top">
            <div class="header__left">
                <p>Welcome to Martfury Online Shopping Store !</p>
            </div>
            <div class="header__right">
                <ul class="navigation__extra">
                    <li><a href="#">Sell on Martfury</a></li>
                    <li><a href="#">Tract your order</a></li>
                
                </ul>
            </div>
        </div>
        <div class="navigation--mobile">
        <div class="navigation__left"><a class="ps-logo" href="{{route('home')}}"><img src="{{ asset('images/new/emaillogo.png')}}" alt=""></a></div>
            <div class="navigation__right">
                <div class="header__actions">
                    <div class="ps-cart--mini"><a class="header__extra" href="{{route('cart.index')}}"><i class="fas fa-shopping-bag"></i><span><i>
    
                        @auth
                        {{Cart::session(auth()->id())->getContent()->count()}}
                        @else
                        0
                        @endauth
                    </i></span></a>
                        <!--<div class="ps-cart__content">
                            <div class="ps-cart__items">
                                <div class="ps-product--cart-mobile">
                                    <div class="ps-product__thumbnail"><a href="#"><img src="img/products/clothing/7.jpg" alt=""></a></div>
                                    <div class="ps-product__content"><a class="ps-product__remove" href="#"><i class="icon-cross"></i></a><a href="product-default.html">MVMTH Classical Leather Watch In Black</a>
                                        <p><strong>Sold by:</strong> YOUNG SHOP</p><small>1 x $59.99</small>
                                    </div>
                                </div>
                                <div class="ps-product--cart-mobile">
                                    <div class="ps-product__thumbnail"><a href="#"><img src="img/products/clothing/5.jpg" alt=""></a></div>
                                    <div class="ps-product__content"><a class="ps-product__remove" href="#"><i class="icon-cross"></i></a><a href="product-default.html">Sleeve Linen Blend Caro Pane Shirt</a>
                                        <p><strong>Sold by:</strong> YOUNG SHOP</p><small>1 x $59.99</small>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-cart__footer">
                                <h3>Sub Total:<strong>$59.99</strong></h3>
                                <figure><a class="ps-btn" href="shopping-cart.html">View Cart</a><a class="ps-btn" href="checkout.html">Checkout</a></figure>
                            </div>
                        </div>-->
                    </div>
                    <div class="ps-block--user-header">
                        <div class="ps-block__left"><i class="far fa-user"></i></div>
                        <div class="ps-block__right">
                            @guest
                                        <li>
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                        @if (Route::has('register'))
                                            <li >
                                                <a href="{{ route('register') }}">{{ __('Register') }}</a>
                                            </li>
                                        @endif
                                    @else
                                        <li >
                                            <a href="#" role="button"  aria-haspopup="true" aria-expanded="false" >
                                                {{ Auth::user()->first_name }} <span class="caret"></span>
                                            </a>
            
                                            <div >
                                                <a  href="{{ route('logout') }}"
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
                                </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="ps-search--mobile">
            <form class="ps-form--search-mobile" action="{{route('products.search')}}" method="GET">
                <div class="form-group--nest">
                    <input class="form-control" type="text" placeholder="Search something...">
                    <button type="submit"><i class="fas fa-search"></i></button>
                </div>
            </form>
        </div>
    </header>
    <!--<div class="ps-panel--sidebar" id="cart-mobile">
        <div class="ps-panel__header">
            <h3>Shopping Cart</h3>
        </div>
        <div class="navigation__content">
            <div class="ps-cart--mobile">
                <div class="ps-cart__content">
                    <div class="ps-product--cart-mobile">
                        <div class="ps-product__thumbnail"><a href="#"><img src="img/products/clothing/7.jpg" alt=""></a></div>
                        <div class="ps-product__content"><a class="ps-product__remove" href="#"><i class="icon-cross"></i></a><a href="product-default.html">MVMTH Classical Leather Watch In Black</a>
                            <p><strong>Sold by:</strong> YOUNG SHOP</p><small>1 x $59.99</small>
                        </div>
                    </div>
                </div>
                <div class="ps-cart__footer">
                    <h3>Sub Total:<strong>$59.99</strong></h3>
                    <figure><a class="ps-btn" href="shopping-cart.html">View Cart</a><a class="ps-btn" href="checkout.html">Checkout</a></figure>
                </div>
            </div>
        </div>
    </div>-->
    <div class="ps-panel--sidebar" id="navigation-mobile">
        <div class="ps-panel__header">
            <h3>Categories</h3>
        </div>
        <div class="ps-panel__content">
            <ul class="menu--mobile">
                <li class="current-menu-item "><a href="#">Hot Promotions</a>
                </li>
                <li class="current-menu-item menu-item-has-children has-mega-menu"><a href="#">Consumer Electronic</a><span class="sub-toggle"></span>
                    <div class="mega-menu">
                        <div class="mega-menu__column">
                            <h4>Electronic<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li class="current-menu-item "><a href="#">Home Audio &amp; Theathers</a>
                                </li>
                                <li class="current-menu-item "><a href="#">TV &amp; Videos</a>
                                </li>
                                <li class="current-menu-item "><a href="#">Camera, Photos &amp; Videos</a>
                                </li>
                                <li class="current-menu-item "><a href="#">Cellphones &amp; Accessories</a>
                                </li>
                                <li class="current-menu-item "><a href="#">Headphones</a>
                                </li>
                                <li class="current-menu-item "><a href="#">Videosgames</a>
                                </li>
                                <li class="current-menu-item "><a href="#">Wireless Speakers</a>
                                </li>
                                <li class="current-menu-item "><a href="#">Office Electronic</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mega-menu__column">
                            <h4>Accessories &amp; Parts<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li class="current-menu-item "><a href="#">Digital Cables</a>
                                </li>
                                <li class="current-menu-item "><a href="#">Audio &amp; Video Cables</a>
                                </li>
                                <li class="current-menu-item "><a href="#">Batteries</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="current-menu-item "><a href="#">Clothing &amp; Apparel</a>
                </li>
                <li class="current-menu-item "><a href="#">Home, Garden &amp; Kitchen</a>
                </li>
                <li class="current-menu-item "><a href="#">Health &amp; Beauty</a>
                </li>
                <li class="current-menu-item "><a href="#">Yewelry &amp; Watches</a>
                </li>
                <li class="current-menu-item menu-item-has-children has-mega-menu"><a href="#">Computer &amp; Technology</a><span class="sub-toggle"></span>
                    <div class="mega-menu">
                        <div class="mega-menu__column">
                            <h4>Computer &amp; Technologies<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li class="current-menu-item "><a href="#">Computer &amp; Tablets</a>
                                </li>
                                <li class="current-menu-item "><a href="#">Laptop</a>
                                </li>
                                <li class="current-menu-item "><a href="#">Monitors</a>
                                </li>
                                <li class="current-menu-item "><a href="#">Networking</a>
                                </li>
                                <li class="current-menu-item "><a href="#">Drive &amp; Storages</a>
                                </li>
                                <li class="current-menu-item "><a href="#">Computer Components</a>
                                </li>
                                <li class="current-menu-item "><a href="#">Security &amp; Protection</a>
                                </li>
                                <li class="current-menu-item "><a href="#">Gaming Laptop</a>
                                </li>
                                <li class="current-menu-item "><a href="#">Accessories</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="current-menu-item "><a href="#">Babies &amp; Moms</a>
                </li>
                <li class="current-menu-item "><a href="#">Sport &amp; Outdoor</a>
                </li>
                <li class="current-menu-item "><a href="#">Phones &amp; Accessories</a>
                </li>
                <li class="current-menu-item "><a href="#">Books &amp; Office</a>
                </li>
                <li class="current-menu-item "><a href="#">Cars &amp; Motocycles</a>
                </li>
                <li class="current-menu-item "><a href="#">Home Improments</a>
                </li>
                <li class="current-menu-item "><a href="#">Vouchers &amp; Services</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="navigation--list">
        <div class="navigation__content"><a class="navigation__item ps-toggle--sidebar" href="#menu-mobile"><i class="icon-menu"></i><span> Menu</span></a><a class="navigation__item ps-toggle--sidebar" href="#navigation-mobile"><i class="icon-list4"></i><span> Categories</span></a><a class="navigation__item ps-toggle--sidebar" href="#search-sidebar"><i class="icon-magnifier"></i><span> Search</span></a><a class="navigation__item ps-toggle--sidebar" href="#cart-mobile"><i class="icon-bag2"></i><span> Cart</span></a></div>
    </div>
    <div class="ps-panel--sidebar" id="search-sidebar">
        <div class="ps-panel__header">
            <form class="ps-form--search-mobile" action="{{route('products.search')}}" method="GET">
                <div class="form-group--nest">
                    <input class="form-control" name="query" type="text" placeholder="Search something...">
                    <button type="submit"><i class="icon-magnifier"></i></button>
                </div>
            </form>
        </div>
        <div class="navigation__content"></div>
    </div>
    <div class="ps-panel--sidebar" id="menu-mobile">
        <div class="ps-panel__header">
            <h3>Menu</h3>
        </div>
        <div class="ps-panel__content">
            <ul class="menu--mobile">
                <li class="menu-item-has-children"><a href="index.html">Home</a><span class="sub-toggle"></span>
                    <ul class="sub-menu">
                        <li class="current-menu-item "><a href="index.html">Marketplace Full Width</a>
                        </li>
                        <li class="current-menu-item "><a href="homepage-2.html">Home Auto Parts</a>
                        </li>
                        <li class="current-menu-item "><a href="homepage-10.html">Home Technology</a>
                        </li>
                        <li class="current-menu-item "><a href="homepage-9.html">Home Organic</a>
                        </li>
                        <li class="current-menu-item "><a href="homepage-3.html">Home Marketplace V1</a>
                        </li>
                        <li class="current-menu-item "><a href="homepage-4.html">Home Marketplace V2</a>
                        </li>
                        <li class="current-menu-item "><a href="homepage-5.html">Home Marketplace V3</a>
                        </li>
                        <li class="current-menu-item "><a href="homepage-6.html">Home Marketplace V4</a>
                        </li>
                        <li class="current-menu-item "><a href="homepage-7.html">Home Electronic</a>
                        </li>
                        <li class="current-menu-item "><a href="homepage-8.html">Home Furniture</a>
                        </li>
                        <li class="current-menu-item "><a href="homepage-kids.html">Home Kids</a>
                        </li>
                        <li class="current-menu-item "><a href="homepage-photo-and-video.html">Home photo and picture</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item-has-children has-mega-menu"><a href="shop-default.html">Shop</a><span class="sub-toggle"></span>
                    <div class="mega-menu">
                        <div class="mega-menu__column">
                            <h4>Catalog Pages<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li class="current-menu-item "><a href="shop-default.html">Shop Default</a>
                                </li>
                                <li class="current-menu-item "><a href="shop-default.html">Shop Fullwidth</a>
                                </li>
                                <li class="current-menu-item "><a href="shop-categories.html">Shop Categories</a>
                                </li>
                                <li class="current-menu-item "><a href="shop-sidebar.html">Shop Sidebar</a>
                                </li>
                                <li class="current-menu-item "><a href="shop-sidebar-without-banner.html">Shop Without Banner</a>
                                </li>
                                <li class="current-menu-item "><a href="shop-carousel.html">Shop Carousel</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mega-menu__column">
                            <h4>Product Layout<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li class="current-menu-item "><a href="product-default.html">Default</a>
                                </li>
                                <li class="current-menu-item "><a href="product-extend.html">Extended</a>
                                </li>
                                <li class="current-menu-item "><a href="product-full-content.html">Full Content</a>
                                </li>
                                <li class="current-menu-item "><a href="product-box.html">Boxed</a>
                                </li>
                                <li class="current-menu-item "><a href="product-sidebar.html">Sidebar</a>
                                </li>
                                <li class="current-menu-item "><a href="product-default.html">Fullwidth</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mega-menu__column">
                            <h4>Product Types<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li class="current-menu-item "><a href="product-default.html">Simple</a>
                                </li>
                                <li class="current-menu-item "><a href="product-default.html">Color Swatches</a>
                                </li>
                                <li class="current-menu-item "><a href="product-image-swatches.html">Images Swatches</a>
                                </li>
                                <li class="current-menu-item "><a href="product-countdown.html">Countdown</a>
                                </li>
                                <li class="current-menu-item "><a href="product-multi-vendor.html">Multi-Vendor</a>
                                </li>
                                <li class="current-menu-item "><a href="product-instagram.html">Instagram</a>
                                </li>
                                <li class="current-menu-item "><a href="product-affiliate.html">Affiliate</a>
                                </li>
                                <li class="current-menu-item "><a href="product-on-sale.html">On sale</a>
                                </li>
                                <li class="current-menu-item "><a href="product-video.html">Video Featured</a>
                                </li>
                                <li class="current-menu-item "><a href="product-groupped.html">Grouped</a>
                                </li>
                                <li class="current-menu-item "><a href="product-out-stock.html">Out Of Stock</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mega-menu__column">
                            <h4>Woo Pages<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li class="current-menu-item "><a href="shopping-cart.html">Shopping Cart</a>
                                </li>
                                <li class="current-menu-item "><a href="checkout.html">Checkout</a>
                                </li>
                                <li class="current-menu-item "><a href="whishlist.html">Whishlist</a>
                                </li>
                                <li class="current-menu-item "><a href="compare.html">Compare</a>
                                </li>
                                <li class="current-menu-item "><a href="order-tracking.html">Order Tracking</a>
                                </li>
                                <li class="current-menu-item "><a href="my-account.html">My Account</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="menu-item-has-children has-mega-menu"><a href="">Pages</a><span class="sub-toggle"></span>
                    <div class="mega-menu">
                        <div class="mega-menu__column">
                            <h4>Basic Page<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li class="current-menu-item "><a href="about-us.html">About Us</a>
                                </li>
                                <li class="current-menu-item "><a href="contact-us.html">Contact</a>
                                </li>
                                <li class="current-menu-item "><a href="faqs.html">Faqs</a>
                                </li>
                                <li class="current-menu-item "><a href="comming-soon.html">Comming Soon</a>
                                </li>
                                <li class="current-menu-item "><a href="404-page.html">404 Page</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mega-menu__column">
                            <h4>Vendor Pages<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li class="current-menu-item "><a href="become-a-vendor.html">Become a Vendor</a>
                                </li>
                                <li class="current-menu-item "><a href="vendor-store.html">Vendor Store</a>
                                </li>
                                <li class="current-menu-item "><a href="vendor-dashboard-free.html">Vendor Dashboard Free</a>
                                </li>
                                <li class="current-menu-item "><a href="vendor-dashboard-pro.html">Vendor Dashboard Pro</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="menu-item-has-children has-mega-menu"><a href="">Blogs</a><span class="sub-toggle"></span>
                    <div class="mega-menu">
                        <div class="mega-menu__column">
                            <h4>Blog Layout<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li class="current-menu-item "><a href="blog-grid.html">Grid</a>
                                </li>
                                <li class="current-menu-item "><a href="blog-list.html">Listing</a>
                                </li>
                                <li class="current-menu-item "><a href="blog-small-thumb.html">Small Thumb</a>
                                </li>
                                <li class="current-menu-item "><a href="blog-left-sidebar.html">Left Sidebar</a>
                                </li>
                                <li class="current-menu-item "><a href="blog-right-sidebar.html">Right Sidebar</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mega-menu__column">
                            <h4>Single Blog<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li class="current-menu-item "><a href="blog-detail.html">Single 1</a>
                                </li>
                                <li class="current-menu-item "><a href="blog-detail-2.html">Single 2</a>
                                </li>
                                <li class="current-menu-item "><a href="blog-detail-3.html">Single 3</a>
                                </li>
                                <li class="current-menu-item "><a href="blog-detail-4.html">Single 4</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
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
    
    <main>
        @yield('content')
    </main>





    


<footer class="ps-footer">
        <div class="ps-container">
            <div class="ps-footer__widgets">
                <aside class="widget widget_footer widget_contact-us">
                    <h4 class="widget-title">Get in touch</h4>
                    <div class="widget_content">
                        <p>Call us 24/7</p>
                        <h4><span><i class="fas fa-mobile-alt"></i>&nbsp;&nbsp;</span>+254 705123456</h4>
                        <p>Tumac House, Mandela Road<br><span class="__cf_email__">procure@procure.com</span></p>
                        <ul class="ps-list--social">
                            <li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a class="google-plus" href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a class="instagram" href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </aside>
                <aside class="widget widget_footer">
                    <h4 class="widget-title">Quick links</h4>
                    <ul class="ps-list--link">
                        <!--<li><a href="#">Policy</a></li>-->
                    <li><a href="{{route('terms')}}">Term & Condition</a></li>
                    <li><a href="{{route('refund')}}">Return Policy</a></li>
                    <li><a href="{{route('faqs')}}">FAQs</a></li>
                    </ul>
                </aside>
                <aside class="widget widget_footer">
                    <h4 class="widget-title">About Us</h4>
                    <ul class="ps-list--link">
                    <li><a href="{{route('about')}}">About Procure</a></li>
                    <li><a href="{{route('contact')}}">Contact Us</a></li>
                    <li><a href="{{route('support')}}">Support</a></li>
                        <!--<li><a href="contact-us.html">Careers at Procure</a></li>-->
                    </ul>
                </aside>
                <aside class="widget widget_footer">
                    <h4 class="widget-title">Sell on  Procure</h4>
                    <ul class="ps-list--link">
                    <li><a href="{{ route('shop.intro')}}">Become a Seller</a></li>
                    <li><a href="{{ route('shopview')}}">Our Sellers</a></li>
                        
                    </ul>
                </aside>
            </div>
    
            <div class="ps-footer__copyright">
                <p>?? 2020 Procure. All Rights Reserved</p>
                <p><span>We Using Safe Payment For:</span><a href="#"><img src="{{ asset('img/payment-method/1.jpg')}}" alt=""></a><a href="#"><img src="{{ asset('images/new/payment_methods.png')}}" alt=""></a></p>
            </div>
        </div>
    </footer>

    <div id="back2top"><i class="fas fa-angle-up"></i></div>
    <div class="ps-site-overlay"></div>
    <div id="loader-wrapper">
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <div class="ps-search" id="site-search"><a class="ps-btn--close" href="#"></a>
        <div class="ps-search__content">
            <form class="ps-form--primary-search" action="do_action" method="post">
                <input class="form-control" type="text" placeholder="Search for...">
                <button><i class="aroma-magnifying-glass"></i></button>
            </form>
        </div>
    </div>



    
    <?php use App\Product; ?>
    <?php //$product = Product::whereIn('id', $request->products)->get();?>
    <?php //$products = Product::find($id);?>
    <?php //$id = Product::find('id'); ?>
    <?php //$product = Product::where($id)->get();?>

    {{--<div class="modal fade" id="product-quickview" tabindex="-1" role="dialog" aria-labelledby="product-quickview" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content"><span class="modal-close" data-dismiss="modal"><i class="fas fa-times"></i>></span>
                <article class="ps-product--detail ps-product--fullwidth ps-product--quickview">
                    <div class="ps-product__header">
                        <div class="ps-product__thumbnail" data-vertical="false">
                            <div class="ps-product__images" data-arrow="true">
                                <div class="item"><img src="{{asset('storage/'.$product->cover_img)}}" alt=""></div>
                                <div class="item"><img src="{{asset('storage/'.$product->alt_img)}}" alt=""></div>
                                <div class="item"><img src="{{asset('storage/'.$product->alt_img2)}}" alt=""></div>
                                <div class="item"><img src="{{asset('storage/'.$product->alt_img3)}}" alt=""></div>
                            </div>
                        </div>
                        <div class="ps-product__info">
                            <h1>{{$product->name}}</h1>
                            <div class="ps-product__meta">
                                <p>Brand:<a href="shop-default.html">{{$product->brand}}</a></p>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select><span>(1 review)</span>
                                </div>
                            </div>
                            <h4 class="ps-product__price">KES {{$product->price}}</h4>
                            <div class="ps-product__desc">
                                <p>Sold By:<a href="shop-default.html"><strong></strong></a></p>
                                <ul class="ps-list--dot">
                                    <li>{{$product->description}}</li>
                                </ul>
                            </div>
                            <div class="ps-product__shopping"><a class="ps-btn ps-btn--black" href="{{route('cart.add', $product->id)}}">Add to cart</a><a class="ps-btn" href="{{url('quote/'.$product->id)}}">Request Quote</a>
                                <div class="ps-product__actions"><a href="#"><i class="far fa-heart"></i></a><a href="#"><i class="far fa-chart-bar"></i></a></div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>--}}




    <script data-cfasync="false" src="{{ asset('js/new/js/email-decode.min.js')}}"></script>
    <script src="{{ asset('js/new/js/jquery-1.12.4.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
    <script src="{{ asset('jsnew/js/popper.min.js')}}"></script>
    <script src="{{ asset('js/new/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('js/new/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/new/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{ asset('js/new/js/masonry.pkgd.min.js')}}"></script>
    <script src="{{ asset('js/new/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset('js/new/js/jquery.matchHeight-min.js')}}"></script>
    <script src="{{ asset('js/new/js/slick.min.js')}}"></script>
    <script src="{{ asset('js/new/js/jquery.barrating.min.js')}}"></script>
    <script src="{{ asset('js/new/js/slick-animation.min.js')}}"></script>
    <script src="{{ asset('js/new/js/lightgallery-all.min.js')}}"></script>
    <script src="{{ asset('js/new/js/jquery-ui.min.js')}}"></script>
    <script src="{{ asset('js/new/js/sticky-sidebar.min.js')}}"></script>
    <script src="{{ asset('js/new/js/jquery.slimscroll.min.js')}}"></script>
    <script src="{{ asset('js/new/js/select2.full.min.js')}}"></script>
    <script src="{{ asset('js/new/js/gmap3.min.js')}}"></script>
    
    <!-- custom scripts-->
    <script src="{{ asset('js/new/js/main.js')}}"></script>
    
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDxflHHc5FlDVI-J71pO7hM1QJNW1dRp4U&amp;region=GB"></script>
</body>

</html>