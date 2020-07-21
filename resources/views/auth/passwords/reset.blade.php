
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
    <div class="container">
        <div style="margin-top: 50px; position: relative;left:490px;">

            <a href="{{route('home')}}"><img src="{{ asset('images/new/emaillogo.png')}}" alt="logo"></a>
        </div>
        <div class="row justify-content-center">
            
            <div class="col-md-8">
                <div class="card" >
                    <div class="card-header"><h4 >{{ __('Reset Password') }}</h4></div>
    
                    <div class="card-body">
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf
    
                            <input type="hidden" name="token" value="{{ $token }}">
    
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
    
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
    
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="ps-btn btn-block">
                                        {{ __('Reset Password') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

</body>
</html>