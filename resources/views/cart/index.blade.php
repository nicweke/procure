@extends('layouts.front')


@section('content')
@include('inc.messages')

<!-- Breadcrumb Area -->
<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-box text-center">
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="list-inline-item"><span>||</span> Shopping Cart</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Breadcrumb Area -->

<!-- Shopping Cart -->
<section class="shopping-cart">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="cart-table table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="t-pro">Product</th>
                                <th class="t-price">Price</th>
                                <th class="t-qty">Quantity</th>
                                <th class="t-total">Total</th>
                                <th class="t-rem"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cartItems as $item)
                            <tr>
                                <td class="t-pro d-flex">
                                   
                                    <div class="t-content">
                                        <p class="t-heading mb-3"><a href="">{{ $item->name }}</a></p>
                                        
                                    </div>
                                </td>
                                <td class="t-price">KES {{ $item->price }} </td>
                                <td class="t-qty">
                                    <div class="qty-box">
                                        <div class="quantity buttons_added">

                                            <form action="{{route('cart.update', $item->id)}}" method="get">
                                                <input name="quantity" type="number" style=" text-align:center;" value="{{ $item->quantity }}">

                                                <input class="btn btn-primary btn-sm" style="border: none"   type="submit" value="save">

                                            </form>
                                        </div>
                                    </div>
                                </td>
                                <td class="t-total">{{Cart::session(auth()->id())->get($item->id)->getPriceSum()}}</td>
                                <td class="t-rem"><a href="{{ route('cart.destroy', $item->id) }}"><i class="far fa-trash-alt"></i></a></td>
                            </tr>
                        
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="coupon">
                    <h6>Discount Coupon</h6>
                    <p>Enter your coupon code if you have one</p>
                <form action="{{route('cart.coupon')}}" method="GET">
                        <input type="text" id="coupon_code" name="coupon_code" value="" placeholder="Your Coupon">
                        <input class="button" name="apply_coupon"  value="Apply Code" type="submit">
                    </form>

                    
                </div>
            </div>
            <div class="col-md-4">
                <div class="crt-sumry">
                    <h5>Cart Summary</h5>
                    <ul class="list-unstyled">
                        <li>Subtotal <span>KES {{\Cart::session(auth()->id())->getSubTotal()}}</span></li>
                        <li>Shipping & Tax <span>14% VAT + Shipping</span></li>
                        <li>Grand Total <span>KES {{\Cart::session(auth()->id())->getTotal()}}</span></li>
                    </ul>
                    <div class="cart-btns text-right">
                        <button onclick="location.href='{{route('product.all')}}'" class="up-cart">Update Cart</button>
                        <button onclick="location.href='{{route('cart.checkout')}}'" class="chq-out ">Checkout</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Shopping Cart -->

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