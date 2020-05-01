
@extends('layouts.front')

@section('content')

<div class="container">

    
<!-- ========================= SECTION PAGETOP ========================= -->
<section class="section-pagetop bg">
    <div class="container">
        <h2 class="title-page" style="text-align:center">Shops</h2>
        <nav>
        <ol class="breadcrumb text-white">
      <!--  <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>-->
            
        </ol>  
        </nav>
    </div> <!-- container //  -->
    </section>
    <!-- ========================= SECTION INTRO END// ========================= -->
    
    <!-- ========================= SECTION CONTENT ========================= -->
    <section class="section-content padding-y">
    <div class="container">
    
    <div class="row">
       
        <main class="col-md-12">
    
    <header class="border-bottom mb-4 pb-3">
            <div class="form-inline">
            
            
            </div>
    </header><!-- sect-heading -->
    
    <div class="row">

        @foreach ($allShopViews as $shopsview )
        <div class="col-md-3">
            <div class="card">
                <a href="{{url('shops/'.$shopsview->id)}}"> 
                    <div>
                         <img class="card-img-top" src="{{asset('storage/'.$shopsview->cover_img)}}" alt="Card image cap">
                    </div>
                    <div class="card-body">
                       <!-- <h4 class="card-title" style="text-align:center">{{$shopsview->name}}</h4>
                        <h4 class="card-title">{{$shopsview->rating}}</h4>-->
                    </div>
                </a>
            </div>   
        </div>
    @endforeach
    
  
    </div> <!-- row end.// -->
    
    
    <nav class="mt-4" aria-label="Page navigation sample">
    
     
    </nav>
    
        </main> <!-- col.// -->
    
    </div>
    
    </div> <!-- container .//  -->
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
    
        


</div>




@endsection





















