@extends('layouts.front')


@section('content')
<div class="container">
    <div style="padding-bottom: 15px;">
        <h1 class="text-center">Request Approval Form</h1>
    </div>
    <div>
    <form action="{{ route('approval.post') }}" method="POST">
        @csrf
            <p style="padding-top:5px; padding-bottom:5px;">Kindly enter the following details to facilitate in generating the order approval form:</p>
            <div class="form-group">
                <label for="fname"><i class="zmdi zmdi-account material-icons-name"></i></label>

            
                <input id="fname" type="text" class="form-control @error('cname') is-invalid @enderror" name="fname" value="{{ old('fname') }}" required autocomplete="fname" autofocus placeholder="Enter Requester First Name">

                @error('fname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="lname"><i class="zmdi zmdi-account material-icons-name"></i></label>

            
                <input id="lname" type="text" class="form-control @error('lname') is-invalid @enderror" name="lname" value="{{ old('lname') }}" required autocomplete="lname" autofocus placeholder="Enter Requester Last Name">

                @error('lname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="cname"><i class="zmdi zmdi-account material-icons-name"></i></label>

            
                <input id="cname" type="text" class="form-control @error('cname') is-invalid @enderror" name="cname" value="{{ old('cname') }}" required autocomplete="cname" autofocus placeholder="Company Name">

                @error('cname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="address"><i class="zmdi zmdi-account material-icons-name"></i></label>

            
                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus placeholder="Company Address">

                @error('address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="postal"><i class="zmdi zmdi-account material-icons-name"></i></label>

            
                <input id="postal" type="text" class="form-control @error('postal') is-invalid @enderror" name="postal" value="{{ old('postal') }}" required autocomplete="postal" autofocus placeholder="Company Postal Address">

                @error('postal')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="city"><i class="zmdi zmdi-account material-icons-name"></i></label>

            
                <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" required autocomplete="city" autofocus placeholder="City">

                @error('city')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            
        <div class="col-md-12 py-3">        
        <button type="submit" class="btn btn-primary btn-block btn-lg" >Submit Details</button>
        </div>

        

        </form>
    </div>

</div>

@endsection