@extends('layouts.front')


@section('content')



<!-- Breadcrumb Area -->
<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-box text-center">
                    <ul class="list-unstyled list-inline">
                    <li class="list-inline-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="list-inline-item"><span>||</span> Checkout</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Breadcrumb Area -->

 <!-- Checkout -->
 <section class="checkout">
    <div class="container">
        <div class="row">
            <div class="col-md-7">


            <form action="{{route('orders.store')}}" method="POST">
                @csrf
                    <h5>Billing Information</h5>
                    <div>
                        <div class="col-md-12">
                            <label>First Name*</label>
                            <input type="text" name="shipping_fname" value="" placeholder="">
                                @error('shipping_fname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="col-md-12">
                            <label>Last Name*</label>
                            <input type="text" name="shipping_lname" value="" placeholder="">
                            @error('shipping_lname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="col-md-12">
                            <label>Email Address*</label>
                            <input type="text" name="shipping_email" value="" placeholder="you@you.com">
                            @error('shipping_email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="col-md-12">
                            <label>Phone*</label>
                            <input type="text" name="shipping_phone" value="" placeholder="">
                            @error('shipping_phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        
                        <div class="col-md-12">
                            <label>Address*</label>
                            <input type="text" name="shipping_address" value="" placeholder="">
                            @error('shipping_address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="col-md-12">
                            <label>County*</label>
                            <input type="text" name="shipping_county" value="" placeholder="">
                            @error('shipping_county')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="col-md-12">
                            <label>Town/City*</label>
                            <input type="text" name="shipping_city" value="" placeholder="">
                            @error('shipping_city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

    
                        <div class="col-md-12">
                            <label>Postal/Zip Code*</label>
                            <input type="text" name="shipping_zipcode" value="" placeholder="">
                            @error('shipping_zipcode')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        
                       
                        
                        <!--<button type="submit" class="ord-btn" style="cursor:pointer;">Proceed to Pay</button>-->
                     <button class="awesome-checkout-button">Proceed to Payment</button>
                        
                   
                        </div>
                        

                </form>
            </div>


            


     

            




        

            <div class="col-md-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="order-review">
                            <h5>Order Review</h5>
                            <div class="review-box">
                                <ul class="list-unstyled">
                                <!-- <li>Order Total </li>-->
                                    <li class="d-flex justify-content-between">
                                       
                                          
                                        
                                    </li>

                                    
                                  
                                <li>Grand Total <span>KES 4000</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="pay-meth">
                            <h5>Payment Method</h5>
                            <div class="pay-box">
                                <ul class="list-unstyled">
                                    <li>
                                        <input type="radio" id="pay1" name="payment" value="pay1" checked>
                                        <label for="pay1"><span><i class="fa fa-circle"></i></span>Cash On Delivery</label>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque sint placeat illo animi quis minus accusantium ad doloribus, odit explicabo asperiores quidem.</p>
                                    </li>
                                    <li>
                                        <input type="radio" id="pay2" name="payment" value="pay2">
                                        <label for="pay2"><span><i class="fa fa-circle"></i></span>Direct Bank Transfer</label>
                                    </li>
                                    <li>
                                        <input type="radio" id="pay3" name="payment" value="pay3">
                                        <label for="pay3"><span><i class="fa fa-circle"></i></span>Cheque Payment</label>
                                    </li>
                                    <li>
                                        <input type="radio" id="pay4" name="payment" value="pay4">
                                        <label for="pay4"><span><i class="fa fa-circle"></i></span>Paypal</label>
                                    </li>
                                    <li>
                                        <input type="radio" id="pay5" name="payment" value="pay5">
                                        <label for="pay5"><span><i class="fa fa-circle"></i></span>Payoneer</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
<!-- End Checkout -->


@endsection