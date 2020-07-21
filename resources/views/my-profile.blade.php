@extends('layouts.front')

@section('content')



 
<div id="scoped-content">

        <style type="text/css" scoped>
       #sidebar h3 
    { padding-top: 7px;
      position: relative;
      left: 100px;
    }

.sidebar-nav li {
padding: 10px;
background-color: #fcb800;
width: 100%;
margin-bottom: 5px;
color: #000;
list-style-type: none;

}

.sidebar-nav li:hover {
padding: 10px;
width: 100%;
margin-bottom: 5px;
color: #fff !important;
-webkit-transition: all 0.5s ease-in-out;
-moz-transition: all 0.5s ease-in-out;
-o-transition: all 0.5s ease-in-out;
transition: all 0.5s ease-in-out;
color: #000;

text-align: center;
}

.sidebar-nav li.active {
padding: 10px;
width: 100%;
margin-bottom: 5px;
color: #000 !important;
background-color: #d1d1d1;
}

.sidebar-nav li.active a { color: #000 !important }

.sidebar-nav li.active:hover {
padding: 10px;
width: 100%;
margin-bottom: 5px;
color: #2d00f7;
-webkit-transition: all 0.5s ease-in-out;
-moz-transition: all 0.5s ease-in-out;
-o-transition: all 0.5s ease-in-out;
transition: all 0.5s ease-in-out;
}

.sidebar-nav li a {
color: #000;
width: 100%;
}

/*.sidebar-nav li a:hover 
{ color: #fff;
}*/

.sidebar-nav li a i { padding-right: 10px }

.sidebar-nav li a i:hover {
color: #fff;
padding-right: 10px;
}
.main_b {
margin-left: 140px; /* Same width as the sidebar + left position in px */
padding: 0px 10px;
position: relative;
bottom: 200px;
}
 
        
        </style>

<div id="sidebar" class="sidebar col-sm-3 col-md-3 col-lg-3">
    <div class="widget">
        <h3>My Account</h3>
        <!-- Menu -->
        <div id="sidebar-nav">
            <ul class="sidebar-nav">
                <li >
                    <a href="my-account.html"><i class="fa fa-gears item-icon"></i>My Dashboard</a>
                </li>
                <li class="active">
                    <a href="{{route('users.edit')}}"><i class="fa fa-user item-icon"></i>My Profile</a>
                </li>
                <li>
                    <a href="{{route('profilo.index')}}"><i class="fas fa-receipt"></i>My Orders</a>
                </li>
            </ul>
        </div>
        <!-- /menu-->
    </div>
</div>
</div>













<div class="main_b" >

  <h2 class="text-center"><b>{{ __('My Profile') }}</b></h2>
<div class="card mx-auto" style="max-width:520px; margin-top:40px;">
    <article class="card-body">

         
        <h3 class="text-center mt-4">{{ __('Change Login Details') }}</h3> 

                        <div class="card-body">
                            <form method="POST" action="{{ route('users.update') }}">
                                @method('patch')
                                @csrf
                                
                                
                                <div class="row">
            
                                    <div class="col-md-12">
                                        <label for="first_name"><b>{{ __('*First Name') }}</b></label>
            
                                        
                                            <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name', $user->first_name) }}" required autocomplete="first_name" autofocus>
            
                                            @error('first_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        
                                    </div>    
                                    <div class="col-md-12">
                                        <label for="last_name"><b>{{ __('*Last Name') }}</b></label>
            
                                        
                                            <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name', $user->last_name) }}" required autocomplete="last_name" autofocus>
            
                                            @error('last_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        
                                    </div>    
            
                                    <div class="col-md-12 mt-4">
                                        <label for="cname"><b>{{ __('*Company Name') }}</b></label>
            
                                        
                                            <input id="cname" type="text" class="form-control @error('cname') is-invalid @enderror" name="cname" value="{{ old('cname', $user->cname) }}" required autocomplete="cname" autofocus>
            
                                            @error('cname')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        
                                    </div>    
            
                                    <div class="col-md-12 mt-4">
                                        
                                        <label for="email" ><b>{{ __('*E-Mail Address') }}</b></label>
                                        
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $user->email) }}" required autocomplete="email">
                                            <!--<small class="form-text text-muted mt-0">We'll never share your email with anyone else.</small> -->
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror       
                                    </div>
            
                                    <div class="col-md-12 mt-4">
                                            
                                        <label for="password"><b>{{ __('*Password') }}</b></label>
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">
            
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
            
                                    <div class="col-md-12 mt-4">
                                            
                                        <label for="password-confirm"><b>{{ __('*Confirm Password') }}</b></label>
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password">
                                    </div>
            
            
                                   
            
                                    <div class="col-md-12 mt-4">
                                           
                                        <button type="submit" class="ps-btn btn-block">
                                            {{ __('Change Your Details') }}
                                        </button>
                                    </div>
            
                                    
                                </div>
                            </form>
                        </div>


        </article><!-- card-body.// -->
    </div> <!-- card .// -->
</div>
    
<!-- ============================ COMPONENT REGISTER  END.// ================================= -->

@endsection