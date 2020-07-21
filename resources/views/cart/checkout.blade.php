@extends('layouts.front')
<link rel="stylesheet" href="{{ asset('css/parsley.css') }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('/js/parsley.min.js')}}"></script>


@section('content')


<div class="ps-page--simple">
  <div class="ps-breadcrumb">
      <div class="container">
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
  <div class="ps-checkout ps-section--shopping">
      <div class="container">
          <div class="ps-section__header">
              <h1>Checkout Products</h1>
          </div>
          <div class="ps-section__content">
              <form class="ps-form--checkout" action="{{route('orders.store')}}" method="POST" data-parsley-validate>
                @csrf
                  <div class="row">
                      <div class="col-xl-7 col-lg-8 col-md-12 col-sm-12  ">
                          <div class="ps-form__billing-info">
                              <h3 class="ps-form__heading">Billing Details</h3>
                              <div class="form-group">
                                  <label>First Name<sup>*</sup>
                                  </label>
                                  <div class="form-group__content">
                                    <input type="text" class="form-control" id="shipping_fname" name="shipping_fname"placeholder="" value="" required>
                                  </div>
                                  @error('shipping_fname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>
                              <div class="form-group">
                                  <label>Last Name<sup>*</sup>
                                  </label>
                                  <div class="form-group__content">
                                    <input type="text" class="form-control" id="shipping_lname" name="shipping_lname"placeholder="" value="" required>
                                  </div>
                                  @error('shipping_email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>
                              <div class="form-group">
                                  <label>Company Name<sup>*</sup>
                                  </label>
                                  <div class="form-group__content">
                                    <input type="text" class="form-control" name="cname" id="cname" placeholder="">
                                  </div>
                                  @error('cname')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                              </div>
                              <div class="form-group">
                                  <label>Email Address<sup>*</sup>
                                  </label>
                                  <div class="form-group__content">
                                    <input type="email" class="form-control" name="shipping_email"  id="shipping_email" placeholder="youremail@email.com" required>
                                  </div>
                                  @error('shipping_email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>
                              <div class="form-group">
                                  <label>County<sup>*</sup>
                                  </label>
                                  <div class="form-group__content">
                                    <input type="text" class="form-control"  name="shipping_county" id="shipping_county">
                                  </div>
                                  @error('shipping_county')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 
                              </div>
                              <div class="form-group">
                                  <label>Phone<sup>*</sup>
                                  </label>
                                  <div class="form-group__content">
                                    <input type="tel" class="form-control" name="shipping_phone" id="shipping_phone" placeholder="254712345678" required>
                                  </div>
                                  @error('shipping_phone')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                              </div>
                              <div class="form-group">
                                  <label>Address<sup>*</sup>
                                  </label>
                                  <div class="form-group__content">
                                    <input type="text" class="form-control" name="shipping_address" id="shipping_address" placeholder="1234 Main St" required>
                                  </div>
                                  @error('shipping_address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>
                              <div class="form-group">
                                  <label>Zip Code<sup>*</sup>
                                  </label>
                                  <div class="form-group__content">
                                    <input type="text" class="form-control" name="shipping_zipcode" id="shipping_zipcode" placeholder="" required>
                                  </div>
                                  @error('shipping_zipcode')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>
                              <div class="form-group">
                                  <label>City/Region<sup>*</sup>
                                  </label>
                                  <div class="form-group__content">
                                    <input type="text" class="form-control" id="shipping_city" name="shipping_city" placeholder="1234 Main St" required>
                                  </div>
                                  @error('shipping_city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>
                              <div class="form-group">
                                <div class="ps-checkbox">
                                    <input class="form-control" type="checkbox" id="create-account" checked>
                                    <label for="create-account">Billing Details Same as Shipping Details</label>
                                </div>
                            </div>

                              

                              
                              <h3 class="mt-40"> Addition information</h3>
                              <div class="form-group">
                                  <label>Order Notes</label>
                                  <div class="form-group__content">
                                      <textarea class="form-control" rows="7" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-xl-5 col-lg-4 col-md-12 col-sm-12  ">
                          <div class="ps-form__total">
                              <h3 class="ps-form__heading">Select Preferred Payment Option</h3>
                              <div class="content">
                                
                               
                                <div class="form-check">
                                  <label class="form-check-label">
                                      <input type="radio" class="form-check-input" name="payment_method" id="" value="cash_on_delivery">
                                      &nbsp;Cash on delivery
  
                                  </label>
  
  
                              </div>
  
                              <div class="form-check">
                                  <label class="form-check-label">
                                      <input type="radio" class="form-check-input" name="payment_method" id="" value="flutter">
                                      &nbsp;MPESA
  
                                  </label>
  
                              </div>
                              <div class="form-check">
                                  <label class="form-check-label">
                                      <input type="radio" class="form-check-input" name="payment_method" id="" value="flutter">
                                      &nbsp;CARD 
  
                                  </label>
  
                              </div>
                                  <!--<div class="ps-block--checkout-total">
                                      <div class="ps-block__header">
                                          <p>Product</p>
                                          <p>Total</p>
                                      </div>
                                      <div class="ps-block__content">
                                          <table class="table ps-block__products">
                                              <tbody>
                                                  <tr>
                                                      <td><a href="#"> MVMTH Classical Leather Watch In Black ×1</a>
                                                          <p>Sold By:<strong>YOUNG SHOP</strong></p>
                                                      </td>
                                                      <td>$57.99</td>
                                                  </tr>
                                                  <tr>
                                                      <td><a href="#"> Apple Macbook Retina Display 12” × 1</a>
                                                          <p>Sold By:<strong>ROBERT’S STORE</strong></p>
                                                      </td>
                                                      <td>$625.50</td>
                                                  </tr>
                                              </tbody>
                                          </table>
                                          <h4 class="ps-block__title">Subtotal <span>$863.49</span></h4>
                                          <div class="ps-block__shippings">
                                              <figure>
                                                  <h4>YOUNG SHOP Shipping</h4>
                                                  <p>Free shipping</p><a href="#"> MVMTH Classical Leather Watch In Black ×1</a>
                                              </figure>
                                              <figure>
                                                  <h4>ROBERT’S STORE Shipping</h4>
                                                  <p>Free shipping</p><a href="#">Apple Macbook Retina Display 12” ×1</a>
                                              </figure>
                                          </div>
                                          <h3>Total <span>$683.49</span></h3>
                                      </div>
                                  </div>-->
                                  <!--<a class="ps-btn ps-btn--fullwidth" href="checkout.html">Proceed to Pay</a>-->
                                  <button type="submit" id="myButton" class="ps-btn ps-btn--fullwidth" >Proceed to Pay</button>
                              </div>
                          </div>
                      </div>
                  </div>
              </form>
          </div>
      </div>
  </div>
</div>
  


    

@endsection