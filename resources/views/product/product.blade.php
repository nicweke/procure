<div>
    <div class="ps-shopping ps-tab-root">
        <div class="ps-shopping__header" >
             
            <p><strong> {{$allProducts->total()}}</strong> Products found</p>
            <div class="ps-shopping__actions">
                <select class="ps-select" data-placeholder="Sort Items">
                    <option>Sort by latest</option>
                    <option>Sort by popularity</option>
                    <option>Sort by average rating</option>
                    <option>Sort by price: low to high</option>
                    <option>Sort by price: high to low</option>
                </select>
                <div class="ps-shopping__view">
                    <p>View</p>
                    <ul class="ps-tab-list">
                        <li class="active"><a href="#tab-1"><i class="fas fa-th"></i></a></li>
                        <!--<li><a href="#tab-2"><i class="fas fa-list-ul"></i></a></li>-->
                    </ul>
                </div>
            </div>
        </div>
        <div class="ps-tabs" id="updateDiv">


                <div class="ps-tab active" id="tab-1">
                    <div class="ps-shopping-product">
                        <div class="row">
                            @foreach ($allProducts as $product)
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 ">
                                <div class="ps-product">
                                    <div class="ps-product__thumbnail"><a href="{{url('product/'.$product->id)}}"><img src="{{asset('storage/'.$product->cover_img)}}" alt=""></a>
                                        <ul class="ps-product__actions">
                                            <li><a href="{{route('cart.add', $product->id)}}" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="fas fa-shopping-bag"></i></a></li>
           
                                        </ul>
                                    </div>

                                    
                                <div class="ps-product__container"><a class="ps-product__vendor" href=""></a>
                                        <div class="ps-product__content"><a class="ps-product__title" href="{{url('product/'.$product->id)}}">{{$product->name}}</a>
                                            <p class="ps-product__price"><b>KES {{$product->price}}</b></p>
                                        </div>
                                    <div class="ps-product__content hover"><a class="ps-product__title" href="{{url('product/'.$product->id)}}">{{$product->name}}</a>
                                            <p class="ps-product__price"><b>KES {{$product->price}}</b></p>
                                        </div>
                                        
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
           
           
            
            
        </div>
    </div>
</div>


