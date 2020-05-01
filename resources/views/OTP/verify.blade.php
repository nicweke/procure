
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

            <h2 class="text-center">{{ __('OTP Verification') }}</h2> 

                            <div class="card-body">
                                <form action="/verifyOTP" method="post">
                                    @csrf
                                    <div class="form-group row mt-4">
                                        <label for="otp"><b>Your OTP</b></label>
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




    
