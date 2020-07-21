@extends('layouts.front')
@section('content')

@include('inc.messages')

<div class="ps-breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
        <li><a href="{{route('home')}}">Home</a></li>
        <li><a href="{{route('product.all')}}">Products</a></li>
        <li><a href="{{url('product/{id}')}}">{{$products->name}}</a></li>
        <li>Quote for {{$products->name}}</li>
        </ul>
    </div>
</div>
    
                    <!-- ========================= SECTION CONTENT ========================= -->
                    <section class="section-content padding-y">
                    <div >
                        <a href="{{ url()->previous() }}" style="postion:relative; top:200px;left:200px;"><i class="fas fa-arrow-left fa-3x"></i></a>
                    </div>
                        
                        <!-- ============================ COMPONENT REGISTER   ================================= -->
                            <div class="card mx-auto" style="max-width:520px; margin-top:40px;">
                            <article class="card-body">
                    
                                <h2 class="text-center"><b>{{ __('REQUEST FOR QUOTATION') }}</b></h2> 
                    
                                                <div class="card-body">
                                                    <form action="/quote/{id}" method="post" role="form">
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

                                                           <!--<div class="col-md-12 mt-3">
                                                                <h6><b>Product Image</b></h6>
                                                            <img src="{{asset('storage/'.$products->cover_img)}}" alt="">

                                                            </div>-->

                                                            <div class="ps-product__gallery" data-arrow="true">
                                                                <p style="position:relative;left:14px;top: 5px;"><b>Product Image</b></p>
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
                                                
                                                            <button type="submit" class="ps-btn btn-block">
                                                                {{ __('Request Quote') }}
                                                            </button>
                                                        </div>
                                                    
                                                    </form>
                                                </div>
                    






                         
                                                
                    
                                                
                                    
                    
                    
                                </article><!-- card-body.// -->
                            </div> <!-- card .// -->
                            
                        <!-- ============================ COMPONENT REGISTER  END.// ================================= -->
                        
                        
                        </section>
    

@endsection