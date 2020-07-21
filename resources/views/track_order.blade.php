@extends('layouts.front')
@section('content')


<div class="ps-order-tracking">
    <div class="container">
        <div class="ps-section__header">
            <h3>Order Tracking</h3>
            <p>To track your order, please enter your Order number and billing email in the fields below. The order number was sent to you through a receipt when you confrimed your order and the billing email was used at the checkout stage of the purchase.</p>
        </div>
        <div class="ps-section__content">
        <form class="ps-form--order-tracking" action="{{route('track.store')}}" method="POST">
            @csrf
                <div class="form-group">
                    <label>Order Number</label>
                    <input class="form-control" type="text" name="order_no" id="order_no" placeholder="Check Order confimation email">
                </div>
                <div class="form-group">
                    <label>Billing Email</label>
                    <input class="form-control" type="text" name="billing_email" id="billing_email" placeholder="">
                </div>
                <div class="form-group">
                    <button class="ps-btn ps-btn--fullwidth" type="submit">Track Your Order</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>



@endsection
