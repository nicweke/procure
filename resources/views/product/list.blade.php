@extends('layouts.front')

@section('content')



<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>

    $(function () {
        $("#slider-range").slider({
            range: true,
            min: 0,
            max: 100000,
            values: [15, 1000],
            slide: function (event, ui) {

                $("#amount_start").val(ui.values[ 0 ]);
                $("#amount_end").val(ui.values[ 1 ]);
                var start = $('#amount_start').val();
                var end = $('#amount_end').val();

                $.ajax({
                    type: 'get',
                    dataType: 'html',
                    url: '',
                    data: "start=" + start + "& end=" + end,
                    success: function (response) {
                        console.log(response);
                        $('#updateDiv').html(response);
                    }
                });
            }
        });

        $('.try').click(function(){
            var brand = [];
            $('.try').each(function(){
                if($(this).is(":checked")){

                    brand.push($(this).val());
                }
                
              
            });
            Finalbrand  = brand.toString();

            $.ajax({
                    type: 'get',
                    dataType: 'html',
                    url: '',
                    data: "brand=" + Finalbrand,
                    success: function (response) {
                        console.log(response);
                        $('#updateDiv').html(response);
                    }
                });

        });
       });

</script>

<div class="ps-breadcrumb">
    <div class="ps-container">
        <ul class="breadcrumb">
            @foreach (Breadcrumbs::current() as $crumbs)
                @if ($crumbs->url() && !$loop->last)
                    <li class="breadcrumb-item">
                        <a href="{{ $crumbs->url() }}">
                            {{ $crumbs->title() }}
                        </a>
                    </li>
                @else
                    <li class="breadcrumb-item active">
                        {{ $crumbs->title() }}
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
</div>
















    <div class="ps-page--shop" id="shop-sidebar">
        <div class="container">
            <div class="ps-layout--shop">
                <div class="ps-layout__left">
                    <aside class="widget widget_shop">
                        <h4 class="widget-title">Categories</h4>
                        <ul class="ps-list--categories">
                            @foreach($categories as $category)
                            
                            <li class="current-menu-item menu-item-has-children">
                            <a href="{{route('products.index', ['category_id' => $category->id])}}" style="line-height: 27px;">{{$category->name}}{{--<span class="sub-toggle"><i class="fas fa-angle-down"></i></span>--}}
                                @php
                                $children = TCG\Voyager\Models\Category::where('parent_id', $category->id)->get();
                            @endphp

                       {{--@if($children->isNotEmpty())
                        <div class="category-menu-dropdown">

                            @foreach ($children as $child)
                                <!--<div class="category-dropdown-style category-common3">-->
                                    <ul class="submenu">
                                        <li class="current-menu-item"><a href="{{route('products.index', ['category_id' => $child->id])}}">
                                        {{$child->name}}
                                        </a></li>
                                    </ul>
                                <!--</div>-->
                            @endforeach
                        </div>
                        @endif--}}          
                            </li>
                            @endforeach
                        </ul>
                    </aside>

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

                            <!--<div id="slider-range"></div>
                                    <b><input size="2" type="text" id="amount_start" name="start_price" value="15" readonly="readonly"></b>
                                    <b><input size="2" type="text" id="amount_end" name="end_price" value="65" readonly="readonly"></b>-->


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
                        <figure style="display: none;">
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
                        <figure class="sizes" style="display: none;">
                            <h4 class="widget-title">BY SIZE</h4><a href="#">L</a><a href="#">M</a><a href="#">S</a><a href="#">XL</a>
                        </figure>
                    </aside>
                </div>
                <div class="ps-layout__right" id="updateDiv">
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
                                        <li><a href="#tab-2"><i class="fas fa-list-ul"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="ps-tabs" >


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
                                </div>
                           
                           
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
    

    @endsection
