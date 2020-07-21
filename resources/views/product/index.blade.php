@extends('layouts.front')

@section('content')

<div class="ps-breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
        <li><a href="{{route('home')}}">Home</a></li>
        <li>{{$categoryName }}</li>
        
        </ul>
    </div>
</div>


<div class="ps-page--shop" id="shop-sidebar">
    <div class="container">
        <h3 style="text-align: center; margin-top:25px;"><b>{{ $categoryName ?? null }}</b></h3>
        <div class="ps-layout--shop">
            <div class="ps-layout__left">
                

                <aside class="widget widget_shop">
                    <h4 class="widget-title">BY BRANDS</h4>
                    <form class="ps-form--widget-search" action="do_action" method="get">
                        <input class="form-control" type="text" placeholder="">
                        <button><i class="icon-magnifier"></i></button>
                    </form>

                    <figure class="ps-custom-scrollbar" data-height="250">
                        
                           <?php use App\Product; ?>
                           <?php $brands = Product::select('brand')->groupBy('brand')->get(); ?>

                           @foreach ($brands as $brand )

                           <ul class="list-unstyled" style="line-height: 2; cursor:pointer;">   
                               <li><input  id="brand" class="try" value="{{ $brand->brand}}"  class="try" type="checkbox">&nbsp;&nbsp;<span>{{ ucwords($brand->brand) }}</span>&nbsp;&nbsp;({{App\Product::where('brand',$brand->brand)->count()}})</li>  
                           </ul>

                            @endforeach

                    </figure>
                    <figure>
                        <h4 class="widget-title">By Price</h4>
                        <div class="ps-slider" data-default-min="13" data-default-max="1300" data-max="1311" data-step="100" data-unit="$"></div>
                        <p class="ps-slider__meta">Price:<span class="ps-slider__value ps-slider__min"></span>-<span class="ps-slider__value ps-slider__max"></span></p>

                        

                    </figure>
                    <figure>
                        <h4 class="widget-title">By Price</h4>
                        <div class="ps-checkbox">
                            <input class="form-control" type="checkbox" id="review-1" name="review">
                            <label for="review-1"><span><i class="fa fa-star rate"></i><i class="fa fa-star rate"></i><i class="fa fa-star rate"></i><i class="fa fa-star rate"></i><i class="fa fa-star rate"></i></span><small>(13)</small></label>
                        </div>
                        <div class="ps-checkbox">
                            <input class="form-control" type="checkbox" id="review-2" name="review">
                            <label for="review-2"><span><i class="fa fa-star rate"></i><i class="fa fa-star rate"></i><i class="fa fa-star rate"></i><i class="fa fa-star rate"></i><i class="fa fa-star"></i></span><small>(13)</small></label>
                        </div>
                        <div class="ps-checkbox">
                            <input class="form-control" type="checkbox" id="review-3" name="review">
                            <label for="review-3"><span><i class="fa fa-star rate"></i><i class="fa fa-star rate"></i><i class="fa fa-star rate"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span><small>(5)</small></label>
                        </div>
                        <div class="ps-checkbox">
                            <input class="form-control" type="checkbox" id="review-4" name="review">
                            <label for="review-4"><span><i class="fa fa-star rate"></i><i class="fa fa-star rate"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span><small>(5)</small></label>
                        </div>
                        <div class="ps-checkbox">
                            <input class="form-control" type="checkbox" id="review-5" name="review">
                            <label for="review-5"><span><i class="fa fa-star rate"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span><small>(1)</small></label>
                        </div>
                    </figure>
                    <figure>
                        <h4 class="widget-title">By Color</h4>
                        <div class="ps-checkbox ps-checkbox--color color-1 ps-checkbox--inline">
                            <input class="form-control" type="checkbox" id="color-1" name="size">
                            <label for="color-1"></label>
                        </div>
                        <div class="ps-checkbox ps-checkbox--color color-2 ps-checkbox--inline">
                            <input class="form-control" type="checkbox" id="color-2" name="size">
                            <label for="color-2"></label>
                        </div>
                        <div class="ps-checkbox ps-checkbox--color color-3 ps-checkbox--inline">
                            <input class="form-control" type="checkbox" id="color-3" name="size">
                            <label for="color-3"></label>
                        </div>
                        <div class="ps-checkbox ps-checkbox--color color-4 ps-checkbox--inline">
                            <input class="form-control" type="checkbox" id="color-4" name="size">
                            <label for="color-4"></label>
                        </div>
                        <div class="ps-checkbox ps-checkbox--color color-5 ps-checkbox--inline">
                            <input class="form-control" type="checkbox" id="color-5" name="size">
                            <label for="color-5"></label>
                        </div>
                        <div class="ps-checkbox ps-checkbox--color color-6 ps-checkbox--inline">
                            <input class="form-control" type="checkbox" id="color-6" name="size">
                            <label for="color-6"></label>
                        </div>
                        <div class="ps-checkbox ps-checkbox--color color-7 ps-checkbox--inline">
                            <input class="form-control" type="checkbox" id="color-7" name="size">
                            <label for="color-7"></label>
                        </div>
                        <div class="ps-checkbox ps-checkbox--color color-8 ps-checkbox--inline">
                            <input class="form-control" type="checkbox" id="color-8" name="size">
                            <label for="color-8"></label>
                        </div>
                    </figure>
                    <figure class="sizes">
                        <h4 class="widget-title">BY SIZE</h4><a href="#">L</a><a href="#">M</a><a href="#">S</a><a href="#">XL</a>
                    </figure>
                </aside>
            </div>
            <div class="ps-layout__right">
                <div class="ps-shopping ps-tab-root">
                    <div class="ps-shopping__header">
                         
                        <p style="display: none"><strong> </strong> Products found</p>
                        <div class="ps-shopping__actions">
                            <!--<select class="ps-select" data-placeholder="Sort Items">
                                <option>Sort by latest</option>
                                <option>Sort by popularity</option>
                                <option>Sort by average rating</option>
                                <option>Sort by price: low to high</option>
                                <option>Sort by price: high to low</option>
                            </select>-->
                            <div class="ps-shopping__view">
                                <p>View</p>
                                <ul class="ps-tab-list">
                                    <li class="active"><a href="#tab-1"><i class="fas fa-th"></i></a></li>
                                    <li><a href="#tab-2"><i class="fas fa-list-ul"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="ps-tabs" id="updateDiv">
                        
                        <div class="ps-tab active" id="tab-1">
                            <div class="ps-shopping-product">
                                <div class="row">
                                    <?php if($products->isEmpty()) { ?>
                                        <h3 style="position: relative; left:300px;top:40px;">No Products Found</h3>
                                    <?php } else { ?>
                                    @foreach ($products as $product)
                                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 ">
                                        <div class="ps-product">
                                            <div class="ps-product__thumbnail"><a href="{{url('product/'.$product->id)}}"><img src="{{asset('storage/'.$product->cover_img)}}" alt=""></a>
                                                <ul class="ps-product__actions">
                                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                                    <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                                </ul>
                                            </div>
                                                  
                                        <div class="ps-product__container"><a class="ps-product__vendor" href="">{{$product->shop->name}}</a>
                                                <div class="ps-product__content"><a class="ps-product__title" href="{{url('product/'.$product->id)}}">{{$product->name}}</a>
                                                    <p class="ps-product__price"><b>KES {{$product->price}}</b></p>
                                                </div>
                                            <div class="ps-product__content hover"><a class="ps-product__title" href="{{url('product/'.$product->id)}}">{{$product->name}}</a>
                                                    <p class="ps-product__price"><b>KES {{$product->price}}</b></p>
                                                </div>
                                                <a href="{{route('cart.add', $product->id)}}" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <?php } ?>
                                    

                                </div>
                            </div>
                            <div class="ps-pagination">
                                <ul class="pagination">
                                    {{-- $products->links() --}}
                                </ul>
                            </div>
                        </div>
                        <div class="ps-tab" id="tab-2">
                            <div class="ps-shopping-product">
                                <?php if($products->isEmpty()) { ?>
                                    <h3 style="position: relative; left:300px;top:40px;">No Products Found</h3>
                                <?php } else { ?>
                                @foreach ($products as $product)
                                    
                               
                                <div class="ps-product ps-product--wide">
                                    <div class="ps-product__thumbnail"><a href="{{url('product/'.$product->id)}}"><img src="{{asset('storage/'.$product->cover_img)}}" alt=""></a>
                                    </div>
                                    <div class="ps-product__container">
                                        <div class="ps-product__content"><a class="ps-product__title" href="{{url('product/'.$product->id)}}">{{$product->name}}</a>
                                        <p class="ps-product__vendor">Sold by:<a href="#">Robert</a></p>
                                            <ul class="ps-product__desc">
                                                <li>{{$product->details}}</li>
                                            </ul>
                                        </div>
                                        <div class="ps-product__shopping">
                                            <p class="ps-product__price">KES {{$product->price}}</p><a class="ps-btn" href="{{route('cart.add', $product->id)}}">Add to cart</a>
                                            <ul class="ps-product__actions">
                                                <li><a href="#"><i class="icon-heart"></i> Wishlist</a></li>
                                                <li><a href="#"><i class="icon-chart-bars"></i> Compare</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <?php } ?>
                            </div>
                            
                            
                            
                            <div class="ps-pagination">
                                <ul class="pagination">
                                    
                                    {{-- $products->links() --}}   
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection