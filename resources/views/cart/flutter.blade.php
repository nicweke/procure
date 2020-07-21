@extends('layouts.front')

@section('content')
<div class="container">
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

  
  <h3 class="text-center" style="padding-bottom: 10px;margin-top: 50px;">ORDER REVIEW</h3>


  <div class="col-xl-5 col-lg-4 col-md-12 col-sm-12" style="padding-top: 50px;">
    
    <div class="ps-form__total">
        
        <div class="container">
            <h3 class="ps-form__heading">Your Order</h3>
            <p style="padding-top:20px;">Please verify your order before payment:</p>
            
            <div class="content">
                <table class="table ps-table--shopping-cart">
                    <thead class="text-center">
                        <tr>
                            <th>PRODUCT</th>
                            <th>PRICE</th>
                            <th style="padding-right:50px;">QUANTITY</th>
                            <th style="padding-left: 50px;">TOTAL</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cartItems as $item)
                        <tr>
                            <td>
                                <div class="ps-product--cart">
                                <!--<div class="ps-product__thumbnail"><a href=""><img src="{{--$item->cover_img--}}" alt=""></a></div>-->
                                    <div class="ps-product__content" style="float: left"><p>{{ $item->name }}</p>
                                        <p>Sold By:<strong> YOUNG SHOP</strong></p>
                                    </div>
                                </div>
                            </td>
                            <td style="padding-left:180px;">KES {{ $item->price }}</td>
                            <td style="padding-left:80px;">{{ $item->quantity }}</td>
                            <td >{{Cart::session(auth()->id())->get($item->id)->getPriceSum()}}</td>
                            
                        </tr>
                        @endforeach 
                        
                    </tbody>
                </table>

                <div  style="padding-top:27px; position:relative;left: 50px;">
                
                    <h3 style="align-items: center">Cart Summary</h3>
                    <h5>Number of items in order:<span>&nbsp;{{$orders->item_count}}</span></h5>
                   <h5 class="mb-3">Subtotal:<span>KES {{\Cart::session(auth()->id())->getSubTotal()}}</span></h5>
                    <!--<h5 class="mb-3">Shipping Charges:<span></span></h5>-->
                    <h4 class="mb-3">Total:<span> KES {{\Cart::session(auth()->id())->getTotal()}}</span></h4>    

                </div>
    
                
                
            </div><br>



            <p style="padding-top:10px;">This Transaction is enabled by:</p>

        <img src="{{asset('images/new/pro/payment-method/flutter.png')}}" alt="" style="width: 20%; height:auto; padding:15px;margin-right:35px;">
        <img src="{{asset('images/new/pro/payment-method/mpesa.png')}}" alt="" style="width: 10%; height:auto; padding:15px;margin-right:35px;">
        <img src="{{asset('images/new/pro/payment-method/visa.jpg')}}" alt="" style="width: 10%; height:auto;padding:15px;margin-right:35px;">
        <img src="{{asset('images/new/pro/payment-method/master.png')}}" alt="" style="width: 10%; height:auto;padding:15px;"><br><br>


        </div>


    






        
    </div>
</div>
  <form class="text-center"  method="POST" action="{{ route('pay') }}" id="paymentForm">
    @csrf
  <input type="hidden" name="amount" value="{{$orders->grand_total}}" /> <!-- Replace the value with your transaction amount -->
      <input type="hidden" name="payment_method" value="both" /> <!-- Can be card, account, both -->
      <input type="hidden" name="country" value="KE" /> <!-- Replace the value with your transaction country -->
      <input type="hidden" name="currency" value="KES" /> <!-- Replace the value with your transaction currency -->
      <input type="hidden" name="email" value="{{$orders->shipping_email}}" /> <!-- Replace the value with your customer email -->
  <input type="hidden" name="firstname" value="{{$orders->shipping_fname}}" /> <!-- Replace the value with your customer firstname -->
      <input type="hidden" name="lastname" value="{{$orders->shipping_lname}}" /> <!-- Replace the value with your customer lastname -->
  <input type="hidden" name="phonenumber" value="{{$orders->shipping_phone}}" /> <!-- Replace the value with your customer phonenumber -->
      {{-- <input type="hidden" name="paymentplan" value="362" /> <!-- Ucomment and Replace the value with the payment plan id --> --}}
    <input type="hidden" name="ref" value="{{$orders->order_number}}" /> <!-- Ucomment and  Replace the value with your transaction reference. It must be unique per transaction. You can delete this line if you want one to be generated for you. -->
      {{-- <input type="hidden" name="logo" value="https://pbs.twimg.com/profile_images/915859962554929153/jnVxGxVj.jpg" /> <!-- Replace the value with your logo url (Optional, present in .env)--> --}}
      {{-- <input type="hidden" name="title" value="Flamez Co" /> <!-- Replace the value with your transaction title (Optional, present in .env) --> --}}
      <input type="submit" class="ps-btn btn-block" value="Pay" />
      
  </form>

</div>




@endsection








{{--

<div>
    @foreach ($cartItems as $item)
        <p>{{ $item->id }}</p>
        <p>{{ $item->name }}</p>
        <p>{{ $item->quantity }}</p>
        <p>{{ $item->price }}</p>
        
    @endforeach
    
</div>

<h3>Number of items<span>{{$orders->item_count}}</span></h3>
<h3>Total <span>{{$orders->grand_total}}</span></h3>
</div>
--}}






