@extends('layouts.front')


@section('content')

 <!-- Breadcrumb Area -->
 <section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-box text-center">
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item"><a href="{{route('home') }}">Home</a></li>
                        <li class="list-inline-item"><span>||</span>Payment</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Breadcrumb Area -->



<section>
    <div class="container">
        <form action="">
        <input type="hidden" name="{{$order->id}}">
        <input type="hidden" name="{{$order->order_number}}">
        <input type="hidden" name="{{$order->shipping_fname}}">
        <input type="hidden" name="{{$order->Shipping_lname}}">
        <input type="hidden" name="{{$order->shipping_email}}">
        <input type="hidden" name="{{$order->grand_total}}">
        <input type="hidden" name="{{$order->shipping_tel}}">
        <!-- The "Pay with mula" button needs to have the "mula-checkout-button" class -->
        <button class="checkout-button">Proceed to Payment</button>

        </form>
    </div>
</section>



<!-- Include the mula Express checkout library -->
<script id="mula-checkout-library" type="text/javascript" src="https://beep2.cellulant.com:9212/checkout/v2/tingg-checkout.js" charset="utf-8"></script>

<!-- Include the mula Express checkout library -->
<!-- Initialize the "Pay with mula" button -->
<script type="text/javascript">
    // End point to your service that handles encryption
    const merchantURL = "http://procure.test/Encrypt.php";

    const no = Math.floor((Math.random() * 50000000) + 10000000);

    const params = {
        merchantTransactionID: $order->order_number,
        customerFirstName: $order->shipping_fname,
        customerLastName: $order->Shipping_lname,
        customerEmail: $order->shipping_email,
        amount: $order->grand_total,
        accountNumber: 56789007586512,
        currencyCode: 'KES',
        languageCode: 'en',
        serviceDescription: 'Payment for Purchases made on Procure',
        transactionID: $order->order_number,
        serviceCode: 'PURDEV1304',
        productCode: $order->id,
        payerClientCode:"PRODEV5639",
        MSISDN: $order->shipping_tel,
        countryCode: 'KE',
        accessKey:"$2a$08$I.qb6TCaxdv5stvnZuvWGuRrTOvflWUo.EtSxFOmnLXd5P1Yegwim", // Input your access key here
        dueDate: '0000-00-00 00:05:005',
        successRedirectUrl:"http://procure.test",
        failRedirectUrl: "http://procure.test/payment-failed",
        paymentWebhookUrl: "http://procure.test/webhook"
    }; // The params to be encrypted

    Tingg.renderPayButton({ className:'checkout-button', checkoutType:'redirect'});

    // Initialize the mula checkout modal/redirect
    //on button click, redirect to express checkout
    document.querySelector(".checkout-button").addEventListener("click", function () {

        function encrypt() {
            var request = new XMLHttpRequest();
            request.open('POST', merchantURL, true);
            request.setRequestHeader('Content-Type',
                'application/json; charset=UTF-8',
                'Access-Control-Allow-Origin', '*',
            );

            request.onreadystatechange = function() {

                if(this.readyState == XMLHttpRequest.DONE && this.status == 200) {
                    var jsonData = JSON.parse(request.responseText);

                    Tingg.renderCheckout({
                        checkoutType: "redirect",
                        merchantProperties: jsonData
                    });
                }
            }

            request.send(JSON.stringify(params));
        }
        //encrypt and load checkout
        encrypt();
    });
</script>


    
@endsection