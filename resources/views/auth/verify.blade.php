{{--@extends('layouts.front')

@section('content')

@endsection--}}








<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    {{--<link rel="stylesheet" href="fonts/Linearicons/Linearicons/Font/demo-files/demo.css">--}}



    
    <link rel="stylesheet" href="{{ asset('css/new/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/new/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{ asset('css/new/css/slick.css')}}">
    <link rel="stylesheet" href="{{ asset('css/new/css/lightgallery.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/new/css/fontawesome-stars.css')}}">
    <link rel="stylesheet" href="{{ asset('css/new/css/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/new/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/new/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/new/css/style-light.css')}}">
    <link rel="stylesheet" href="{{ asset('css/new/css/top.css')}}">

    
    

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5eb47ba081d25c0e5849d6b6/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
        </script>
        <!--End of Tawk.to Script-->
    
        <!------One Signal Script------->
        <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
        <script>
          var OneSignal = window.OneSignal || [];
          OneSignal.push(function() {
            OneSignal.init({
              appId: "b14b48b7-f2ca-484d-ad9b-68290d59cc81",
            });
          });
        </script>
        <!-------End of Script-------------->
</head>


<body>
    <div class="container" >
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div style="position: relative; left:33%; top: 40px;">
                    <a href="{{route('home')}}"><img src="{{ asset('images/new/emaillogo.png')}}" alt="logo"></a>
                </div>
                




                <div class="card" style="position: relative; top:50px; ">
                    <div class="card-header text-center" >
                        <h3>{{ __('Verify Your Email Address') }}</h3>
                    </div>
    
                    <div class="card-body" style="height: 60px;">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('A fresh verification link has been sent to your email address.') }}
                            </div>
                        @endif
    
                        {{ __('Before proceeding, please check your email for a verification link.') }}
                        {{ __('If you did not receive the email') }},
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit" class="btn btn-link p-0 m-0 align-baseline" style="font-size: 12px;">{{ __('click here to request another') }}</button>.
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>




