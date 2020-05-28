@extends('layouts.front')

@section('content')

<div class="container">

    
    @extends('layouts.front')

    @section('content')
    
            <!-- Breadcrumb Area -->
            <section class="breadcrumb-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="breadcrumb-box text-center">
                                <ul class="list-unstyled list-inline">
                                    <li class="list-inline-item"><a href="{{route('home') }}">Home</a></li>
                                    <li class="list-inline-item"><span>||</span> Products</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Breadcrumb Area -->
    
            <!-- Category Area -->
            <section class="category">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="category-box">
                                <div class="sec-title">
                                    <h6>Categories</h6>
                                </div>
                                <!-- accordion -->
                                <div id="accordion">
                                    <div class="card">
                                        <div class="card-header">
                                            <a href="" data-toggle="collapse" data-target="#collapse1">
                                                <span>Clothing</span>
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                        </div>
                                        <div id="collapse1" class="collapse">
                                            <div class="card-body">
                                                <ul class="list-unstyled">
                                                    <li><a href=""><i class="fa fa-angle-right"></i> Catagory 1</a></li>
                                                    <li><a href=""><i class="fa fa-angle-right"></i> Catagory 2</a></li>
                                                    <li><a href=""><i class="fa fa-angle-right"></i> Catagory 3</a></li>
                                                    <li><a href=""><i class="fa fa-angle-right"></i> Catagory 4</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a href="" data-toggle="collapse" data-target="#collapse2">
                                                <span>Electronics</span>
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                        </div>
                                        <div id="collapse2" class="collapse">
                                            <div class="card-body">
                                                <ul class="list-unstyled">
                                                    <li><a href=""><i class="fa fa-angle-right"></i> Catagory 1</a></li>
                                                    <li><a href=""><i class="fa fa-angle-right"></i> Catagory 2</a></li>
                                                    <li><a href=""><i class="fa fa-angle-right"></i> Catagory 3</a></li>
                                                    <li><a href=""><i class="fa fa-angle-right"></i> Catagory 4</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a href="" data-toggle="collapse" data-target="#collapse3">
                                                <span>Home Appliance</span>
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                        </div>
                                        <div id="collapse3" class="collapse">
                                            <div class="card-body">
                                                <ul class="list-unstyled">
                                                    <li><a href=""><i class="fa fa-angle-right"></i> Catagory 1</a></li>
                                                    <li><a href=""><i class="fa fa-angle-right"></i> Catagory 2</a></li>
                                                    <li><a href=""><i class="fa fa-angle-right"></i> Catagory 3</a></li>
                                                    <li><a href=""><i class="fa fa-angle-right"></i> Catagory 4</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a href="" data-toggle="collapse" data-target="#collapse4">
                                                <span>Smartphone</span>
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                        </div>
                                        <div id="collapse4" class="collapse">
                                            <div class="card-body">
                                                <ul class="list-unstyled">
                                                    <li><a href=""><i class="fa fa-angle-right"></i> Catagory 1</a></li>
                                                    <li><a href=""><i class="fa fa-angle-right"></i> Catagory 2</a></li>
                                                    <li><a href=""><i class="fa fa-angle-right"></i> Catagory 3</a></li>
                                                    <li><a href=""><i class="fa fa-angle-right"></i> Catagory 4</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a href="" data-toggle="collapse" data-target="#collapse5">
                                                <span>Computer</span>
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                        </div>
                                        <div id="collapse5" class="collapse">
                                            <div class="card-body">
                                                <ul class="list-unstyled">
                                                    <li><a href=""><i class="fa fa-angle-right"></i> Catagory 1</a></li>
                                                    <li><a href=""><i class="fa fa-angle-right"></i> Catagory 2</a></li>
                                                    <li><a href=""><i class="fa fa-angle-right"></i> Catagory 3</a></li>
                                                    <li><a href=""><i class="fa fa-angle-right"></i> Catagory 4</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a href="" data-toggle="collapse" data-target="#collapse6">
                                                <span>Kids Collection</span>
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                        </div>
                                        <div id="collapse6" class="collapse">
                                            <div class="card-body">
                                                <ul class="list-unstyled">
                                                    <li><a href=""><i class="fa fa-angle-right"></i> Catagory 1</a></li>
                                                    <li><a href=""><i class="fa fa-angle-right"></i> Catagory 2</a></li>
                                                    <li><a href=""><i class="fa fa-angle-right"></i> Catagory 3</a></li>
                                                    <li><a href=""><i class="fa fa-angle-right"></i> Catagory 4</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a href="" data-toggle="collapse" data-target="#collapse7">
                                                <span>Automobile</span>
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                        </div>
                                        <div id="collapse7" class="collapse">
                                            <div class="card-body">
                                                <ul class="list-unstyled">
                                                    <li><a href=""><i class="fa fa-angle-right"></i> Catagory 1</a></li>
                                                    <li><a href=""><i class="fa fa-angle-right"></i> Catagory 2</a></li>
                                                    <li><a href=""><i class="fa fa-angle-right"></i> Catagory 3</a></li>
                                                    <li><a href=""><i class="fa fa-angle-right"></i> Catagory 4</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cat-brand">
                                <div class="sec-title">
                                    <h6>Brands</h6>
                                </div>
                                <div class="brand-box">
                                    <ul class="list-unstyled">
                                        <li><input type="checkbox" id="samsung" name="name"><label for="samsung">Samsung</label></li>
                                        <li><input type="checkbox" id="apple" name="name"><label for="apple">Apple</label></li>
                                        <li><input type="checkbox" id="sony" name="name"><label for="sony">Sony</label></li>
                                        <li><input type="checkbox" id="onep" name="name"><label for="onep">One Plus</label></li>
                                        <li><input type="checkbox" id="hua" name="name"><label for="hua">Huawei</label></li>
                                        <li><input type="checkbox" id="whi" name="name"><label for="whi">Whirlpool</label></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="price-range">
                                <div class="sec-title">
                                    <h6>Price</h6>
                                </div>
                                <div class="price-filter">
                                    <div id="slider-range"></div>
                                    <input type="text" id="amount" readonly>
                                    <button type="button" name="button">Filter</button>
                                </div>
                            </div>
                            <div class="color">
                                <div class="sec-title">
                                    <h6>Color</h6>
                                </div>
                                <ul class="list-unstyled color-box">
                                    <li><input type="checkbox" id="red" name="name"><label for="red"><span style="background: red;"></span>Red</label></li>
                                    <li><input type="checkbox" id="green" name="name"><label for="green"><span style="background: green;"></span>Green</label></li>
                                    <li><input type="checkbox" id="blue" name="name"><label for="blue"><span style="background: blue;"></span>Blue</label></li>
                                    <li><input type="checkbox" id="gold" name="name"><label for="gold"><span style="background: gold;"></span>Golden</label></li>
                                    <li><input type="checkbox" id="brown" name="name"><label for="brown"><span style="background: brown;"></span>Brown</label></li>
                                    <li><input type="checkbox" id="black" name="name"><label for="black"><span style="background: black;"></span>Black</label></li>
                                </ul>
                            </div>
                            <div class="pro-tag">
                                <div class="sec-title">
                                    <h6>Product Tag</h6>
                                </div>
                                <div class="tag-box">
                                    <a href="">Shirt</a>
                                    <a href="">Smartphone</a>
                                    <a href="">Camera</a>
                                    <a href="">Pant</a>
                                    <a href="">Glass</a>
                                    <a href="">Smart Led Tv</a>
                                    <a href="">Watch</a>
                                    <a href="">Micro Oven</a>
                                    <a href="">Toy</a>
                                </div>
                            </div>
                            <div class="add-box">
                                <a href=""><img src="images/s-banner2.jpg" alt="" class="img-fluid"></a>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="product-box">
                                <div class="cat-box d-flex justify-content-between">
                                    <header class="border-bottom mb-4 pb-3">
                                        <div class="form-inline">
                                        <p><span class="mr-md-auto">{{$products->total()}}</span> Products Found</p>
                                        
                                        </div>
                                </header><!-- sect-heading -->
                                    <!-- Nav tabs -->
                                    <div class="view">
                                        <ul class="nav nav-tabs" role="tablist">
                                            
                                            
                                        </ul>
                                    </div>
                                  
                                    
                                    <div class="page">
                                        <p>     </p>
                                    </div>
                                </div>
    
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="grid" role="tabpanel">
                                        <div class="row">
                                            @foreach ($products as $product)
                                            <div class="col-lg-4 col-md-6">
                                                <div class="tab-item">
                                                    <div class="tab-img">
                                                        
                                                        <img class="main-img img-fluid" src="{{asset('storage/'.$product->cover_img)}}" alt="">
                                                        <img class="sec-img img-fluid" src="{{asset('storage/'.$product->cover_img)}}" alt="">
                                                        <div class="layer-box">
                                                         
                                                            <a href="" class="it-comp" data-toggle="tooltip" data-placement="left" title="Compare"><img src="{{ asset('images/it-comp.png') }}" alt=""></a>
                                                            <a href="" class="it-fav" data-toggle="tooltip" data-placement="left" title="Favourite"><img src="{{ asset('images/it-fav.png') }}" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-heading">
                                                        <p><a href="{{url('product/'.$product->id)}}">{{$product->name}}</a></p>
                                                    </div>
                                                    <div class="img-content d-flex justify-content-between">
                                                        <div>
                                                            <ul class="list-unstyled list-inline fav">
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                            <ul class="list-unstyled list-inline ">
                                                                <li class="list-inline-item" style="font-size: 16px"><b>KES {{$product->price}}</b></li>
                                                                
                                                            </ul>
                                                        </div>
                                                        <div>
                                                            <a href="{{route('cart.add', $product->id)}}" data-toggle="tooltip" data-placement="top" title="Add to Cart"><img src="{{ asset('images/it-cart.png') }}" alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
    
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="pagination-box text-center">
                                    <ul class="list-unstyled list-inline">
                                        <nav class="mt-4" aria-label="Page navigation sample">
    
                                            {{$products->appends(['query'=>request('query')])->render()}}
                                         
                                        </nav>
    
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Category Area -->
    
            <!-- Brand area 2 -->
            <section class="brand2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="tp-bnd owl-carousel">
                                <div class="bnd-items">
                                    <a href="#"><img src="{{ asset('images/brand-01.png') }}" alt="" class="img-fluid"></a>
                                </div>
                                <div class="bnd-items">
                                    <a href="#"><img src="{{ asset('images/brand-02.png') }}" alt="" class="img-fluid"></a>
                                </div>
                                <div class="bnd-items">
                                    <a href="#"><img src="{{ asset('images/brand-03.png') }}" alt="" class="img-fluid"></a>
                                </div>
                                <div class="bnd-items">
                                    <a href="#"><img src="{{ asset('images/brand-04.png') }}" alt="" class="img-fluid"></a>
                                </div>
                                <div class="bnd-items">
                                    <a href="#"><img src="{{ asset('images/brand-05.png') }}" alt="" class="img-fluid"></a>
                                </div>
                                <div class="bnd-items">
                                    <a href="#"><img src="{{ asset('images/brand-06.png') }}" alt="" class="img-fluid"></a>
                                </div>
                                <div class="bnd-items">
                                    <a href="#"><img src="{{ asset('images/brand-07.png') }}" alt="" class="img-fluid"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Brand area 2 -->
    
    
    
    
       
    
    
        
    
    
    
    
    @endsection



@endsection