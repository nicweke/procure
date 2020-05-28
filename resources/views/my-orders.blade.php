@extends('layouts.front')

@section('content')

<section class="slider-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-0">
                <div class="menu-widget">
                    <p><i class="fa fa-bars"></i>Categories</p>
                    <ul class="list-unstyled">
                        
                        
                        
                    <li><a href="{{route('users.edit')}}">My Profile</a></li>
                    <li ><a href="{{route('profilo.index')}}">My Orders</a></li>
                      
                    </ul>
                </div>
            </div>
            
        </div>
    </div>
  
  
  </section>






  <h2 class="text-center py-2"><b>{{ __('My Orders') }}</b></h2>

    

        
    
        <div class="container">

                <table class="table" style="border: 1px solid black">
                    <thead>
                        <tr>
                            <th>Order Number</th>
                            <th>Grand Total</th>
                            <th>Item Count</th>
                            <th>Shipping First Name</th>
                            <th>Shipping Last Name</th>
                            <th>Shipping Email</th>
                            <th>Shipping City</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $b)
                        <tr>
                            <td><p>{{$b->order_number}}</p></td>
                            <td><p>{{$b->grand_total}}</p></td>
                            <td><p>{{$b->item_count}}</p></td>
                            <td><p>{{$b->shipping_fname}}</p></td>
                            <td><p>{{$b->shipping_lname}}</p></td>
                            <td><p>{{$b->shipping_email}}</p></td>
                            <td><p>{{$b->shipping_city}}</p></td>
                        </tr>
                    
                        @endforeach
                    </tbody>
                </table>

        </div>
                
                
           
        
         
        

                    


        
    
    


@endsection
