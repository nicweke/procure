
<!doctype html>
<html>
<head>
<meta charSet="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="robots" content="index, follow" />
<meta property="og:site_name" content="HeptaPay" />
<meta property="fb:app_id" content="1131216847238849" />
<meta property="og:locale" content="en_US" />
<meta property="og:description" content="HeptaPay is an online bill payment application for the East African Region. Use HeptaPay in Rwanda to pay for utilities, to top-up airtime and to load mobile money online via PayPal or Debit or Credit Card." />
<meta property="og:title" content="HeptaPay – Pay Any Mobile Money Phone Number in Rwanda" />
<meta property="og:type" content="website" />
<meta property="og:image" content="https://heptapay.com/static/img/logo_project.png" />
<meta name="twitter:site" content="@heptapay" />
<meta name="twitter:title" content="HeptaPay – Pay Any Mobile Money Phone Number in Rwanda" />
<meta name="twitter:description" content="HeptaPay is an online bill payment application for the East African Region. Use HeptaPay in Rwanda to pay for utilities, to top-up airtime and to load mobile money online via PayPal or Debit or Credit Card." />
<meta name="twitter:image:src" content="https://heptapay.com/static/img/logo_project.png" />
<title>Procure – Pay via Mpesa </title>
<link rel="shortcut icon" type="image/x-icon" href="/static/img/favicon.ico">
<link href="/css/homepage.css" media="screen, projection" rel="stylesheet" type="text/css" />
<link href="/css/hp-custom.css" media="screen, projection" rel="stylesheet" type="text/css" />
<link href="/css/hp.css" media="screen, projection" rel="stylesheet" type="text/css" />

<!--<script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '462914274395043');
        fbq('track', 'PageView');
    </script>
<noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=462914274395043&ev=PageView&noscript=1"
    /></noscript>-->

</head>





<body>
<div id="app">
<div class="tw-homepage-container">
<header class="navbar navbar--inverse navbar-static-top  tw-new-public-navigation">
<div class="container">
<div class="tw-public-navigation-menu__header pull-md-left">
<button class="tw-public-navigation-menu__menu-toggle visible-xs visible-sm  collapsed" aria-controls="navbar" aria-expanded="true" type="button">
<div><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></div>
</button>
<div class="pull-xs-left tw-public-navigation__logo ">
    <h3 class="logo-text logo logo-text-inverse" style="color: #fff">Procure</h3>
</div>
<div class="pull-xs-left tw-public-navigation__logo ">
<a href="/" class="logo-text logo-text-inverse visible-xs-block visible-sm-block">
<span class="sr-only">Procure</span>
</a>

<a href="/" class="navbar-brand hidden-xs hidden-sm hidden-md m-b-1 hidden">HeptaPay</a>
<a href="/" class="fast-flag flag-info visible-md-block">
<span class="sr-only">HeptaPay</span>
</a>
</div>
<div class="pull-right visible-xs visible-sm tw-public-navigation-menu__buttons">
<li class="navbar-btn m-b-1 hidden"><a href="/rw/signup" class="btn btn-default">Sign Up</a></li>
 </div>
</div>
<nav id="navbar" class="tw-public-navigation-menu navbar-collapse navbar-collapse-with-panel collapse">
<div class="tw-public-navigation-menu__sidebar navbar-collapse-panel">
<div class="tw-public-navigation-menu__header pull-md-left">
<button class="tw-public-navigation-menu__menu-toggle visible-xs visible-sm  collapsed" aria-controls="navbar" aria-expanded="false" type="button">×</button>
<div class="pull-xs-left tw-public-navigation__logo hidden-md hidden-lg hidden-xl"><a href="/" class="logo-text logo-text-inverse visible-xs-block visible-sm-block"><span class="sr-only">HeptaPay</span></a><a href="/" class="navbar-brand hidden-xs hidden-sm hidden-md m-b-1">HeptaPay</a><a href="/" class="fast-flag flag-info visible-md-block"><span class="sr-only">HeptaPay</span></a></div>
</div>
<ul class="nav navbar-nav navbar-right">
<li class="navbar-btn m-b-1 hidden"><a href="/rw/pages/how-it-works" class="btn btn-link">How it Works</a></li>
<li class="navbar-btn m-b-1"><a href="/rw/pages/help" class="btn btn-link hidden">Help</a></li>
<li class="navbar-btn m-b-1"><a href="/rw/pay" class="btn btn-link hidden">Pay</a></li>
<li class="dropdown hidden-md tw-public-navigation-menu__language-selector" tabindex="-1">





</div>
</nav>
</div>
</header>
<div class="navbar-push-container">
<main class="jumbotron bg-primary tw-new-hero">
&nbsp;
</main>
</div>



<div class="bg-default">
    <div class="wrapper" style="text-align: center; padding-top:30px;">
        <div style="display: inline-block">
            <h2>Pay via Mpesa</h2>

        </div>

    </div>
    
<div class="inner-container center-block p-t-section-1 p-b-section-2">
<div class="row">
<div class="col-lg-2 col-xs-12">&nbsp;</div>
<div class="col-lg-8 col-xs-12">

    
        
            
                <!-- Floating Labels -->
                <div class="block">
                    <div >
                        @if(app('request')->query('method', 'mpesac2b') == 'mpesac2b')
                        <ol>
                            <li>Enter the Kenya Power business number <b>{{\App\Setting::one('shortcode', '123456', 'mpesa')}}</b></li>
                            <li>Enter account number <b>{{$payment->account}}</b></li>
                            <li>Enter the amount <b>{{$payment->amount}}</b></li>
                            <li>Enter your M-Pesa PIN.</li>
                            <li>Confirm that all details are correct before sending</li>
                            <li>You will receive a confirmation of the transaction via SMS</li>
                            <li>Click the button below to validate the transaction</li>
                        </ul>
                        <br>
                        <a href="{{url('payments/validate/'.$payment->id)}}" class="btn btn-alt-primary btn-lg">Validate Payment</a>
                        @elseif(app('request')->query('method', 'mpesastk') == 'mpesastk')
                            <form action="{{url('mpesa/pay')}}" method="post">
                                <div class="d-none">
                                    @csrf
                                </div>
    
    
    

                                <div class="tw-calculator">
                                    <div data-tracking-id="calculator">
                                    <div>&nbsp;</div>
                                <div class="row">
                                    <div id="loader"></div>
                                    <div class="col-lg-12 col-xs-12">
                                    <div class="form-group form-group-lg m-b-0" id="rcpPhnDiv">
                                    <label class="control-label" for="tw-calculator-source">Enter phone number</label>
                                    <div class="tw-money-input input-group input-group-lg">
                                            <input type="text" class="form-control" id="phone" name="phone" placeholder="2547xxxxxxxx" >
                                            </div>    
                                        </div>
                                        <div class="spacer">&nbsp;</div>
                                    </div>
                                    </div>
    
                                
    
    
                                    <div class="row">
                                        <div class="col-lg-6 col-xs-12">
                                        <div class="form-group form-group-lg m-b-0" id="rcvAmntDiv">
                                        <label class="control-label" for="tw-calculator-source">Account Reference</label>
                                        <div class="tw-money-input  input-group-lg">
                                        <input type="text" class="form-control" id="receivedAmount" name="account" value="{{$orders->order_number}}">
                                        <span class="input-group-btn amount-currency-select-btn" style="min-width: 100px !important;">
                                        </span>
                                        </div>
                                        </div>
                                        <div>&nbsp;</div>
                                        </div>
                                        <div class="col-lg-6 col-xs-12">
                                        <div class="form-group form-group-lg m-b-0" id="sndAmntDiv">
                                        <label class="control-label" for="tw-calculator-source">Amount to be paid</label>
                                        <div class="tw-money-input  input-group-lg">
                                        <input type="text" class="form-control" id="sendAmount" name="amount" value="10">
                                        <span class="input-group-btn amount-currency-select-btn" style="min-width: 100px !important;">
                                        </span>
                                        </div>
                                        </div>
                                        <div>&nbsp;</div>
                                        </div>
                                    </div>                               
                                  
    
                     
    
                            <div class="row">
                                <div class="col-lg-12 col-xs-12">
                                <div class="form-group form-group-lg m-b-0" id="rcpPhnDiv">
                                <label class="control-label" for="tw-calculator-source"> Transaction Description (Optional note)</label>
                                <div class="tw-money-input  input-group-lg">
                                <textarea name="remarks" id="note" placeholder="E.g Payment for meter" class="form-control" style="height: 100px; font-size: 14px;"></textarea>
                                </div>
                                </div>
                                <div class="spacer">&nbsp;</div>
                                </div>
                                </div>
                                <div class="row" >
                                <div class="col-lg-12 col-xs-12">
                                <div class="form-group form-group-lg m-b-0" id="rcpPhnDiv">
                                <label class="control-label" for="tw-calculator-source"> Transaction Remarks (Optional note)</label>
                                <div class="tw-money-input input-group-lg">
                                <textarea name="remarks" id="note" placeholder="" class="form-control" style="height: 100px; font-size: 14px;"></textarea>
                                </div>
                                </div>
                                <div class="spacer">&nbsp;</div>
                                </div>
                                </div>
    
                            
    
                                <div class="form-group row mt-3">
                                    
                                        <button type="submit" class="btn btn-primary btn-block btn-lg">Pay Now</button>
                                    
                                </div>
                            </form>
                        @else
                            <form action="be_forms_elements_material.html" method="post">
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <div class="form-material floating">
                                            <input type="text" class="form-control" id="material-text2" name="material-text2">
                                            <label for="material-text2">Username</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <div class="form-material floating">
                                            <input type="password" class="form-control" id="material-password2" name="material-password2">
                                            <label for="material-password2">Password</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <div class="form-material floating">
                                            <input type="email" class="form-control" id="material-email2" name="material-email2">
                                            <label for="material-email2">Email</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-6">
                                        <div class="form-material floating">
                                            <input type="text" class="form-control" id="material-gridf2" name="material-gridf2">
                                            <label for="material-gridf2">Grid Input</label>
                                        </div>
                                    </div>
                                    <div class="col-6 row">
                                        <div class="form-material floating">
                                            <input type="text" class="form-control" id="material-gridl2" name="material-gridl2">
                                            <label for="material-gridl2">Grid Input</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <div class="form-material floating">
                                            <textarea class="form-control" id="material-textarea-small2" name="material-textarea-small2" rows="3"></textarea>
                                            <label for="material-textarea-small2">Textarea Small</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <div class="form-material floating">
                                            <textarea class="form-control" id="material-textarea-large2" name="material-textarea-large2" rows="8"></textarea>
                                            <label for="material-textarea-large2">Textarea Large</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <!-- For a small sized input you will also have to add .form-material-sm along with .floating class -->
                                        <div class="form-material form-material-sm floating">
                                            <input type="text" class="form-control form-control-sm" id="material-input-size-sm2" name="material-input-size-sm2">
                                            <label for="material-input-size-sm2">Small Input Size</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <div class="form-material floating">
                                            <input type="text" class="form-control" id="material-input-size-normal2" name="material-input-size-normal2">
                                            <label for="material-input-size-normal2">Normal Input Size</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <!-- For a large sized input you will also have to add .form-material-lg along with .floating class -->
                                        <div class="form-material form-material-lg floating">
                                            <input type="text" class="form-control form-control-lg" id="material-input-size-lg2" name="material-input-size-lg2">
                                            <label for="material-input-size-lg2">Large Input Size</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <div class="form-material form-material-primary floating">
                                            <input type="text" class="form-control" id="material-color-primary2" name="material-color-primary2">
                                            <label for="material-color-primary2">Primary Color (On focus)</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <div class="form-material form-material-success floating">
                                            <input type="text" class="form-control" id="material-color-success2" name="material-color-success2">
                                            <label for="material-color-success2">Success Color (On focus)</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <div class="form-material form-material-info floating">
                                            <input type="text" class="form-control" id="material-color-info2" name="material-color-info2">
                                            <label for="material-color-info2">Info Color (On focus)</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <div class="form-material form-material-warning floating">
                                            <input type="text" class="form-control" id="material-color-warning2" name="material-color-warning2">
                                            <label for="material-color-warning2">Warning Color (On focus)</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <div class="form-material form-material-danger floating">
                                            <input type="text" class="form-control" id="material-color-danger2" name="material-color-danger2">
                                            <label for="material-color-danger2">Danger Color (On focus)</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row is-valid">
                                    <div class="col-md-9">
                                        <div class="form-material floating">
                                            <input type="text" class="form-control" id="material-valid2" name="material-valid2">
                                            <label for="material-valid2">Valid</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row is-invalid">
                                    <div class="col-md-9">
                                        <div class="form-material floating">
                                            <input type="text" class="form-control" id="material-invalid2" name="material-invalid2">
                                            <label for="material-invalid2">Invalid</label>
                                        </div>
                                        <div class="invalid-feedback">Invalid feedback</div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <div class="form-material floating">
                                            <input type="text" class="form-control" id="material-help2" name="material-help2">
                                            <label for="material-help2">With Help</label>
                                            <div class="form-text text-muted text-right">This is some help text!</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <div class="form-material floating input-group">
                                            <input type="text" class="form-control" id="material-addon-text2" name="material-addon-text2">
                                            <label for="material-addon-text2">Text Addon</label>
                                            <span class="input-group-addon">.example.com</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <div class="form-material floating input-group">
                                            <input type="text" class="form-control" id="material-addon-icon2" name="material-addon-icon2">
                                            <label for="material-addon-icon2">Icon Addon</label>
                                            <span class="input-group-addon">
                                                <i class="fa fa-fw fa-user"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <div class="form-material floating">
                                            <input type="text" class="form-control" id="material-disabled2" name="material-disabled2" disabled>
                                            <label for="material-disabled2">Disabled</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <div class="form-material floating">
                                            <select class="form-control" id="material-select2" name="material-select2">
                                                <option></option><!-- Empty value for demostrating material select box -->
                                                <option value="1">Option #1</option>
                                                <option value="2">Option #2</option>
                                                <option value="3">Option #3</option>
                                            </select>
                                            <label for="material-select2">Please Select</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-9">
                                        <button type="submit" class="btn btn-alt-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        @endif
                    </div>
                </div>
                <!-- END Floating Labels -->
            
        

    </div>
</div>
</div>
<div class="col-lg-2 col-xs-12">&nbsp;</div>
</div>
</div>
</div>
    
        
    







<footer class="footer p-y-section-5 footer-inverse hidden">
<div class="container">
<div class="row">
<div class="col-md-3 text-xs-center text-md-left">
<h5 class="footer-title m-b-2">Company</h5>
<ul class="list-unstyled">
<li><a class="footer-link" target="_blank" href="https://www.heptanalytics.com/work">About</a></li>
</ul>
</div>
<div class="col-md-3 text-xs-center text-md-left hidden">
<h5 class="footer-title m-b-2">Help and Support</h5>
<ul class="list-unstyled">
<li><a class="footer-link" href="/rw/pages/help">Help Centre</a></li>
<li><a target="_blank" class="footer-link" href="https://wa.me/254722507332">WhatsApp Chat: +254722507332</a></li>
<li style="color: #fff;">Email: <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="186b6d6868776a6c58707d686c79687961367b7775">[email&#160;protected]</a></li>
</ul>
</div>
<div class="col-md-3 text-xs-center text-md-left hidden">
<h5 class="footer-title m-b-2">Legal</h5>
<ul class="list-unstyled">
<li><a class="footer-link" href="/rw/pages/terms">Terms of Use</a></li>
<li><a class="footer-link" href="/rw/pages/terms">Privacy Policy</a></li>
</ul>
</div>
<div class="col-md-3 text-xs-center text-md-left hidden">
<h5 class="footer-title m-b-2">We are social</h5>
<ul class="list-unstyled">
<li>
<a href="https://facebook.com/heptapay" class="link-icon" target="_blank" rel="noopener noreferrer">
<span class="tw-icon " aria-hidden="true" role="presentation"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.9 2H3.1a1.07 1.07 0 0 0-.43.09 1 1 0 0 0-.58.58A1.07 1.07 0 0 0 2 3.1v17.8a1.07 1.07 0 0 0 .09.43 1 1 0 0 0 .58.58 1.07 1.07 0 0 0 .43.09h9.58v-7.75h-2.6v-3h2.6V9A4.71 4.71 0 0 1 13 7.3a3.3 3.3 0 0 1 2-2 4.62 4.62 0 0 1 1.56-.3H18.89v2.7H17.3a2.33 2.33 0 0 0-.77.11 1 1 0 0 0-.45.3 1 1 0 0 0-.22.46 2.26 2.26 0 0 0-.06.6v1.93h3l-.1.75-.1.76-.09.75-.1.75H15.8V22h5.1a1.07 1.07 0 0 0 .43-.09 1 1 0 0 0 .58-.58 1.07 1.07 0 0 0 .09-.43V3.1a1.07 1.07 0 0 0-.09-.43 1 1 0 0 0-.58-.58A1.07 1.07 0 0 0 20.9 2z"></path></svg>
</span>
</a>
<a href="https://twitter.com/heptapay" class="link-icon" target="_blank" rel="noopener noreferrer">
<span class="tw-icon " aria-hidden="true" role="presentation"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M23 5.18a9 9 0 0 1-2.59.71 4.52 4.52 0 0 0 2-2.5 9.18 9.18 0 0 1-2.86 1.1 4.51 4.51 0 0 0-7.81 3.08 4.93 4.93 0 0 0 .11 1 12.82 12.82 0 0 1-9.3-4.71 4.45 4.45 0 0 0-.61 2.27 4.51 4.51 0 0 0 2 3.75 4.45 4.45 0 0 1-2.05-.56v.08a4.52 4.52 0 0 0 3.61 4.43 4.54 4.54 0 0 1-1.18.17 4.63 4.63 0 0 1-.85-.08A4.5 4.5 0 0 0 7.68 17a9 9 0 0 1-5.6 2A9.51 9.51 0 0 1 1 18.91a12.79 12.79 0 0 0 6.92 2A12.76 12.76 0 0 0 20.76 8.1v-.59A9.23 9.23 0 0 0 23 5.18z"></path></svg>
</span>
</a>
</li>
</ul>
</div>
</div>
<hr class="m-t-0" />
<div class="row text-xs-center m-t-5">
<div class="col-xs-12 col-md-8 col-md-offset-2">
<p class=""><span>© Procure </span>2020</p>
</div>
</div>
</div>
</footer>
</div>
</div>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="/static/frontend-assets/toggler.js"></script>
<script type="text/javascript" src="/static/js/snackbar.min.js"></script>


<script src="/static/js/fees.earemit.js"></script>

<script src="/static/js/pay.paypal.hp.js"></script>
@include('sweetalert::alert')
</body>


</html>















