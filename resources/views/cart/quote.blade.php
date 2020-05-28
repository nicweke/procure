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
                                        <p class="t-heading"><a href="">{{ $item->name }}</a></p>
                                        
                                    </div>
                                </td>
                                <td class="t-price">KES {{ $item->price }} </td>
                                <td class="t-qty">
                                    <div class="qty-box">
                                        <div class="quantity buttons_added">

                                            <form action="{{route('cart.update', $item->id)}}" method="get">
                                                <input name="quantity" type="number" value="{{ $item->quantity }}">

                                                <input class="button" type="submit" value="save">

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
                    <form action="#">
                        <input type="text" name="zip" value="" placeholder="Your Coupon">
                        <button type="button">Apply Code</button>
                    </form>

                    <a href="{{route('quote-download') }}">Print Quotation</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="crt-sumry">
                    <h5>Cart Summery</h5>
                    <ul class="list-unstyled">
                        <li>Subtotal <span>KES {{\Cart::session(auth()->id())->getTotal()}}</span></li>
                        <li>Shipping & Tax <span>0.00</span></li>
                        <li>Grand Total <span>KES {{\Cart::session(auth()->id())->getTotal()}}</span></li>
                    </ul>
                    <div class="cart-btns text-right">
                        <button onclick="location.href='{{route('home')}}'" class="up-cart">Update Cart</button>
                        <button onclick="location.href='{{route('cart.checkout')}}'" class="chq-out ">Checkout</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>