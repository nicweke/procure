
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="cache-control" content="max-age=604800" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>{{ config('app.name', 'Laravel') }}</title>

<link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">

<!-- jQuery -->
<script src="js/jquery-2.0.0.min.js" type="text/javascript"></script>

<!-- Bootstrap4 files-->
<script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">


<!-- Font awesome 5 -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" type="text/css" rel="stylesheet">

<!-- custom style -->
<link href="{{ asset('css/ui.css') }}" rel="stylesheet">
<link href="{{ asset('css/responsive.css') }}" rel="stylesheet" media="only screen and (max-width: 1200px)" />

<!-- custom javascript -->
<script src="js/script.js" type="text/javascript"></script>

<script type="text/javascript">
/// some script

// jquery ready start
$(document).ready(function() {
	// jQuery code

}); 
// jquery end
</script>


</head>
<body>

	
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



<main class="py-4">
    
<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content padding-y">

    <!-- ============================ COMPONENT REGISTER   ================================= -->
        <div class="card mx-auto" style="max-width:520px; margin-top:40px;">
          <article class="card-body">

            <h2 class="text-center">{{ __('Register') }}</h2>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                                <div class="form-row mt-4">
                                    <label for="name"><b>{{ __('*Name') }}</b></label>
        
                                    
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
        
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    
                                </div>    
                                
                                
                                <!-- form-group end.// -->
                                <div class="form-row mt-4">
                                    <label for="cname"><b>{{ __('*Company Name') }}</b></label>
        
                                    
                                        <input id="cname" type="text" class="form-control @error('cname') is-invalid @enderror" name="cname" value="{{ old('cname') }}" required autocomplete="cname" autofocus>
        
                                        @error('cname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    
                                </div>    
                                
                                
                                <!-- form-group end.// -->
    

                            <div class="form-group row mt-4">
                                <label for="email" ><b>{{ __('*E-Mail Address') }}</b></label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror       
                            </div>


                            <div class="form-group row">
                                
                                <label for="password"><b>{{ __('*Password') }}</b></label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>


                            <div class="form-group row">
                                
                                <label for="password-confirm"><b>{{ __('*Confirm Password') }}</b></label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>

                            <div class="form-group row mb-0">
                               
                                    <button type="submit" class="btn btn-primary btn-block">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>


                            
                                
                                     
                        </form>
                    </div>

            </article><!-- card-body.// -->
        </div> <!-- card .// -->
        <p class="text-center mt-4">Already having an account? <a href="{{ route('login') }}">Log In</a></p>
        <br><br>
    <!-- ============================ COMPONENT REGISTER  END.// ================================= -->
    
    
    </section>
    <!-- ========================= SECTION CONTENT END// ========================= -->
    
    
    <!-- ========================= FOOTER ========================= -->
    <footer class="section-footer border-top padding-y">
        <div class="container">
            <p class="float-md-right"> 
                &copy Copyright 2020 All rights reserved
            </p>
            <p>
                <a href="#">Terms and conditions</a>
            </p>
        </div><!-- //container -->
    </footer>
    <!-- ========================= FOOTER END // ========================= -->

</main>




</body>
</html>




    
