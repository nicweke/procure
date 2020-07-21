



<div class="modal fade" id="product-quickview" tabindex="-1" role="dialog" aria-labelledby="product-quickview" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content"><span class="modal-close" data-dismiss="modal"><i class="fas fa-times"></i>></span>
            <article class="ps-product--detail ps-product--fullwidth ps-product--quickview">
                <div class="ps-product__header">
                    <div class="ps-product__thumbnail" data-vertical="false">
                        <div class="ps-product__images" data-arrow="true">
                            <div class="item"><img src="{{asset('storage/'.$productDetails->cover_img)}}" alt=""></div>
                            <div class="item"><img src="{{asset('storage/'.$productDetails->alt_img)}}" alt=""></div>
                            <div class="item"><img src="{{asset('storage/'.$productDetails->alt_img2)}}" alt=""></div>
                            <div class="item"><img src="{{asset('storage/'.$productDetails->alt_img3)}}" alt=""></div>
                        </div>
                    </div>
                    <div class="ps-product__info">
                        <h1>{{$productDetails->name}}</h1>
                        <div class="ps-product__meta">
                            <p>Brand:<a href="shop-default.html">{{$productDetails->brand}}</a></p>
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
                        <h4 class="ps-product__price">KES {{$productDetails->price}}</h4>
                        <div class="ps-product__desc">
                            <p>Sold By:<a href="shop-default.html"><strong>{{$productDetails->shop->name}}</strong></a></p>
                            <ul class="ps-list--dot">
                                <li>{{$productDetails->description}}</li>
                            </ul>
                        </div>
                        <div class="ps-product__shopping"><a class="ps-btn ps-btn--black" href="{{route('cart.add', $productDetails->id)}}">Add to cart</a><a class="ps-btn" href="{{url('quote/'.$productDetails->id)}}">Request Quote</a>
                            <div class="ps-product__actions"><a href="#"><i class="far fa-heart"></i></a><a href="#"><i class="far fa-chart-bar"></i></a></div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </div>
</div>




