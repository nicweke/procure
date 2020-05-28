@extends('layouts.front')

@section('content')

<section class="slider-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-0">
                <div class="menu-widget">
                    <p><i class="fa fa-bars"></i>Categories</p>
                    <ul class="list-unstyled">
                        
                        
                        
                    <li class="active"><a href="{{route('users.edit')}}">My Profile</a></li>
                    <li><a href="{{route('profilo.index')}}">My Orders</a></li>
                      
                    </ul>
                </div>
            </div>
            
        </div>
    </div>
  
  
  </section>






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
                                        <label for="name"><b>{{ __('*Name') }}</b></label>
            
                                        
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $user->name) }}" required autocomplete="name" autofocus>
            
                                            @error('name')
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
                                           
                                        <button type="submit" class="btn btn-primary btn-block">
                                            {{ __('Change Your Details') }}
                                        </button>
                                    </div>
            
                                    
                                </div>
                            </form>
                        </div>


        </article><!-- card-body.// -->
    </div> <!-- card .// -->
    
<!-- ============================ COMPONENT REGISTER  END.// ================================= -->


@endsection
