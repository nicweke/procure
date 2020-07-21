
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="images/favicon.png" rel="icon"/>
<title>Order Approval</title>
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
      <img id="logo" src="images/logo.png" title="Koice" alt="Koice" />
    </div>
    <div class="col-sm-5 text-center text-sm-right">
      <h4 class="text-7 mb-0">Request for Approval</h4>
    </div>
  </div>
  <hr>
  </header>
  
  <!-- Main Content -->
  <main>
  <div class="row">
  <div class="col-sm-6"><strong>Date:</strong>&nbsp;{{ date('Y-m-d H:i:s') }}</div>
  <div class="col-sm-6 text-sm-right"> <strong>Request No:</strong>{{$approval->id}}</div>
	  
  </div>
  <hr>
  <div class="row">
    <div class="col-sm-6 text-sm-right order-sm-1"> <strong>Pay To:</strong>
      <address>
      Procure Inc<br />
      Enterprise Street<br />
      Orange, CA 92865<br />
	  contact@procure.co.ke
      </address>
    </div>
    <div class="col-sm-6 order-sm-0"> <strong>Invoiced To:</strong>
      <address>
      {{$approval->fname}}&nbsp;{{$approval->lname}}<br />
      {{$approval->cname}}<br />
      {{$approval->address}}<br />
      {{$approval->city}}
      </address>
    </div>
  </div>  
  <div class="card">
    <div class="card-header px-2 py-0">
      <table class="table mb-0">
        <thead>
          <tr>
            <td class="col-3 border-0 hidden"><strong>Product Description</strong></td>
			<!--<td class="col-4 border-0"><strong>Description</strong></td>-->
            <td class="col-2 text-center border-0"><strong>Unit</strong></td>
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
              @foreach ($cartItems as $item)
              <td class="col-3 border-0 hidden">{{$item->name}}</td>
              <td class="col-4 text-1 border-0" style="display: none">Creating a website design</td>
              <td class="col-2 text-center border-0" style="position:relative;left:39px;">{{$item->price}}</td>
              <td class="col-1 text-center border-0" style="position:relative;left:39px;">{{$item->quantity}}</td>
            <td class="col-2 text-right border-0" style="position:relative;left:44px;">{{Cart::session(auth()->id())->get($item->id)->getPriceSum()}}</td>                      
              @endforeach
            
            </tr>
            <tr>
              <td colspan="4" class="bg-light-2 text-right"><strong>Sub Total:</strong></td>
              <td class="bg-light-2 text-right">{{\Cart::session(auth()->id())->getSubTotal()}}</td>
            </tr>
            <tr>
              <td colspan="4" class="bg-light-2 text-right"><strong>Tax:</strong></td>
              <td class="bg-light-2 text-right">0.00</td>
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
  <!-- Footer -->
  <footer class="text-center mt-4">

    <div style="height: 170px;
    width: 170px;
    border:1px solid black;">
    <span>Requester Sign Here</span>

    </div>
  <p class="text-1 mt-2"><strong>NOTE :</strong> This approval form requires physical signature. Kindly sign and send copy to sales@procure.com</p>
  <div class="btn-group btn-group-sm d-print-none"> <a href="javascript:window.print()" class="btn btn-light border text-black-50 shadow-none"><i class="fas fa-print"></i> Print</a> {{--<a href="{{ route('adownload')}}" class="btn btn-light border text-black-50 shadow-none"><i class="fas fa-download"></i> Download</a>--}}</div>
  </footer>
</div>
</body>
</html>