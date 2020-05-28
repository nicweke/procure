@extends('layouts.front')

@section('content')
<!-- Breadcrumb Area -->
<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-box text-center">
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item" style="float: left"><a href="{{url()->previous() }}"><i class="fas fa-arrow-left"></i>Back</a></li>
                        <li class="list-inline-item"><a href="{{route('home') }}">Home</a></li>
                        <li class="list-inline-item"><span>||</span> Products</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
  </section>
  <!-- End Breadcrumb Area -->





<section class="category">
    <div class="container">
    <h3 style="text-align: center"><b>{{ $categoryName ?? null }} Products</b></h3>
      <div class="product-box">
        <div class="cat-box d-flex justify-content-between">
            <!-- Nav tabs -->
            <div class="view">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#grid"><i class="fa fa-th-large"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#list"><i class="fa fa-th-list"></i></a>
                    </li>
                </ul>
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
            <div class="tab-pane fade" id="list" role="tabpanel">
                <div class="row">

                    @foreach ($products as $product)
                    <div class="col-lg-12 col-md-6">
                        <div class="tab-item2">
                            <div class="row">
                                <div class="col-lg-4 col-md-12">
                                    <div class="tab-img">
                                        <img class="main-img img-fluid" src="{{asset('storage/'.$product->cover_img)}}" alt="">
                                        <img class="sec-img img-fluid" src="{{asset('storage/'.$product->cover_img)}}" alt="">
                                        
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-12">
                                    <div class="item-heading d-flex justify-content-between">
                                        <div class="item-top">
                                            <ul class="list-unstyled list-inline cate">
                                                <li class="list-inline-item"><p>{{$product->name}}</p></li>
                                                
                                            </ul>
                                            <p><a href="{{url('product/'.$product->id)}}">{{$product->details}}</a></p>
                                            <ul class="list-unstyled list-inline fav">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                            </ul>
                                        </div>
                                        <div class="item-price">
                                            <ul class="list-unstyled list-inline">
                                                <li class="list-inline-item" style="font-size: 16px"><b>KES {{$product->price}}</b></li>  
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="item-content">
                                        <p></p>
                                        <a href="{{route('cart.add', $product->id)}}" class="mr-3" data-toggle="tooltip" data-placement="top" title="Add to Cart"><img src="{{ asset('images/it-cart.png') }}" alt=""></a>
                                        <a href="" class="it-fav" data-toggle="tooltip" data-placement="top" title="Favourite"><img src="{{ asset('images/it-fav.png') }}" alt=""></a>
                                        <a href="" class="it-comp" data-toggle="tooltip" data-placement="top" title="Compare"><img src="{{ asset('images/it-comp.png') }}" alt=""></a>
                                    </div>
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
                

            </ul>
        </div>
    </div>
    
    </div><!-- container // -->
    </section>
    <!-- =======-->




@endsection




