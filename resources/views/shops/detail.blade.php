@extends('layouts.front')



@section('content')

<!-- ========================= SECTION POPULAR PRODUCTS ========================= -->
<section class="section-name  padding-y-sm">
    <div class="container">
    
        
    <div class="row">
     
      @foreach ($shopProducts as $product)
      @include('product._single_product')
      @endforeach
  
    </div> <!-- row.// -->
    
    </div><!-- container // -->
    </section>
    <!-- ========================= SECTION  END// ========================= -->
    
@endsection