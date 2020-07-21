@extends('layouts.front')


@section('content')

@include('inc.messages')

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
        </div>
    </div>
    <div class="ps-section--shopping ps-shopping-cart">
        <div class="container">
            <div class="ps-section__header">
                <h1>Shopping Cart</h1>
            </div>
            <div class="ps-section__content">
                <div class="table-responsive">
                    <table class="table ps-table--shopping-cart">
                        <thead>
                            <tr>
                                <th>PRODUCT</th>
                                <th>PRICE</th>
                                <th>QUANTITY</th>
                                <th>TOTAL</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if($cartItems->isEmpty()) { ?>
                                <h3 style="position: relative;left:490px;top:130px;">No Items In Cart</h3>
                            <?php } else { ?>
                            @foreach ($cartItems as $item)
                            <tr>
                                <td>
                                    <div class="ps-product--cart">
                                  
                                        <div class="ps-product__content" style="margin-left:0px;"><p style="font-size: 16px;">{{ $item->name }}</p>
                                           
                                        </div>
                                    </div>
                                </td>
                                <td class="price" style="position: relative; left:30px;">KES {{ $item->price }}</td>
                                <td style="position: relative; left:90px;">
                                    <form action="{{route('cart.update', $item->id)}}" method="get">
                                        <input name="quantity" type="number" style=" text-align:center;" value="{{ $item->quantity }}">

                                        <input class="btn btn-primary btn-sm" style="border: none"   type="submit" value="save">

                                    </form>
                                </td>
                                <td style="position: relative; left:40px;">{{Cart::session(auth()->id())->get($item->id)->getPriceSum()}}</td>
                                <td><a href="{{ route('cart.destroy', $item->id) }}"><i class="far fa-trash-alt"></i></a></td>
                            </tr>
                            @endforeach 
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="ps-section__cart-actions" style="padding-top:120px"><a class="ps-btn" href="{{route('product.all')}}"><i class="fas fa-arrow-left"></i> Update Cart</a><a class="ps-btn ps-btn--outline" href="{{route('approval')}}"><i class="far fa-file-alt"></i>Request Approval</a></div>
            </div>
            <div class="ps-section__footer">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 ">
                        <figure>
                            <figcaption>Coupon Discount &nbsp;<i class="fas fa-caret-down"></i></figcaption>
                            
                            <p>Enter your coupon code if you have one</p>
                            <form action="{{route('cart.coupon')}}" method="GET">
                                <div class="form-group">
                                    <input type="text" id="coupon_code" name="coupon_code" value="" placeholder="Your Coupon">
                                    <input class="button" name="apply_coupon"  value="Apply Code" type="submit">
                                </div>          
                            </form>
                        </figure>
                    </div>
                    <!--<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 ">
                        <figure>
                            <figcaption>Calculate shipping&nbsp;<i class="fas fa-caret-down"></i></figcaption>
                            <div class="form-group">
                                <select class="ps-select">
                                    <option value="1">America</option>
                                    <option value="2">Italia</option>
                                    <option value="3">Vietnam</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Town/City">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Postcode/Zip">
                            </div>
                            <div class="form-group">
                                <button class="ps-btn ps-btn--outline">Update</button>
                            </div>
                        </figure>
                    </div>-->
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 ">
                        <div class="ps-block--shopping-total">
                            <div class="ps-block__header">
                                <p>Subtotal <span> KES {{\Cart::session(auth()->id())->getSubTotal()}}</span></p>
                            </div>
                            <div class="ps-block__content">
                                <ul class="ps-block__product">
                                    <li><span class="ps-block__shop">Shipping:</span><span class="ps-block__shipping">Procure Express Shpping</span><!--<span class="ps-block__estimate">Estimate for <strong>Viet Nam</strong><a href="#"> MVMTH Classical Leather Watch In Black ×1</a></span>--></li>
                                    
                                </ul>
                                <h3>Total <span>KES {{\Cart::session(auth()->id())->getTotal()}}</span></h3>
                            </div>
                        </div><a class="ps-btn ps-btn--fullwidth" href="{{route('cart.checkout')}}">Proceed to checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection