@extends('layouts.front')

@section('content')
<div class="ps-page--single">
    <div class="ps-breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
            <li><a href="{{route('home')}}">Home</a></li>
                <li>Frequently Asked Questions</li>
            </ul>
        </div>
    </div>
    <div class="ps-faqs">
        <div class="container">
            <div class="ps-section__header">
                <h1>Frequently Asked Questions</h1>
            </div>
            <div class="ps-section__content">
                <div class="table-responsive">
                    <table class="table ps-table--faqs">
                        <tbody>
                            <tr>
                                <td class="heading" rowspan="3">
                                    <h4>Shipping</h4>
                                </td>
                                <td class="question"> What Delivery Methods Are Available?</td>
                                <td>We as Prcoure are here to give you quality service that is exhibited through our delivery service. Currently, we only ship items to customers' addresses within Nairobi</td>
                            </tr>
                            
                            <tr>
                                <td class="question">How Long Will It Take To Get My Delivery?</td>
                                <td>At Procure, for Orders made In the morning  we offer delivery within the same day. Shipping service quality is among our core values hence our delivery agents consistently make arrangements to suit delivery of the package in line with the customer's wishes.</td>
                            </tr>
                            
                            <tr>
                                <td class="question">Is Buying On-Line Safe?</td>
                                <td>At Procure, we work to ensure the safety of our clients. We have ensured security on the platform by implementation of SSL protocols and Two Factor Authentication, on logins and registration. With payment, we are PCI DSS compliant.</td>
                            </tr>
                            <tr>
                                <td class="heading" rowspan="5">
                                    <h4>Order & Returns</h4>
                                </td>
                                <td class="question"> How do I place an Order?</td>
                                <td>To place an order simply: Search for the product you are interested in, Click on the product and Add to Cart. You can access all products in the cart by clicking on the cart icon at the top left side of your window and select proceed to checkout to proceed to checkout, on checkout page, fill in your details and your address and submit your order. 5. Your order will be successfully submitted and you will receive a notification email on the same. 6. You will then receive an email from Bebamart notifying you of the state of your order submitted and delivery details scheduled and sent to you.</td>
                            </tr>
                            <tr>
                                <td class="question">How Can I Cancel Or Change My Order?</td>
                                <td>Incase of any change of heart with regards to an order, kindly get in touch with us through sales@procure.com or call +254705123456.</td>
                            </tr>
                            <tr style="display: none">
                                <td class="question">Do I need an account to place an order?</td>
                                <td>Thundercats swag 8-bit photo booth. Plaid letterpress leggings craft beer meh ethical Pinterest. Twee chia photo booth readymade food truck, hoodie roof party swag keytar PBR DIY. Cray ugh 3 wolf moon fap, fashion axe irony butcher cornhole typewriter chambray VHS banjo street art.</td>
                            </tr>
                            
                            <tr>
                                <td class="question">How Do I Track My Order?</td>
                                <td>Your can easily track your order by simply clicking on the <strong>Track Order</strong> option located within the header and footer section of the site. Simply enter your Order Number and Billing Email as prompted by the page and you will receive an email with the status of your order.</td>
                            </tr>
                            <tr hidden>
                                <td class="heading" rowspan="0">
                                    <h4>Payment</h4>
                                </td>
                                <td class="question"> What Payment Methods Are Accepted?</td>
                                <td>In Procure, we offer M-PESA, Cards and Cash on Delivery as the major payment methods. These payment types are usually enabled by our payment provider, Flutterwave. Pay for goods easily via Mpesa, Visa and MasterCard. Visa or Mastercard Users are advised to pay safely through our online payment system with card.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
 
    
@endsection