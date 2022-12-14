<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

         <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Favicon -->
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="{{ asset('css/new/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ asset('css/new/css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{ asset('css/new/css/slick.css')}}">
        <link rel="stylesheet" href="{{ asset('css/new/css/lightgallery.min.css')}}">
        <link rel="stylesheet" href="{{ asset('css/new/css/fontawesome-stars.css')}}">
     

    </head>
    <body>

        <!-- Preloader 
        <div class="preloader">
            <div class="load-list">
                <div class="load"></div>
                <div class="load load2"></div>
            </div>
        </div>-->
        <!-- End Preloader -->
        

            <main class="py-4">
                <div class="container" style="text-align: center">
                @include('inc.messages')
                </div>
    
                    <!-- ========================= SECTION CONTENT ========================= -->
                    <section class="section-content padding-y">
                    
                        <!-- ============================ COMPONENT REGISTER   ================================= -->
                            <div class="card mx-auto" style="max-width:520px; margin-top:40px;">
                            <article class="card-body">
                    
                                <h2 class="text-center">{{ __('OTP Verification') }}</h2> 
                    
                                                <div class="card-body">
                                                    <form action="/verifyOTP" method="post">
                                                        @csrf
                                                        <div class="form-group row mt-4">
                                                            <label for="otp"><b>Enter your OTP Code</b></label>
                                                            <input type="text" name="OTP" id="otp" class="form-control" required>
                                                        </div>
                                                        
                    
                                                        <div class="form-group row mb-0">
                                                
                                                            <button type="submit" class="btn btn-primary btn-block">
                                                                {{ __('Verify OTP') }}
                                                            </button>
                                                        </div>
                                                    
                                                    </form>
                                                </div>
                    
                                                
                    
                                                <div class="container mb-4">
                                                    <form action="/resend_otp" method="post">
                                                        @csrf
                                                        <div class="form-group row mb-0">
                                                
                                                            <button type="submit" class="btn btn-dark btn-block">
                                                                {{ __('Resend OTP') }}
                                                            </button>
                                                        </div>
                                                        <small>*if email has not been received, kindly refresh your mail box</small>
                                                        
                                                    </form>
                                                </div>
                                    
                    
                    
                                </article><!-- card-body.// -->
                            </div> <!-- card .// -->
                            
                        <!-- ============================ COMPONENT REGISTER  END.// ================================= -->
                        
                        
                        </section>
                    
               
            </main>
    </body>
</html>
