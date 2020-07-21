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
            <li >
                <a href="{{route('users.edit')}}"><i class="fa fa-user item-icon"></i>My Profile</a>
            </li>
            <li class="active">
                <a href="{{route('profilo.index')}}"><i class="fas fa-receipt"></i>My Orders</a>
            </li>
            
        </ul>
    </div>
    <!-- /menu-->
</div>
</div>
</div>





    <h2 class="text-center py-5"><b>{{ __('My Orders') }}</b></h2>

    

        
    
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
