@extends('layouts.front')

@section('content')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
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




        <!-- Breadcrumb Area -->
        <section class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-box text-center">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item"><a href="{{route('home') }}">Home</a></li>
                                <li class="list-inline-item"><span>||</span>PRODUCTS</li>
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
                                            <ul class="menu-category" style="list-style-type: none">
                                                @foreach($categories as $category)
                                                    <li class="has-submenu">
                                                    <a href="{{route('products.index', ['category_id' => $category->id])}}" style="line-height: 27px;"><span>{{$category->name}}<i
                                                                class="pe-7s-angle-right"></span></i></a>
                                    
                                                                @php
                                                                    $children = TCG\Voyager\Models\Category::where('parent_id', $category->id)->get();
                                                                @endphp
                                    
                                                           @if($children->isNotEmpty())
                                                            <div class="category-menu-dropdown">
                                    
                                                                @foreach ($children as $child)
                                                                    <div class="category-dropdown-style category-common3">
                                                                        <div class="submenu" style="display: none;">
                                                                            <a href="{{route('products.index', ['category_id' => $child->id])}}">
                                                                            {{$child->name}}
                                                                            </a>
                                                                        </div>
                                                                        @php
                                                                            $grandChild = TCG\Voyager\Models\Category::where('parent_id', $child->id)->get();
                                                                        @endphp
                                                                        @if($grandChild->isNotEmpty())
                                                                            <ul class="submenu" style="list-style-type: none; display:none;">
                                                                                @foreach ($grandChild as $c)
                                                                                    <li class="has-submenu"><a href="{{route('products.index', ['category_id' => $c->id])}}">{{$c->name}}</a></li>
                                                                                @endforeach
                                                                            </ul>
                                                                        @endif
                                                                    </div>
                                                                @endforeach
                                    
                                    
                                                            </div>
                                    
                                                          @endif
                                                    </li>
                                    
                                                @endforeach
                                    
                                            </ul> 
                                    
                                            

                                        </div>
                         
                                </div>
                                <div class="card" style="display: none">
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
                                <div class="card" style="display: none">
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
                                <div class="card" style="display: none">
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
                                <div class="card" style="display: none">
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
                                <div class="card" style="display: none">
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
                                <?php use App\Product; ?>
                               <?php $brands = Product::select('brand')->groupBy('brand')->get(); ?>

                                
                                @foreach ($brands as $brand )

                                    <ul class="list-unstyled">   
                                        <li><input  id="brand" class="try" value="{{ $brand->brand}}"  class="try" type="checkbox">&nbsp;&nbsp;<span>{{ ucwords($brand->brand) }}</span>({{App\Product::where('brand',$brand->brand)->count()}})</li>  
                                    </ul>

                                @endforeach
                                
                            </div>
                                

                            
                        </div>
                        <div class="price-range">
                            <div class="sec-title">
                                <h6>Price</h6>
                            </div>
                            <div class="price-filter">
                                <div>
                                    <div id="slider-range"></div>
                                    <b><input size="2" type="text" id="amount_start" name="start_price" value="15" readonly="readonly"></b>
                                    <b><input size="2" type="text" id="amount_end" name="end_price" value="65" readonly="readonly"></b>  
                                    <button type="button" name="button">Filter</button>
                                </div>
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
                    <div class="col-md-9" id="updateDiv">
                        <div  class="product-box">
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
                                        @foreach ($allProducts as $product)
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

                                        @foreach ($allProducts as $product)
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
                                                            <a href="{{route('cart.add', $product->id)}}" data-toggle="tooltip" data-placement="top" title="Add to Cart"><img src="{{ asset('images/it-cart.png') }}" alt=""></a>
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
                                    
                                    {{ $allProducts->links() }}
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