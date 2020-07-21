@extends('layouts.front')

@section('content')
<div class="ps-page--single" id="contact-us">
    <div class="ps-breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
            <li><a href="{{route('home')}}">Home</a></li>
                <li>Support</li>
            </ul>
        </div>
    </div>
    <!--<div id="contact-map" data-address="17 Queen St, Southbank, Melbourne 10560, Australia" data-title="Funiture!" data-zoom="17"></div>-->
    <div class="ps-contact-info" style="padding-top: 10px;">
        <div class="container">
            <div class="ps-section__header">
                <h3>For Support and Queries</h3>
            </div>
            <div class="ps-section__content">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 " style="position: relative; left:400px;">
                        <div class="ps-block--contact-info">
                            <h4 style="font-size: 25px">Contact Us Directly @</h4>
                            <p><span class="__cf_email__">support@procure.com</span><br>or<br><span>(+254) 705123456</span></p>
                        </div>
                    </div>
                    
                
                </div>
            </div>
        </div>
    </div>
    <!--<div class="ps-contact-form">
        <div class="container">
            <form class="ps-form--contact-us" action="index.html" method="get">
                <h3>Get In Touch</h3>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Name *">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Email *">
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Subject *">
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <div class="form-group">
                            <textarea class="form-control" rows="5" placeholder="Message"></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group submit">
                    <button class="ps-btn">Send message</button>
                </div>
            </form>
        </div>
    </div>-->
</div>
    
@endsection