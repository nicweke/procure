@extends('layouts.front')

@section('content')


<!--
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
                                @php
                                    $grandChild = TCG\Voyager\Models\Category::where('parent_id', $child->id)->get();
                                @endphp
                                @if($grandChild->isNotEmpty())
                                    <ul class="submenu">
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
    
</nav>

-->











<!-- Slider Area -->
<section class="slider-area">
  <div class="container">
      <div class="row">
          <div class="col-lg-3 col-md-0">
              <div class="menu-widget">
                  <p><i class="fa fa-bars"></i>All Categories</p>

                  <ul class="list-unstyled">
                    @foreach($categories as $category)
                      <li><a href="{{route('products.index', ['category_id' => $category->id])}}">{{$category->name}}<i class="fa fa-angle-right"></i></a>
                        @php
                        $children = TCG\Voyager\Models\Category::where('parent_id', $category->id)->get();
                        @endphp

                         @if($children->isNotEmpty())
                        <div class="mega-menu">
                            @foreach ($children as $child)
                              <div class="row">
                                  <div class="col-md-4">
                                      <div class="smartphone">
                                        <div class="submenu">
                                            <a href="{{route('products.index', ['category_id' => $child->id])}}">
                                            <h6>{{$child->name}}</h6>
                                            </a>
                                        </div>
                                            @php
                                                $grandChild = TCG\Voyager\Models\Category::where('parent_id', $child->id)->get();
                                            @endphp

                                            @if($grandChild->isNotEmpty())
                                            <ul class="submenu" style="list-style-type: none; border:none;">
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
          <div class="col-lg-9 col-md-12 padding-fix-l20">
              <div class="owl-carousel owl-slider">
                  <div class="slider-item slider-item1">
                      <img src="images/girl-1.png" alt="" class="img1 wow fadeInRight effect"  data-wow-duration="1s" data-wow-delay="0s">
                      <div class="slider-box">
                          <div class="slider-table">
                              <div class="slider-tablecell">
                                  <div class="wow fadeInUp effect" data-wow-duration="1.2s" data-wow-delay="0.5s">
                                      <h5>Big Sale</h5>
                                  </div>
                                  <div class="wow fadeInUp effect" data-wow-duration="1.2s" data-wow-delay="0.6s">
                                      <h2>New Product Collection</h2>
                                  </div>
                                  <div class="wow fadeInUp effect" data-wow-duration="1.2s" data-wow-delay="0.7s">
                                      <p>Save Up To 25% Off</p>
                                  </div>
                                  <div class="wow fadeInUp effect" data-wow-duration="1.2s" data-wow-delay="0.8s">
                                      <a href="#">Shop Now</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="slider-item slider-item2">
                      <img src="images/girl-2.png" alt="" class="img2 wow fadeInRight effect"  data-wow-duration="1s" data-wow-delay="0s">
                      <div class="slider-box">
                          <div class="slider-table">
                              <div class="slider-tablecell text-right">
                                  <div class="wow fadeInUp effect" data-wow-duration="1.2s" data-wow-delay="0.5s">
                                      <h5>Home Appliance</h5>
                                  </div>
                                  <div class="wow fadeInUp effect" data-wow-duration="1.2s" data-wow-delay="0.6s">
                                      <h2>Top Quality Products</h2>
                                  </div>
                                  <div class="wow fadeInUp effect" data-wow-duration="1.2s" data-wow-delay="0.7s">
                                      <p>Save Up To 50% Off</p>
                                  </div>
                                  <div class="wow fadeInUp effect" data-wow-duration="1.2s" data-wow-delay="0.8s">
                                      <a href="#">Shop Now</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="slider-btm-box d-flex justify-content-around">
                  <div class="single-box mr-20">
                      <a href=""><img src="images/sb-1.png" alt="" class="img-fluid"></a>
                  </div>
                  <div class="single-box mr-20">
                      <a href=""><img src="images/sb-2.png" alt="" class="img-fluid"></a>
                  </div>
                  <div class="single-box">
                      <a href=""><img src="images/sb-3.png" alt="" class="img-fluid"></a>
                  </div>
              </div>
          </div>
      </div>
  </div>


</section>
<!-- End Slider Area -->


<!-- Product Area-->
<section class="product-area">
  <div class="container">
      
  </div>
</section>
<!-- End Product Area -->
   
        
    

@endsection

































