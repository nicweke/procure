@extends('layouts.front')

@section('content')

<!--<script type="text/javascript">
    $(function(){ 
          $("#exzoom").exzoom({
           // options here
            }); 
        });
    </script>-->
    <script src="{{ asset('js/assets/vendor/jquery-1.12.4.min.js') }}"></script>
   
    

<!-- Single Product Area -->
<section class="sg-product">
    <div class="container">
        <div class="row">
            
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-6">
                        <div class="sg-img" style="margin-left:5px;">
                            <!-- Tab panes -->
                            <div class="tab-content exzoom_img_box" id="exzoom">
                                <div class="tab-pane fade show active" id="sg1" role="tabpanel">
                                    <ul class='exzoom_img_ul' style="list-style-type: none">
                                    <li><a href="{{asset('storage/'.$productDetails->cover_img)}}">
                                        <img src="{{asset('storage/'.$productDetails->cover_img)}}" style="width: 300px;"   alt="" class="img-fluid">
                                    </a></li>
                                </ul>
                                </div>

                                <div class="tab-pane" id="sg2" role="tabpanel">
                                    <ul class='exzoom_img_ul' style="list-style-type: none">
                                    <li><img src="{{asset('storage/'.$productDetails->alt_img)}}" alt="" class="img-fluid"></li>
                                    </ul>
                                </div>
                               
                                <div class="tab-pane" id="sg3" role="tabpanel">
                                    <ul class='exzoom_img_ul' style="list-style-type: none">
                                    <li><img src="{{asset('storage/'.$productDetails->alt_img2)}}" alt="" class="img-fluid"></li>
                                    </ul>
                                </div>
                                <div class="tab-pane" id="sg4" role="tabpanel">
                                    <ul class='exzoom_img_ul'style="list-style-type: none">
                                    <li></li><img src="{{asset('storage/'.$productDetails->alt_img3)}}" alt="" class="img-fluid"></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="nav d-flex justify-content-between exzoom_nav">
                                
                                    <a class="nav-item nav-link active" data-toggle="tab" href="#sg1"><img src="{{asset('storage/'.$productDetails->cover_img)}}" alt=""></a>
                                    <a class="nav-item nav-link" data-toggle="tab" href="#sg2"><img src="{{asset('storage/'.$productDetails->alt_img)}}" alt=""></a>
                                    <a class="nav-item nav-link" data-toggle="tab" href="#sg3"><img src="{{asset('storage/'.$productDetails->alt_img2)}}" alt=""></a>
                                    <a class="nav-item nav-link" data-toggle="tab" href="#sg4"><img src="{{asset('storage/'.$productDetails->alt_img3)}}" alt=""></a>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ml-10">
                        <div class="sg-content" style="float:left; margin-left: 40px;">
                            <div class="pro-tag">
                                <ul class="list-unstyled list-inline">
                                   <!-- <li class="list-inline-item"><a href="">Home Appliance ,</a></li>
                                    <li class="list-inline-item"><a href="">Smart Led Tv</a></li> -->
                                </ul>
                            </div>
                             <div class="pro-name">
                                 <p>{{$productDetails->name}}</p>
                             </div>
                             <div class="pro-rating">
                                 <ul class="list-unstyled list-inline">
                                     <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                     <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                     <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                     <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                     <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                     <li class="list-inline-item"><a href="">( Review )</a></li>
                                 </ul>
                             </div>
                             <div class="pro-price" style="padding-top: 2px; padding-bottom:2px;">
                                 <ul class=" list-inline">
                                     <li class="list-inline-item">KES {{$productDetails->price}}</li>
                                     <li class="list-inline-item" style="display: none">KES {{$productDetails->price}}</li>
            
                                 </ul>
                                 <p style="padding-top: 2px; padding-bottom:2px;">Availability : <span>{{$productDetails->is_available}}</span> </p>
                             </div>
                             <div class="colo-siz">
                                 
                                 
                                 
                                 <div class="pro-btns mt-3 mb-3">
                                      <a href="{{route('cart.add', $productDetails->id)}}" class="cart" id="CartButton" name="CartButton">Add To Cart</a>

                                      <button class="btn btn-primary ml-2" style="border-radius: 17px"    onclick="window.location.href = '{{url('quote/'.$productDetails->id)}}';">Request for Quote</button>
                                      
                                      <br><br>
                                     
                                      <?php
                                      $wishlistData=DB::table('wish_list')->rightJoin('products','wish_list.product_id','=','products.id')
                                      ->where('wish_list.product_id','=',$productDetails->id)->get();
                                      $count=App\Wishlist::where(['product_id'=>$productDetails->id])->count();
                                      if($count=="0"){
                                  ?>
                                  <form action="{{route('addToWishList')}}" method="post" role="form">
                                      <input type="hidden" name="_token" value="{{csrf_token()}}">
                                      <input type="hidden" value="{{$productDetails->id}}" name="product_id">
                                      <button type="submit" class="btn btn-dark" style="border-radius: 15px;">Add to Wishlist</button>
                                  </form>
                                  <?php }else{?>
                                      <p style="color:#5677fc; margin-bottom:9px;"><b>Product Added to Wishlist</b></p><a href="{{url('/WishList')}}" class="fav-com" data-toggle="tooltip" data-placement="top" title="View Your Wishlist"><img src="{{ asset('images/it-fav.png') }}" alt=""></a>
                                  <?php }?>

                                <br><br>

                                <!--<form action="{{ route('posts.post') }}" method="POST">
                                    {{ csrf_field() }}
                                    <div class="card">
                                        <div class="container-fliud">
                                            <div class="wrapper row">

                                             <div class="details col-md-6">
                                                    <h3 class="product-title">Laravel 5.5 Ratting System</h3>
                                                    <div class="rating">
                                                        <input id="input-1" name="rate" class="rating rating-loading" data-min="0" data-max="5" data-step="1" value=" " data-size="xs">
                                                        <input type="hidden" name="id" required="" value="{{ $productDetails->id }}">
                                                        <br/>
                                                        <button class="btn btn-success">Submit Review</button>
                                                    </div>
                                                </div>

                                            </div>
                                           


                                        </div>
                                    </div>
                                </form>-->
                                
                             
                             

                    








        









                                     


                                      
                                      <a href="" class="fav-com"  data-toggle="tooltip" data-placement="top" title="Compare"><img src="{{ asset('images/it-comp.png') }}" alt=""></a>
                                      
                                 </div>
                                 
                             </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="sg-tab">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#pro-det">Product Details</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#company">Company Profile</a></li>

                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#rev">Reviews</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="pro-det" role="tabpanel">
                                    <p>{{$productDetails->description}}</p>
                                </div>

                                <div class="tab-pane fade" id="company" role="tabpanel">
                                    <p><b>Company Name:</b> {{$productDetails->shop->name}}</p><br>
                                    <p><b>Company Description:</b> {{$productDetails->shop->description}}</p><br>
                                    <p><b>Area of Expertise:</b> {{$productDetails->shop->specialization}}</p><br><br>
    <!--Insert Company Logo -->     <p><b>Company Logo:</b></p>
                                </div>


                                <div class="tab-pane fade" id="rev" role="tabpanel">
                                    
                                    <div class="review-form">
                                        <h6>Add Your Review</h6>
                                    <form action="{{route('review.store')}}" method="POST">
                                        @csrf
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="star-rating">
                                                        <label>Your Rating*</label>                                                       
                                                        <input type="text" name="rating" class="rating-value">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="headline">Headline</label>

                                                    


                                                    

                                                    <input type="text" name="headline">
                                                </div>
                                                <div class="col-md-6">
                                                <input type="hidden" name="product_id" value="{{$productDetails->id}}">
                                                </div>

                                                <div class="col-md-12">
                                                    <label>Your Review*</label>
                                                    <textarea required="" name="description"></textarea>
                                                    <button type="submit">Add Review</button>
                                                </div>
                                                <div class="col-md-6">
                                                    <h4 class="py-5"><u>Reviews</u></h4>
                                                    <ul>
                                                        @forelse ($productDetails->reviews as $review)

                                                    <li>{{$review->headline}}</li>
                                                            
                                                        @empty
                                                            
                                                        @endforelse
                                                    </ul>

                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </div>
</section>
<!-- End Single Product Area -->


<script type="text/javascript">
    $("#input-id").rating();
</script>

@endsection