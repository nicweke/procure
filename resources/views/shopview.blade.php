
@extends('layouts.front')

@section('content')

<div class="container">

    
<!-- Breadcrumb Area -->
<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-box text-center">
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="list-inline-item"><span>||</span> Shops</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Breadcrumb Area -->



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
                    <div class="tab-pane fade show active" id="sg1" role="tabpanel">
                        <img src="{{asset('storage/'.$shopsview->cover_img)}}" alt="" class="img-fluid">
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
    
   
        


</div>




@endsection





















