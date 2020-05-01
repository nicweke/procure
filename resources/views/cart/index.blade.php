@extends('layouts.front')


@section('content')
<!-- ========================= SECTION PAGETOP ========================= -->
<section class="section-pagetop bg">
    <div class="container">
        <h2 class="title-page">Shopping cart</h2>
    </div> <!-- container //  -->
    </section>
    <!-- ========================= SECTION INTRO END// ========================= -->
    
    <!-- ========================= SECTION CONTENT ========================= -->
    <section class="section-content padding-y">
    <div class="container">
    
    <div class="row">
        <main class="col-md-9">
    <div class="card">
    
    <table class="table table-borderless table-shopping-cart">
    <thead class="text-muted">
    <tr class="small text-uppercase">
      <th scope="col">Product</th>
      <th scope="col" width="120">Quantity</th>
      <th scope="col" width="120">Price</th>
      <th scope="col" class="text-right" width="200"> </th>
    </tr>
    </thead>
    <tbody>
        @foreach ($cartItems as $item)
    <tr>
        <td>
            <figure class="itemside">
                
                <figcaption class="info">
                    <a href="#" class="title text-dark">{{ $item->name }}</a>
                    <p class="text-muted small">Size: XL, Color: blue, <br> Brand: Gucci</p>
                </figcaption>
            </figure>
        </td>
        <td> 
            <form action="{{route('cart.update', $item->id)}}" method="get">
                <input name="quantity" type="number" value="{{ $item->quantity }}">

                <input class="button form-control btn btn-small btn-primary mt-2" type="submit" value="save">

            </form> 
        </td>
        <td> 
            <div class="price-wrap"> 
                <var class="price">KES {{Cart::session(auth()->id())->get($item->id)->getPriceSum()}} </var> 
               <!-- <small class="text-muted">KES {{Cart::session(auth()->id())->get($item->id)->getPriceSum()}} </small> -->
            </div> <!-- price-wrap .// -->
        </td>
        <td class="text-right"> 
        <a data-original-title="Save to Wishlist" title="" href="" class="btn btn-light" data-toggle="tooltip"> <i class="fa fa-heart"></i></a> 
        <a href="{{ route('cart.destroy', $item->id) }}" class="btn btn-light"> Remove</a>
        </td>
    </tr>
    
        @endforeach
    </tbody>
    </table>
    
    <div class="card-body border-top">
        <a href="{{route('cart.checkout')}}" class="btn btn-primary float-md-right"> Make Purchase <i class="fa fa-chevron-right"></i> </a>
    <a href="{{route('home')}}" class="btn btn-light"> <i class="fa fa-chevron-left"></i> Continue shopping </a>
    </div>	
    </div> <!-- card.// -->
    
    <div class="alert alert-success mt-3">
        <p class="icontext"><i class="icon text-success fa fa-truck"></i> Free Delivery within 1-2 weeks</p>
    </div>
    
        </main> <!-- col.// -->
        <aside class="col-md-3">
            <div class="card mb-3">
                <div class="card-body">
                <form>
                    <div class="form-group">
                        <label>Have coupon?</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="" placeholder="Coupon code">
                            <span class="input-group-append"> 
                                <button class="btn btn-primary">Apply</button>
                            </span>
                        </div>
                    </div>
                </form>
                </div> <!-- card-body.// -->
            </div>  <!-- card .// -->
            <div class="card">
                <div class="card-body">
                        <dl class="dlist-align">
                          <dt>Total price:</dt>
                          <dd class="text-right">{{\Cart::session(auth()->id())->getTotal()}}</dd>
                        </dl>
                        <dl class="dlist-align">
                          <dt>Discount:</dt>
                          <dd class="text-right">0</dd>
                        </dl>
                        <dl class="dlist-align">
                          <dt>Total:</dt>
                          <dd class="text-right  h5"><strong>{{\Cart::session(auth()->id())->getTotal()}}</strong></dd>
                        </dl>
                        <hr>
                        <p class="text-center mb-3">
                            <img src="images/payments.png" height="26">
                        </p>
                        
                </div> <!-- card-body.// -->
            </div>  <!-- card .// -->
        </aside> <!-- col.// -->
    </div>
    
    </div> <!-- container .//  -->
    </section>
    <!-- ========================= SECTION CONTENT END// ========================= -->
    
    <!-- ========================= SECTION  ========================= -->
    <section class="section-name bg padding-y">
    <div class="container">
    <h6>Payment and refund policy</h6>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    
    </div><!-- container // -->
    </section>
    <!-- ========================= SECTION  END// ========================= -->
    
    <!-- ========================= FOOTER ========================= -->
    <footer class="section-footer border-top padding-y">
        <div class="container">
            <p class="float-md-right"> 
                &copy Copyright 2020 All rights reserved
            </p>
            <p>
                <a href="#">Terms and conditions</a>
            </p>
        </div><!-- //container -->
    </footer>
    <!-- ========================= FOOTER END // ========================= -->

@endsection