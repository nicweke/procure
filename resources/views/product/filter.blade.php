<div class="ps-tab active" id="tab-1">
    <div class="ps-shopping-product">
        <div class="row">
            @foreach ($allProducts as $product)
            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 ">
                <div class="ps-product">
                    <div class="ps-product__thumbnail"><a href="{{url('product/'.$product->id)}}"><img src="{{asset('storage/'.$product->cover_img)}}" alt=""></a>
                        <ul class="ps-product__actions">
                            <li><a href="{{route('cart.add', $product->id)}}" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="fas fa-shopping-bag"></i></a></li>
                           {{-- <li><a href="{{route('quick')}}" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="far fa-eye"></i></a></li>
                            <li><a href="{{route('addToWishList')}}" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="far fa-heart"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="far fa-chart-bar"></i></a></li>--}}
                        </ul>
                    </div>

                    
                <div class="ps-product__container"><a class="ps-product__vendor" href=""></a>
                        <div class="ps-product__content"><a class="ps-product__title" href="{{url('product/'.$product->id)}}">{{$product->name}}</a>
                            <p class="ps-product__price"><b>KES {{$product->price}}</b></p>
                        </div>
                    <div class="ps-product__content hover"><a class="ps-product__title" href="{{url('product/'.$product->id)}}">{{$product->name}}</a>
                            <p class="ps-product__price"><b>KES {{$product->price}}</b></p>
                        </div>
                        {{--<a href="{{route('cart.add', $product->id)}}" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="fas fa-shopping-cart"></i></a>--}}
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
    
    <div class="ps-pagination">
        <ul class="pagination">
            {{$allProducts->links()}}
        </ul>
    </div>
</div>
<div class="ps-tab" id="tab-2">
    <div class="ps-shopping-product">
        @foreach ($allProducts as $product)
            
       
        <div class="ps-product ps-product--wide">
            <div class="ps-product__thumbnail"><a href="{{url('product/'.$product->id)}}"><img src="{{asset('storage/'.$product->cover_img)}}" alt=""></a>
            </div>
            <div class="ps-product__container">
                <div class="ps-product__content"><a class="ps-product__title" href="{{url('product/'.$product->id)}}">{{$product->name}}</a>
                
                    <ul class="ps-product__desc">
                        <li>{{$product->details}}</li>
                    </ul>
                </div>
                <div class="ps-product__shopping">
                    <p class="ps-product__price text-center">KES {{$product->price}}</p><a class="ps-btn" href="{{route('cart.add', $product->id)}}">Add to cart</a>
                    <ul class="ps-product__actions">
                        
                        <li><a href="#"><i class="icon-chart-bars"></i> Compare</a></li>
                    </ul>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    
    
    <div class="ps-pagination">
        <ul class="pagination">
            {{$allProducts->links()}}
        </ul>
    </div>
</div> <div class="ps-tab active" id="tab-1">
    <div class="ps-shopping-product">
        <div class="row">
            @foreach ($allProducts as $product)
            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 ">
                <div class="ps-product">
                    <div class="ps-product__thumbnail"><a href="{{url('product/'.$product->id)}}"><img src="{{asset('storage/'.$product->cover_img)}}" alt=""></a>
                        <ul class="ps-product__actions">
                            <li><a href="{{route('cart.add', $product->id)}}" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="fas fa-shopping-bag"></i></a></li>
                           {{-- <li><a href="{{route('quick')}}" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="far fa-eye"></i></a></li>
                            <li><a href="{{route('addToWishList')}}" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="far fa-heart"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="far fa-chart-bar"></i></a></li>--}}
                        </ul>
                    </div>

                    
                <div class="ps-product__container"><a class="ps-product__vendor" href=""></a>
                        <div class="ps-product__content"><a class="ps-product__title" href="{{url('product/'.$product->id)}}">{{$product->name}}</a>
                            <p class="ps-product__price"><b>KES {{$product->price}}</b></p>
                        </div>
                    <div class="ps-product__content hover"><a class="ps-product__title" href="{{url('product/'.$product->id)}}">{{$product->name}}</a>
                            <p class="ps-product__price"><b>KES {{$product->price}}</b></p>
                        </div>
                        {{--<a href="{{route('cart.add', $product->id)}}" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="fas fa-shopping-cart"></i></a>--}}
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
    
    <div class="ps-pagination">
        <ul class="pagination">
            {{$allProducts->links()}}
        </ul>
    </div>
</div>
<div class="ps-tab" id="tab-2">
    <div class="ps-shopping-product">
        @foreach ($allProducts as $product)
            
       
        <div class="ps-product ps-product--wide">
            <div class="ps-product__thumbnail"><a href="{{url('product/'.$product->id)}}"><img src="{{asset('storage/'.$product->cover_img)}}" alt=""></a>
            </div>
            <div class="ps-product__container">
                <div class="ps-product__content"><a class="ps-product__title" href="{{url('product/'.$product->id)}}">{{$product->name}}</a>
                
                    <ul class="ps-product__desc">
                        <li>{{$product->details}}</li>
                    </ul>
                </div>
                <div class="ps-product__shopping">
                    <p class="ps-product__price text-center">KES {{$product->price}}</p><a class="ps-btn" href="{{route('cart.add', $product->id)}}">Add to cart</a>
                    <ul class="ps-product__actions">
                        
                        <li><a href="#"><i class="icon-chart-bars"></i> Compare</a></li>
                    </ul>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    
    
    <div class="ps-pagination">
        <ul class="pagination">
            {{$allProducts->links()}}
        </ul>
    </div>
</div>