<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login || Procure</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ asset('fonts/material-icon/css/material-design-iconic-font.min.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>


<body>
    
    <script src="{{ asset('js/assets/vendor/jquery-1.12.4.min.js') }}"></script>
    <script>
            $("body").on('click', '.toggle-password', function() {
      $(this).toggleClass("fa-eye fa-eye-slash");
      var input = $("#password");
      if (input.attr("type") === "password") {
        input.attr("type", "text");
      } else {
        input.attr("type", "password");
      }
    
    });
</script>
    {{--Display Success Message--}}
			@if(session()->has('message'))
			<div class="alert alert-success text-center" role="alert">
			   {{session('message')}}
			</div>
		@endif
	
		{{-- display error message --}}
	
		@if(session()->has('error'))
		<div class="alert alert-danger text-center" role="alert">
			{{session('error')}}
		</div>
		@endif

    <div class="main">

        

        <!-- Sign in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                    <figure><img src="{{asset('images/signin.jpg')}}" alt="sing up image"></figure>
                    <a href="{{route('register')}}" class="signup-image-link">Create Account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign In</h2>
                        <form method="POST" action="{{ route('login') }}">
                        @csrf
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Enter Email Address" value="{{ old('email') }}" required autofocus > 
                
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif   

                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter Password">
                                <span toggle="#password-field" class="fa fa-fw fa-eye field_icon toggle-password"></span>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                                
                            </div>
                            <div class="form-group">
                                <input type="radio" name="via" id="email" value="email" checked class="agree-term" />
                                <label for="email" class="label-agree-term"><span><span></span></span>Send OTP through Email</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>

                            @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                            @endif
                        </form>
                        
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="{{ asset('js/assets/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src=" {{ asset('js/register.js') }}"></script>
</body>
</html>