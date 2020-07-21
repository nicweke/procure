{{--<html>
<head>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>

<body>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
    		<div class="invoice-title">
            <h2>Order Invoice</h2><h3 class="pull-right">{{$order->order_number}}</h3>
    		</div>
    		<hr>
    		<div class="row">
    			<div class="col-xs-6">
    				<address>
    				<strong>Billed To:</strong><br>
                    {{$order->billing_fname}}&nbsp;{{$order->billing_lname}}<br>
                    {{$order->billing_address}}<br>
                    {{$order->billing_zipcode}}<br>
                    {{$order->billing_county}}<br>
    				{{$order->billing_city}}
    				</address>
    			</div>
    			<div class="col-xs-6 text-right">
    				<address>
        			<strong>Shipped To:</strong><br>
                    {{$order->shipping_fname}}&nbsp;{{$order->shipping_lname}}<br>
                    {{$order->shipping_address}}<br>
                    {{$order->shipping_zipcode}}<br>
                    {{$order->shipping_county}}<br>
    				{{$order->shipping_city}}
    				</address>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-xs-6">
    				<address>
    					<strong>Payment Method:</strong><br>
						{{$order->payment_method}}<br>
    					{{$order->billing_email}}
    				</address>
    			</div>
    			<div class="col-xs-6 text-right">
    				<address>
    					<strong>Order Date:</strong><br>
                    {{$order->created_at}}<br><br>
    				</address>
    			</div>
    		</div>
    	</div>
    </div>
    
    <div class="row">
    	<div class="col-md-12">
    		<div class="panel panel-default">
    			<div class="panel-heading">
    				<h3 class="panel-title"><strong>Order summary</strong></h3>
    			</div>
    			<div class="panel-body">
    				<div class="table-responsive">
    					<table class="table table-condensed">
    						<thead>
                                <tr>
        							<td><strong>Item</strong></td>
        							<td class="text-center"><strong>Price</strong></td>
        							<td class="text-center"><strong>Quantity</strong></td>
        							<td class="text-right"><strong>Totals</strong></td>
                                </tr>
    						</thead>
    						<tbody>
    							<!-- foreach ($order->lineItems as $line) or some such thing here -->
    							<tr>
                                   
                    @foreach ($cartItems as $c)
    								<td>{{$c->name }}</td>
    								<td class="text-center">KES {{$c->price  }}</td>
    								<td class="text-center">{{$c->quantity  }}</td>
                    <td class="text-right">{{Cart::session(auth()->id())->get($c->id)->getPriceSum()}}</td>
                    @endforeach
                                    
    							</tr>
    							<tr>
    								<td class="thick-line"></td>
    								<td class="thick-line"></td>
    								<td class="thick-line text-center"><strong>Subtotal</strong></td>
    								<td class="thick-line text-right">KES {{\Cart::session(auth()->id())->getSubTotal()}}</td>
    							</tr>
    							<tr>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line text-center"><strong>Shipping</strong></td>
    								<td class="no-line text-right">Procure Express Shipping</td>
    							</tr>
    							<tr>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line text-center"><strong>Total</strong></td>
    								<td class="no-line text-right">KES {{\Cart::session(auth()->id())->getTotal()}}</td>
    							</tr>
    						</tbody>
    					</table>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
</div>
</body>

</html>--}}












{{--<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="images/favicon.png" rel="icon" />
<title>Flight Booking Invoice - Koice</title>
<meta name="author" content="harnishdesign.net">

<!-- Web Fonts
======================= -->
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900' type='text/css'>

<!-- Stylesheet
======================= -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
<link rel="stylesheet" type="text/css" href="pdf/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="pdf/all.min.css"/>
<link rel="stylesheet" type="text/css" href="pdf/stylesheet.css"/>
</head>
<body>
<!-- Container -->
<div class="container-fluid invoice-container">
  <!-- Header -->
  <header>
  <div class="row align-items-center">
    <div class="col-sm-7 text-center text-sm-left mb-3 mb-sm-0">
	<img id="logo" src="{{ asset('images/new/emaillogo.png')}}" title="Procure Logo" alt="logo" />
    </div>
    <div class="col-sm-5 text-center text-sm-right">
      <h4 class="text-7 mb-0">Order Invoice</h4>
    </div>
  </div>
  <hr>
  </header>
  
  <!-- Main Content -->
  <main>
  <div class="row">
  {{--<div class="col-sm-6"><strong>Date:</strong>&nbsp;{{ date('Y-m-d H:i:s') }}</div>-}}
  <div class="col-sm-6 text-sm-right"> <strong>Order No:</strong>{{$order->order_number}}</div>
	  
  </div>
  <hr>
  <div class="row">
    <div class="col-sm-6 text-sm-right order-sm-1"> <strong>Billed To:</strong>
      <address>
		{{$order->billing_fname}}&nbsp;{{$order->billing_lname}}<br>
		{{$order->billing_address}}<br>
		{{$order->billing_zipcode}}<br>
		{{$order->billing_county}}<br>
		{{$order->billing_city}}
      </address>
    </div>
    <div class="col-sm-6 order-sm-0"> <strong>Shipped To:</strong>
      <address>
		{{$order->shipping_fname}}&nbsp;{{$order->shipping_lname}}<br>
		{{$order->shipping_address}}<br>
		{{$order->shipping_zipcode}}<br>
		{{$order->shipping_county}}<br>
		{{$order->shipping_city}}
      </address>
    </div>
  </div> 
  <div class="row">
	<div class="col-xs-6">
		<address>
			<strong>Payment Method:</strong><br>
			{{$order->payment_method}}<br>
			{{$order->billing_email}}
		</address>
	</div>
	<div class="col-xs-6 text-right">
		<address>
			<strong>Order Date:</strong><br>
		{{$order->created_at}}<br><br>
		</address>
	</div>
</div> 
  <div class="card">
    <div class="card-header px-2 py-0">
		<h3 class="panel-title"><strong>Order summary</strong></h3>
      <table class="table mb-0">
        <thead>
          <tr>
            <td class="col-3 border-0 hidden"><strong>Item</strong></td>
			<!--<td class="col-4 border-0"><strong>Description</strong></td>-->
            <td class="col-2 text-center border-0"><strong>Price</strong></td>
			<td class="col-1 text-center border-0"><strong>Quantity</strong></td>
            <td class="col-2 text-right border-0"><strong>Total</strong></td>
          </tr>
        </thead>
      </table>
    </div>
    <div class="card-body px-2">
      <div class="table-responsive">
        <table class="table">
          <tbody>
            <tr>
              @foreach ($cartItems as $c)
              <td class="col-3 border-0 hidden">{{$c->name}}</td>
              <td class="col-4 text-1 border-0" style="display: none">Creating a website design</td>
              <td class="col-2 text-center border-0" style="position:relative;left:39px;">KES {{$c->price}}</td>
              <td class="col-1 text-center border-0" style="position:relative;left:39px;">{{$c->quantity}}</td>
            <td class="col-2 text-right border-0" style="position:relative;left:44px;">{{Cart::session(auth()->id())->get($c->id)->getPriceSum()}}</td>                      
			  @endforeach
			  
		
            
            </tr>
            <tr>
              <td colspan="4" class="bg-light-2 text-right"><strong>Sub Total:</strong></td>
              <td class="bg-light-2 text-right">{{\Cart::session(auth()->id())->getSubTotal()}}</td>
            </tr>
            <tr>
              <td colspan="4" class="bg-light-2 text-right"><strong>Tax Charge:</strong></td>
              <td class="bg-light-2 text-right">0.00</td>
            </tr>
            <tr>
              <td colspan="4" class="bg-light-2 text-right"><strong>Shipping:</strong></td>
              <td class="bg-light-2 text-right">Procure Express Shipping</td>
            </tr>
            <tr>
              <td colspan="4" class="bg-light-2 text-right"><strong>Total:</strong></td>
              <td class="bg-light-2 text-right">{{\Cart::session(auth()->id())->getTotal()}}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  </main>
  {{--<!-- Footer -->
  <!--<footer class="text-center mt-4">

    <div style="height: 170px;
    width: 170px;
    border:1px solid black;">
    <span>Requester Sign Here</span>

    </div>
  <p class="text-1 mt-2"><strong>NOTE :</strong> This approval form requires physical signature. Kindly sign and send copy to sales@procure.com</p>
  <div class="btn-group btn-group-sm d-print-none"> <a href="javascript:window.print()" class="btn btn-light border text-black-50 shadow-none"><i class="fas fa-print"></i> Print</a><a href="{{ route('adownload')}}" class="btn btn-light border text-black-50 shadow-none"><i class="fas fa-download"></i> Download</a></div>
  </footer>
</div>
</body>
</html>--}}







<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="images/favicon.png" rel="icon" />
<title>Flight Booking Invoice - Koice</title>
<meta name="author" content="harnishdesign.net">

<!-- Web Fonts
======================= -->
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900' type='text/css'>

<!-- Stylesheet
======================= -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/new/css/bootstrap.min.css')}}"/>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css"/>
<link rel="stylesheet" type="text/css" href="{{ asset('css/new/css/invoice.css')}}"/>
</head>
<body>
<!-- Container -->
<div class="container-fluid invoice-container">
  <!-- Header -->
  <header>
  <div class="row align-items-center">
    <div class="col-sm-7 text-center text-sm-left mb-3 mb-sm-0">
      <img id="logo" src="images/logo.png" title="Koice" alt="Koice" />
    </div>
    <div class="col-sm-5 text-center text-sm-right">
      <h4 class="text-7 mb-0">Invoice</h4>
    </div>
  </div>
  <hr>
  </header>
  
  <!-- Main Content -->
  <main>
  <div class="row">
    <div class="col-sm-6"><strong>Date:</strong> 05/12/2019</div>
    <div class="col-sm-6 text-sm-right"> <strong>Invoice No:</strong> 16835</div>
	  
  </div>
  <hr>
  <div class="row">
    <div class="col-sm-6 text-sm-right order-sm-1"> <strong>Pay To:</strong>
      <address>
      Koice Inc<br />
      2705 N. Enterprise St<br />
      Orange, CA 92865<br />
	  contact@koiceinc.com
      </address>
    </div>
    <div class="col-sm-6 order-sm-0"> <strong>Invoiced To:</strong>
      <address>
      Smith Rhodes<br />
      15 Hodges Mews, High Wycombe<br />
      HP12 3JL<br />
      United Kingdom
      </address>
    </div>
  </div>  
  <div class="card">
    <div class="card-header px-2 py-0">
      <table class="table mb-0">
        <thead>
          <tr>
            <td class="col-3 border-0"><strong>Service</strong></td>
			<td class="col-4 border-0"><strong>Description</strong></td>
            <td class="col-2 text-center border-0"><strong>Rate</strong></td>
			<td class="col-1 text-center border-0"><strong>QTY</strong></td>
            <td class="col-2 text-right border-0"><strong>Amount</strong></td>
          </tr>
        </thead>
      </table>
    </div>
    <div class="card-body px-2">
      <div class="table-responsive">
        <table class="table">
          <tbody>
            <tr>
              <td class="col-3 border-0">Design</td>
              <td class="col-4 text-1 border-0">Creating a website design</td>
              <td class="col-2 text-center border-0">$50.00</td>
			  <td class="col-1 text-center border-0">10</td>
			  <td class="col-2 text-right border-0">$500.00</td>
            </tr>
            <tr>
              <td>Development</td>
              <td class="text-1">Website Development</td>
              <td class="text-center">$120.00</td>
			  <td class="text-center">10</td>
			  <td class="text-right">$1200.00</td>
            </tr>
			<tr>
              <td>SEO</td>
              <td class="text-1">Optimize the site for search engines (SEO)</td>
              <td class="text-center">$450.00</td>
			  <td class="text-center">1</td>
			  <td class="text-right">$450.00</td>
            </tr>
			
            <tr>
              <td colspan="4" class="bg-light-2 text-right"><strong>Sub Total:</strong></td>
              <td class="bg-light-2 text-right">$2150.00</td>
            </tr>
            <tr>
              <td colspan="4" class="bg-light-2 text-right"><strong>Tax:</strong></td>
              <td class="bg-light-2 text-right">$215.00</td>
            </tr>
            <tr>
              <td colspan="4" class="bg-light-2 text-right"><strong>Total:</strong></td>
              <td class="bg-light-2 text-right">$2365.00</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  </main>
  <!-- Footer -->
  <footer class="text-center mt-4">
  <p class="text-1"><strong>NOTE :</strong> This is computer generated receipt and does not require physical signature.</p>
  <div class="btn-group btn-group-sm d-print-none"> <a href="javascript:window.print()" class="btn btn-light border text-black-50 shadow-none"><i class="fa fa-print"></i> Print</a> <a href="" class="btn btn-light border text-black-50 shadow-none"><i class="fa fa-download"></i> Download</a> </div>
  </footer>
</div>
</body>
</html>