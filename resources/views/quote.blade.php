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

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="{{ asset('css/assets/bootstrap.min.css') }}">

		<!-- Fontawesome Icon -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

		<!-- Animate Css -->
        <link rel="stylesheet" href="{{ asset('css/assets/animate.css') }}">

        <!-- Owl Slider -->
        <link rel="stylesheet" href="{{ asset('css/assets/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/assets/owl.theme.default.min.css') }}">

        <!-- Custom Style -->
        <link rel="stylesheet" href="{{ asset ('css/assets/normalize.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/assets/responsive.css') }}">

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

                @include('inc.messages')
    
                    <!-- ========================= SECTION CONTENT ========================= -->
                    <section class="section-content padding-y">
                    
                        <!-- ============================ COMPONENT REGISTER   ================================= -->
                            <div class="card mx-auto" style="max-width:520px; margin-top:40px;">
                            <article class="card-body">
                    
                                <h2 class="text-center"><b>{{ __('REQUEST FOR QUOTATION') }}</b></h2> 
                    
                                                <div class="card-body">
                                                    <form action="/quote/{id}" method="post">
                                                        @csrf
                                                        <div class="form-group row mt-4">

                                                            <div class="col-md-12 mt-3">
                                                                <h6><b>Product ID</b></h6>
                                                                <p >{{$products->id}}</p>
                                                            </div>

                                                            <div class="col-md-12 mt-3">
                                                                <label for="name"><b>Product Name</b></label>
                                                                <input type="name" name="name" id="name" class="form-control" required>

                                                            </div>

                                                            <div class="col-md-12 mt-3">
                                                                <h6><b>Product Description</b></h6>
                                                            <p>{{$products->description}}</p>

                                                            </div>
                                                            

                                                            <div class="col-md-12 mt-3">
                                                                <label for="quantity"><b>Enter Quantity</b></label>
                                                                <input type="number" name="quantity" id="quantity" class="form-control" required>

                                                            </div>

                                                            <div class="col-md-12 mt-3">
                                                                <h6><b>Product Image</b></h6>
                                                            <img src="{{asset('storage/'.$products->cover_img)}}" alt="">

                                                            </div>

                                                            <div class="col-md-12 mt-3">
                                                                <label for="company"><b>Company Name</b></label>
                                                                <input type="text"  name="company" id="company" class="form-control" >
                    
                                                            </div>

                                                            <div class="col-md-12 mt-3">
                                                                <label for="email"><b>Email Address</b></label>
                                                                <input type="email"  name="email" id="email" class="form-control" required>
                    
                                                            </div>

                                                            <div class="col-md-12 mt-3">
                                                                <label for="inquiry"><b>Product Inquiry</b></label>
                                                                <textarea class="col-md-12" rows="4" cols="50" name="inquiry">
                                                                    </textarea>
                    
                                                            </div>


                                                        </div>
                                                        
                    
                                                        <div class="form-group row mb-0">
                                                
                                                            <button type="submit" class="btn btn-primary btn-block">
                                                                {{ __('Request Quote') }}
                                                            </button>
                                                        </div>
                                                    
                                                    </form>
                                                </div>
                    
                                                
                    
                                                
                                    
                    
                    
                                </article><!-- card-body.// -->
                            </div> <!-- card .// -->
                            
                        <!-- ============================ COMPONENT REGISTER  END.// ================================= -->
                        
                        
                        </section>
                    
               
            </main>
    </body>
</html>
