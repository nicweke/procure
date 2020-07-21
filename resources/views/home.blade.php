@extends('layouts.front')

@section('content')




{{--<div class="ps-site-features">
    <div class="ps-container">
        <div class="ps-block--site-features" style="border: none;">
            <div class="ps-block__item">
                <div class="ps-block__left"><a href="{{route('products.index', ['category_id' => $categories->id])}}"><?xml version="1.0"?>
                    <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 512 512" width="70" height="70"><path d="M337.164,284.683H318.525a6,6,0,0,0,0,12h18.639a6,6,0,0,0,0-12Z"/><path d="M427.5,258.2H274.271V83.269a35.154,35.154,0,0,1,70.307,0v36.2H341.6a6,6,0,0,0-6,6v22a6,6,0,0,0,6,6h44.894a6,6,0,0,0,6-6v-22a6,6,0,0,0-6-6h-2.979v-36.2a74.09,74.09,0,1,0-148.18,0v95.272H205.417a6,6,0,0,0-6,6v5.194H176.4V171.072a6,6,0,0,0-12,0v73.819a6,6,0,1,0,12,0V226.875h23.016v4.548a6,6,0,0,0,6,6h29.918V258.2H84.5a19.229,19.229,0,0,0-1.283,38.416v22.47a81.544,81.544,0,0,0,81.451,81.451h30.562v18.117a16.018,16.018,0,0,0,16,16h3.9v27.3a40.868,40.868,0,1,0,81.736,0v-27.3h3.9a16.018,16.018,0,0,0,16-16V400.539H347.33a81.544,81.544,0,0,0,81.451-81.451v-22.47A19.229,19.229,0,0,0,427.5,258.2ZM199.417,214.875H176.4v-13.14h23.016Zm181.077-73.407H347.6v-10h32.894Zm-133.159-58.2a62.09,62.09,0,1,1,124.18,0v36.2H356.578v-36.2a47.154,47.154,0,0,0-94.307,0V258.2H247.335ZM211.417,225.423V190.541h23.918v34.882Zm-.185,197.233a4,4,0,0,1-4-4V400.539h23.915v22.117Zm73.636,39.3a28.868,28.868,0,1,1-57.736,0v-27.3h57.736Zm-41.721-39.3V400.539h25.706v22.117Zm61.622-4a4,4,0,0,1-4,4H280.853V400.539h23.916ZM427.5,284.683H357.73a6,6,0,0,0,0,12h59.051v22.405a69.53,69.53,0,0,1-69.451,69.451H164.67a69.53,69.53,0,0,1-69.451-69.451V296.683H298.6a6,6,0,0,0,0-12H84.5a7.241,7.241,0,1,1,0-14.481h343a7.241,7.241,0,0,1,0,14.481Z"/></svg></a>
                    </div>
               <div class="ps-block__right">
                    <h4>{{$categories->name}}</h4>
                     <!--<p>For all oders over $99</p>-->
                </div>
            </div>
            <div class="ps-block__item">
                <div class="ps-block__left"><a href="{{route('products.index', ['category_id' => $categories->id])}}"><?xml version="1.0"?>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="70" height="70"><g id="outline"><path d="M256,238.72a26.56,26.56,0,1,0,26.56,26.56A26.59,26.59,0,0,0,256,238.72Zm0,37.12a10.56,10.56,0,1,1,10.56-10.56A10.572,10.572,0,0,1,256,275.84Z"/><path d="M326.4,241.3l-14.436-25a8,8,0,0,0-8.532-3.838l-16.225,3.321q-1.927-1.216-3.949-2.284l-5.236-15.707a8,8,0,0,0-7.589-5.47H241.564a8,8,0,0,0-7.589,5.47L228.739,213.5q-2.018,1.065-3.949,2.284l-16.225-3.321a8,8,0,0,0-8.532,3.838l-14.436,25a8,8,0,0,0,.943,9.307l10.981,12.383q-.045,1.149-.045,2.288c0,.759.015,1.523.045,2.287L186.54,279.95a8,8,0,0,0-.943,9.308l14.436,25a8,8,0,0,0,8.532,3.838l16.225-3.322q1.927,1.218,3.949,2.284l5.236,15.709a8,8,0,0,0,7.589,5.469h28.872a8,8,0,0,0,7.589-5.469l5.236-15.709q2.017-1.063,3.949-2.284l16.225,3.322a8,8,0,0,0,8.532-3.838l14.436-25a8,8,0,0,0-.943-9.308l-10.981-12.383c.03-.764.045-1.528.045-2.287s-.015-1.522-.045-2.288l10.981-12.383A8,8,0,0,0,326.4,241.3ZM298.309,260.99c.143,1.426.215,2.869.215,4.29s-.072,2.864-.215,4.29a8,8,0,0,0,1.975,6.105l9.38,10.577-8.67,15.016-13.865-2.838a8,8,0,0,0-6.286,1.351,42.524,42.524,0,0,1-7.4,4.278,8,8,0,0,0-4.3,4.763l-4.473,13.418H247.331l-4.473-13.418a8,8,0,0,0-4.3-4.763,42.524,42.524,0,0,1-7.4-4.278,8.014,8.014,0,0,0-6.286-1.351l-13.865,2.838-8.67-15.016,9.38-10.577a8,8,0,0,0,1.975-6.105c-.143-1.426-.215-2.87-.215-4.29s.072-2.864.215-4.29a8,8,0,0,0-1.975-6.1l-9.38-10.577,8.67-15.017,13.865,2.838a8.009,8.009,0,0,0,6.286-1.352,42.519,42.519,0,0,1,7.4-4.277,8,8,0,0,0,4.3-4.764l4.473-13.417h17.338l4.473,13.417a8,8,0,0,0,4.3,4.764,42.519,42.519,0,0,1,7.4,4.277,8.007,8.007,0,0,0,6.286,1.352l13.865-2.838,8.67,15.017-9.38,10.577A8,8,0,0,0,298.309,260.99Z"/><path d="M372.41,221.536q-.421-1.657-.892-3.306l-1.361-4.762a118.725,118.725,0,0,0-228.314,0l-1.361,4.762q-.471,1.649-.892,3.3c-8.882,34.855-.409,72.893,22.665,101.751l7.922,9.907A166.272,166.272,0,0,1,201.6,396.236v18.8h-1.28a8,8,0,0,0,0,16h1.28V441.6a54.373,54.373,0,0,0,1.038,10.56H200.32a8,8,0,0,0,0,16h8.231A54.381,54.381,0,0,0,309.807,449.6h1.873a8,8,0,0,0,0-16H310.4V396.236a166.246,166.246,0,0,1,31.423-63.044l7.921-9.908C372.819,294.426,381.292,256.388,372.41,221.536ZM283.84,433.6a8,8,0,0,0,0,16h9.716a38.366,38.366,0,0,1-65.249,18.56H256a8,8,0,0,0,0-16H219.089A38.244,38.244,0,0,1,217.6,441.6V431.04h29.12a8,8,0,0,0,0-16H217.6V403.2h76.8v30.4Zm53.408-120.308-7.922,9.908a182.021,182.021,0,0,0-33.064,64H215.738a182.02,182.02,0,0,0-33.065-64l-7.921-9.907c-19.959-24.962-27.307-57.787-19.656-87.811q.364-1.432.771-2.856l1.361-4.761a102.724,102.724,0,0,1,197.544,0l1.361,4.761q.406,1.425.772,2.86C364.555,255.505,357.207,288.33,337.248,313.292Z"/><path d="M183.031,36.642A8,8,0,0,0,177.842,46.7l11.285,35.364a8,8,0,0,0,15.243-4.866L193.084,41.83A8,8,0,0,0,183.031,36.642Z"/><path d="M103.676,143.462,73.759,121.487a8,8,0,1,0-9.471,12.9L94.2,156.356a8,8,0,1,0,9.472-12.894Z"/><path d="M61.081,272.261h.043a8,8,0,0,0,.04-16l-37.12-.194H24a8,8,0,0,0-.041,16Z"/><path d="M93.074,372.505,62.929,394.166a8,8,0,1,0,9.337,12.994L102.411,385.5a8,8,0,0,0-9.337-12.994Z"/><path d="M447.712,396.179,417.8,374.2a8,8,0,0,0-9.472,12.9l29.917,21.975a8,8,0,1,0,9.471-12.894Z"/><path d="M488.039,258.493l-37.12-.194h-.043a8,8,0,0,0-.041,16l37.12.194H488a8,8,0,0,0,.041-16Z"/><path d="M450.9,125.229a8,8,0,0,0-11.165-1.829l-30.145,21.662a8,8,0,1,0,9.337,12.994L449.071,136.4A8,8,0,0,0,450.9,125.229Z"/><path d="M314.678,87.852a7.994,7.994,0,0,0,10.107-5.084L336.44,47.524A8,8,0,1,0,321.25,42.5L309.594,77.744A8,8,0,0,0,314.678,87.852Z"/><path d="M256,16a8,8,0,0,0-8,8V79.68a8,8,0,0,0,16,0V24A8,8,0,0,0,256,16Z"/><path d="M140.435,119.828a8,8,0,1,0,12.944-9.4L120.651,65.378a8,8,0,0,0-12.944,9.4Z"/><path d="M18.921,188.249a8,8,0,0,0,5.136,10.08l52.955,17.206a8,8,0,0,0,4.944-15.217L29,183.112A8,8,0,0,0,18.921,188.249Z"/><path d="M87.092,320.162a8,8,0,0,0-10.08-5.137L24.057,332.231A8,8,0,1,0,29,347.448l52.955-17.206A8,8,0,0,0,87.092,320.162Z"/><path d="M151.609,408.962a8,8,0,0,0-11.174,1.769l-32.728,45.046a8,8,0,1,0,12.944,9.405l32.728-45.046A8,8,0,0,0,151.609,408.962Z"/><path d="M371.565,410.731a8,8,0,0,0-12.944,9.405l32.728,45.046a8,8,0,0,0,12.944-9.405Z"/><path d="M487.943,332.231l-52.955-17.206a8,8,0,0,0-4.944,15.217L483,347.448a8,8,0,0,0,4.944-15.217Z"/><path d="M432.515,215.929a7.99,7.99,0,0,0,2.473-.394l52.955-17.206A8,8,0,0,0,483,183.112l-52.955,17.206a8,8,0,0,0,2.471,15.611Z"/><path d="M391.349,65.378l-32.728,45.046a8,8,0,1,0,12.944,9.4l32.728-45.046a8,8,0,0,0-12.944-9.4Z"/></g></svg>
                </a></div>
                <div class="ps-block__right">
                    <h4>{{$categories->name}}</h4>
                    <!--<p>If goods have problems</p>-->
                </div>
            </div>
            <div class="ps-block__item">
                <div class="ps-block__left"><a href="{{route('products.index', ['category_id' => $$categories->id])}}"> <svg id="Layer_5" enable-background="new 0 0 64 64" height="70" viewBox="0 0 64 64" width="70" xmlns="http://www.w3.org/2000/svg"><g><path d="m20 15c0-.552-.448-1-1-1h-2c-.552 0-1 .448-1 1v1h-12c-1.105 0-2 .895-2 2s.895 2 2 2h12v1c0 .552.448 1 1 1h2c.552 0 1-.448 1-1v-1h5v-4h-5z"/><path d="m39 6h7v3h8v-3h1c.552 0 1-.448 1-1v-2c0-.552-.448-1-1-1h-16c-.552 0-1 .448-1 1v2c0 .552.448 1 1 1z"/><path d="m31 61c-.552 0-1-.449-1-1s.448-1 1-1h20c1.654 0 3-1.346 3-3v-2.188c.59-.29 1-.891 1-1.593 0-.146-.018-.291-.053-.432l-.604-2.417c-.081.024-.158.057-.242.076l-4.188.931.706 2.354c.194.645.737 1.094 1.381 1.216v2.053c0 .551-.448 1-1 1h-20c-1.654 0-3 1.346-3 3s1.346 3 3 3h32v-2z"/><path d="m33 11h2v14h-2z"/><path d="m51 15.382v-4.382h-14v6h10.764zm-10-.382h-2v-2h2zm4 0h-2v-2h2zm2-2h2v2h-2z"/><path d="m31 25v-14h-1c-1.654 0-3 1.346-3 3v8c0 1.654 1.346 3 3 3z"/><path d="m42.169 25.301 4.009-6.301h-9.178v6h3.586c.551 0 1.083.109 1.583.301z"/><path d="m53 11v5.618l-4.305 2.152-4.875 7.66c.755.818 1.18 1.865 1.18 2.984v15.586h1.604c.197 0 .396-.02.589-.058l3.807-.762v-14.18c0-2.677 2.12-4.852 4.767-4.976l.353-.118c2.919-.973 4.88-3.693 4.88-6.77 0-3.935-3.201-7.136-7.136-7.136z"/><path d="m41 34v4c0 .551.448 1 1 1h1v-6h-1c-.552 0-1 .449-1 1z"/><path d="m53 44.18c0 .95-.676 1.775-1.607 1.961l-3.808.762c-.322.064-.652.097-.981.097h-1.604v.297c0 1.063 1.035 1.891 2.073 1.663l6.593-1.465c.785-.176 1.334-.859 1.334-1.663v-18.648c-1.161.414-2 1.514-2 2.816z"/></g></svg></a></div>
                <div class="ps-block__right">
                    <h4>{{$categories->name}}</h4>
                    <!--<p>100% secure payment</p>-->
                </div>
            </div>
            <div class="ps-block__item">
                <div class="ps-block__left"><a href="{{route('products.index', ['category_id' => $categories->id])}}"><svg id="Capa_1" enable-background="new 0 0 512 512" height="70" viewBox="0 0 512 512" width="70" xmlns="http://www.w3.org/2000/svg"><g><path d="m250.584 148.302c1.151-8.654 1.151-17.307 0-25.961l36.61-20.016-34.903-63.839-36.607 20.014c-8.373-7.057-17.916-12.759-28.296-16.795v-41.705h-72.758v41.705c-10.38 4.037-19.923 9.738-28.297 16.795l-36.606-20.014-34.903 63.839 36.61 20.016c-1.151 8.654-1.151 17.307 0 25.961l-36.61 20.016 34.903 63.839 36.607-20.015c8.373 7.057 17.917 12.758 28.297 16.795v41.705h72.757v-41.705c10.38-4.037 19.923-9.738 28.296-16.795l36.607 20.015 34.903-63.839zm-99.575 24.044c-20.448 0-37.025-16.577-37.025-37.025s16.577-37.025 37.025-37.025 37.025 16.577 37.025 37.025c0 20.449-16.576 37.025-37.025 37.025z"/><path d="m166.118 378.541 20.953-20.952-21.213-21.213-20.953 20.952c-6.592-4.196-13.939-7.298-21.794-9.054v-29.605h-30v29.605c-7.855 1.756-15.202 4.858-21.794 9.054l-20.953-20.952-21.213 21.213 20.953 20.953c-4.196 6.592-7.298 13.939-9.054 21.793h-29.604v30h29.605c1.756 7.854 4.858 15.201 9.054 21.793l-20.953 20.953 21.213 21.213 20.953-20.953c6.592 4.196 13.939 7.298 21.794 9.054v29.605h30v-29.605c7.854-1.756 15.202-4.858 21.793-9.054l20.953 20.953 21.213-21.213-20.953-20.953c4.196-6.592 7.298-13.939 9.054-21.793h29.605v-30h-29.605c-1.756-7.855-4.858-15.202-9.054-21.794zm-58.007 75.522c-21.355 0-38.729-17.374-38.729-38.729s17.374-38.729 38.729-38.729 38.729 17.374 38.729 38.729-17.373 38.729-38.729 38.729z"/><path d="m484.164 342.22v-32.779l-28.388-16.39-16.39-28.388h-32.779l-28.388-16.39-28.388 16.39h-32.779l-16.39 28.388-28.388 16.39v32.779l-16.39 28.388 16.39 28.388v32.779l28.388 16.39 16.39 28.388h32.779l28.388 16.39 28.388-16.39h32.779l16.39-28.388 28.388-16.39v-32.779l16.39-28.388zm-105.944 59.293c-17.069 0-30.905-13.837-30.905-30.905s13.837-30.906 30.905-30.906 30.905 13.837 30.905 30.906-13.836 30.905-30.905 30.905z"/></g></svg></a></div>
                <div class="ps-block__right">
                    <h4>{{$categories->name}}</h4>
                    <!--<p>Dedicated support</p>-->
                </div>
            </div>
            <!--<div class="ps-block__item">
                <div class="ps-block__left"><i class="fas fa-gift"></i></div>
                <div class="ps-block__right">
                    <h4>Gift Service</h4>
                    <p>Support gift service</p>
                </div>
            </div>-->
        </div>
    </div>
</div>--}}





<div id="homepage-1">
    <div class="ps-home-banner ps-home-banner--1" style="padding-top: 0px;">
        <div class="ps-container">
            <div {{--class="ps-section__left"--}}>
                <div class="ps-carousel--nav-inside owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" {{--data-owl-nav="true"--}} data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on" style="height:370px;border-radius:7px;">
                    <?php use App\Banner; ?>
                    <?php $banners = Banner::get(); ?>
                    @foreach ($banners as $banner)
                <div class="ps-banner"><a href="{{$banner->link}}"><img src="{{asset('storage/'.$banner->image)}}" alt=""></a></div>     
                    @endforeach
                    {{--<div class="ps-banner"><a href="#"><img src="{{asset('images/new/pro/slide-1.jpg')}}" alt=""></a></div>
                    <div class="ps-banner"><a href="#"><img src="{{asset('images/new/banners/banner1.png')}}" alt=""></a></div>
                    <div class="ps-banner"><a href="#"><img src="{{asset('images/new/pro/slide-3.jpg')}}" alt=""></a></div>--}}
                    
                </div>
            </div>
            {{--<div class="ps-section__right"><a class="ps-collection" href="#"><img src="{{asset('images/new/pro/promotion-1.jpg')}}" alt=""></a>
                <a class="ps-collection" href="#"><img src="{{asset('images/new/pro/promotion-2.jpg')}}" alt=""></a></div>--}}
        </div>
    </div>



    <div class="ps-site-features">
        <div class="ps-container">
            <div class="ps-block--site-features">
                <div class="ps-block__item">
                    <div class="ps-block__left" style="position: relative;left: 35px;"><i class="fas fa-rocket"></i></div>
                    <div class="ps-block__right">
                        <h4>Fast Delivery</h4>
                        <p>Faster order fulfilment</p>
                    </div>
                </div>
                <!--<div class="ps-block__item">
                    <div class="ps-block__left"><i class="fas fa-sync"></i></div>
                    <div class="ps-block__right">
                        <h4>90 Days Return</h4>
                        <p>If goods have problems</p>
                    </div>
                </div>-->
                <div class="ps-block__item">
                    <div class="ps-block__left" style="position: relative;left: 35px;"><i class="far fa-credit-card"></i></div>
                    <div class="ps-block__right">
                        <h4>Secure Payment</h4>
                        <p>100% secure payment</p>
                    </div>
                </div>
                <div class="ps-block__item">
                    <div class="ps-block__left" style="position: relative;left: 35px;"><i class="far fa-comments"></i></div>
                    <div class="ps-block__right">
                        <h4>24/7 Support</h4>
                        <p>Dedicated support</p>
                    </div>
                </div>
                <!--<div class="ps-block__item">
                    <div class="ps-block__left"><i class="fas fa-gift"></i></div>
                    <div class="ps-block__right">
                        <h4>Gift Service</h4>
                        <p>Support gift service</p>
                    </div>
                </div>-->
            </div>
        </div>
    </div>











    

    


    

    









    <!--<div class="ps-deal-of-day">
        <div class="ps-container">
            <div class="ps-section__header">
                <div class="ps-block--countdown-deal">
                    <div class="ps-block__left">
                        <h3>Deals of the day</h3>
                    </div>
                    <div class="ps-block__right">
                        <figure>
                            <figcaption>End in:</figcaption>
                            <ul class="ps-countdown" data-time="July 21, 2020 15:37:25">
                                <li><span class="days"></span></li>
                                <li><span class="hours"></span></li>
                                <li><span class="minutes"></span></li>
                                <li><span class="seconds"></span></li>
                            </ul>
                        </figure>
                    </div>
                </div><a href="#">View all</a>
            </div>
            <div class="ps-section__content">
                <div class="ps-carousel--nav owl-slider" data-owl-auto="false" data-owl-loop="false" data-owl-speed="10000" data-owl-gap="30" data-owl-nav="true" data-owl-dots="true" data-owl-item="7" data-owl-item-xs="2" data-owl-item-sm="3" data-owl-item-md="4" data-owl-item-lg="5" data-owl-item-xl="6" data-owl-duration="1000" data-owl-mousedrag="on">
                    <div class="ps-product ps-product--inner">
                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/home/1.jpg" alt=""></a>
                            <div class="ps-product__badge">-16%</div>
                            <ul class="ps-product__actions">
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__container">
                            <p class="ps-product__price sale">$567.99 <del>$670.00 </del><small>18% off</small></p>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Korea Long Sofa Fabric In Blue Navy Color</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select><span>01</span>
                                </div>
                                <div class="ps-product__progress-bar ps-progress" data-value="10">
                                    <div class="ps-progress__value"><span></span></div>
                                    <p>Sold:96</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ps-product ps-product--inner">
                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/home/2.jpg" alt=""></a>
                            <div class="ps-product__badge out-stock">Out Of Stock</div>
                            <ul class="ps-product__actions">
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__container">
                            <p class="ps-product__price">$101.99<small>18% off</small></p>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Aroma Rice Cooker</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select><span>01</span>
                                </div>
                                <div class="ps-product__progress-bar ps-progress" data-value="99">
                                    <div class="ps-progress__value"><span></span></div>
                                    <p>Sold:66</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ps-product ps-product--inner">
                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/home/3.jpg" alt=""></a>
                            <div class="ps-product__badge">-25%</div>
                            <ul class="ps-product__actions">
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__container">
                            <p class="ps-product__price sale">$42.00 <del>$60.00 </del><small>18% off</small></p>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Simple Plastice Chair In White Color</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select><span>02</span>
                                </div>
                                <div class="ps-product__progress-bar ps-progress" data-value="56">
                                    <div class="ps-progress__value"><span></span></div>
                                    <p>Sold:29</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ps-product ps-product--inner">
                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/home/4.jpg" alt=""></a>
                            <div class="ps-product__badge out-stock">Out Of Stock</div>
                            <ul class="ps-product__actions">
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__container">
                            <p class="ps-product__price">$320.00<small>18% off</small></p>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Korea Fabric Chair In Brown Colorr</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select><span>01</span>
                                </div>
                                <div class="ps-product__progress-bar ps-progress" data-value="80">
                                    <div class="ps-progress__value"><span></span></div>
                                    <p>Sold:83</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ps-product ps-product--inner">
                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/home/5.jpg" alt=""></a>
                            <div class="ps-product__badge out-stock">Out Of Stock</div>
                            <ul class="ps-product__actions">
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__container">
                            <p class="ps-product__price">$85.00<small>18% off</small></p>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Set 14-Piece Knife From KichiKit</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select><span>01</span>
                                </div>
                                <div class="ps-product__progress-bar ps-progress" data-value="16">
                                    <div class="ps-progress__value"><span></span></div>
                                    <p>Sold:34</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ps-product ps-product--inner">
                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/home/6.jpg" alt=""></a>
                            <div class="ps-product__badge out-stock">Out Of Stock</div>
                            <ul class="ps-product__actions">
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__container">
                            <p class="ps-product__price">$92.00<small>18% off</small></p>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Magic Bullet NutriBullet Pro 900 Series Blender</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select><span>01</span>
                                </div>
                                <div class="ps-product__progress-bar ps-progress" data-value="49">
                                    <div class="ps-progress__value"><span></span></div>
                                    <p>Sold:85</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ps-product ps-product--inner">
                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/home/7.jpg" alt=""></a>
                            <div class="ps-product__badge">-46%</div>
                            <ul class="ps-product__actions">
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__container">
                            <p class="ps-product__price sale">$42.00 <del>$60.00 </del><small>18% off</small></p>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Letter Printed Cushion Cover Cotton</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select><span>02</span>
                                </div>
                                <div class="ps-product__progress-bar ps-progress" data-value="84">
                                    <div class="ps-progress__value"><span></span></div>
                                    <p>Sold:13</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ps-home-ads">
        <div class="ps-container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 "><a class="ps-collection" href="#"><img src="img/collection/home-1/1.jpg" alt=""></a>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 "><a class="ps-collection" href="#"><img src="img/collection/home-1/2.jpg" alt=""></a>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 "><a class="ps-collection" href="#"><img src="img/collection/home-1/3.jpg" alt=""></a>
                </div>
            </div>
        </div>
    </div>-->
    
    {{--<div class="ps-top-categories">
        <div class="ps-container">
            <h3>Categories</h3>
            <div class="row">
                @foreach($categories as $category)
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 ">
                <div class="ps-block--category"><a class="ps-block__overlay" href="{{route('products.index', ['category_id' => $category->id])}}"></a><img src="{{ asset('images/new/pro/sp.jpg')}}" alt="">
                    <p>{{$category->name}}</p>
                    </div>
                </div>
                @endforeach
             
            </div>
        </div>
    </div>--}}



     <!-- //BN Slider 1 -->
     <div class="holder fullboxed bgcolor mt-0 py-2 py-sm-3">
        <div class="container">
         
            <div class="row bnr-grid">
            <div class="col-md"><a href="{{route('product.all')}}" class="bnr-wrap">
                <div class="bnr bnr1 bnr--style-1 bnr--right bnr--middle bnr-hover-scale" data-fontratio="5.55"><img src="{{ asset('images/new/pro/3290588.jpg')}}" data-src="{{ asset('images/new/pro/3290588.jpg')}}" alt="Banner" class="lazyload"> <span class="bnr-caption"><span class="bnr-text-wrap"><span class="bnr-text1">Shop By</span> <span class="bnr-text2">Products</span></span></span></div>
                    </a></div>
                <div class="col-md"><a href="{{route('shopview')}}" class="bnr-wrap">
                <div class="bnr bnr2 bnr--style-1 bnr--left bnr--middle bnr-hover-scale" data-fontratio="5.55"><img src="{{ asset('images/new/pro/230021-P1ZDSW-476.jpg')}}" data-src="{{ asset('images/new/pro/230021-P1ZDSW-476.jpg')}}" alt="Banner" class="lazyload"> <span class="bnr-caption"><span class="bnr-text-wrap"><span class="bnr-text1">Shop By</span> <span class="bnr-text2">Seller</span></span></span></div>
                    </a></div>
            </div>
        </div>
    </div>



    
    <!--<section class="offer-area ptb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="offer-box">
                        <img src="{{ asset('images/new/pro/sp.jpg')}}" alt="image">

                        <div class="category">
                            <h4>Women's</h4>
                        </div>

                        <div class="box-inner">
                            <div class="inner-content">
                                <h3>Women's</h3>

                                <ul>
                                    <li><a href="#">Woman Accessories</a></li>
                                    <li><a href="#">Man Accessories</a></li>
                                    <li><a href="#">Sunglasses</a></li>
                                    <li><a href="#">Belts</a></li>
                                    <li><a href="#">Hats</a></li>
                                    <li><a href="#">Scrafs</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="offer-box">
                        <img src="{{ asset('images/new/pro/sp.jpg')}}" alt="image">

                        <div class="category">
                            <h4>Accessories</h4>
                        </div>

                        <div class="box-inner">
                            <div class="inner-content">
                                <h3>Accessories</h3>

                                <ul>
                                    <li><a href="#">Woman Accessories</a></li>
                                    <li><a href="#">Man Accessories</a></li>
                                    <li><a href="#">Sunglasses</a></li>
                                    <li><a href="#">Belts</a></li>
                                    <li><a href="#">Hats</a></li>
                                    <li><a href="#">Scrafs</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                    <div class="offer-box">
                        <img src="assets/img/offer-men.jpg" alt="image">

                        <div class="category">
                            <h4>Men's</h4>
                        </div>

                        <div class="box-inner">
                            <div class="inner-content">
                                <h3>Men's</h3>

                                <ul>
                                    <li><a href="#">Woman Accessories</a></li>
                                    <li><a href="#">Man Accessories</a></li>
                                    <li><a href="#">Sunglasses</a></li>
                                    <li><a href="#">Belts</a></li>
                                    <li><a href="#">Hats</a></li>
                                    <li><a href="#">Scrafs</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->







   <!-- <div class="ps-product-list ps-clothings">
        <div class="ps-container">
            <div class="ps-section__header">
                <h3>Consumer Electronics</h3>
                <ul class="ps-section__links">
                    <li><a href="shop-grid.html">New Arrivals</a></li>
                    <li><a href="shop-grid.html">Best seller</a></li>
                    <li><a href="shop-grid.html">Must Popular</a></li>
                    <li><a href="shop-grid.html">View All</a></li>
                </ul>
            </div>
            <div class="ps-section__content">
                <div class="ps-carousel--nav owl-slider" data-owl-auto="false" data-owl-loop="false" data-owl-speed="10000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="7" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-item-xl="6" data-owl-duration="1000" data-owl-mousedrag="on">
                    <div class="ps-product">
                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/electronic/1.jpg" alt=""></a>
                            <div class="ps-product__badge">-16%</div>
                            <ul class="ps-product__actions">
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__container"><a class="ps-product__vendor" href="#">Go Pro</a>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Marshall Kilburn Portable Wireless</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select><span>01</span>
                                </div>
                                <p class="ps-product__price sale">$567.99 <del>$670.00 </del></p>
                            </div>
                            <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Marshall Kilburn Portable Wireless</a>
                                <p class="ps-product__price sale">$567.99 <del>$670.00 </del></p>
                            </div>
                        </div>
                    </div>
                    <div class="ps-product">
                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/electronic/2.jpg" alt=""></a>
                            <div class="ps-product__badge hot">hot</div>
                            <ul class="ps-product__actions">
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Xbox One Wireless Controller Black Color</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select><span>01</span>
                                </div>
                                <p class="ps-product__price">$101.99</p>
                            </div>
                            <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Xbox One Wireless Controller Black Color</a>
                                <p class="ps-product__price">$101.99</p>
                            </div>
                        </div>
                    </div>
                    <div class="ps-product">
                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/electronic/3.jpg" alt=""></a>
                            <div class="ps-product__badge">-25%</div>
                            <ul class="ps-product__actions">
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Sound Intone I65 Earphone White Version</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select><span>02</span>
                                </div>
                                <p class="ps-product__price sale">$42.00 <del>$60.00 </del></p>
                            </div>
                            <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Sound Intone I65 Earphone White Version</a>
                                <p class="ps-product__price sale">$42.00 <del>$60.00 </del></p>
                            </div>
                        </div>
                    </div>
                    <div class="ps-product">
                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/electronic/4.jpg" alt=""></a>
                            <ul class="ps-product__actions">
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Samsung Gear VR Virtual Reality Headset</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select><span>01</span>
                                </div>
                                <p class="ps-product__price">$320.00</p>
                            </div>
                            <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Samsung Gear VR Virtual Reality Headset</a>
                                <p class="ps-product__price">$320.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="ps-product">
                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/electronic/5.jpg" alt=""></a>
                            <ul class="ps-product__actions">
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Samsung UHD TV 24inch</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select><span>01</span>
                                </div>
                                <p class="ps-product__price">$85.00</p>
                            </div>
                            <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Samsung UHD TV 24inch</a>
                                <p class="ps-product__price">$85.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="ps-product">
                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/electronic/6.jpg" alt=""></a>
                            <ul class="ps-product__actions">
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Store</a>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">EPSION Plaster Printer</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select><span>01</span>
                                </div>
                                <p class="ps-product__price">$92.00</p>
                            </div>
                            <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">EPSION Plaster Printer</a>
                                <p class="ps-product__price">$92.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="ps-product">
                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/electronic/7.jpg" alt=""></a>
                            <div class="ps-product__badge">-46%</div>
                            <ul class="ps-product__actions">
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">LG White Front Load Steam Washer</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select><span>02</span>
                                </div>
                                <p class="ps-product__price sale">$42.00 <del>$60.00 </del></p>
                            </div>
                            <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">LG White Front Load Steam Washer</a>
                                <p class="ps-product__price sale">$42.00 <del>$60.00 </del></p>
                            </div>
                        </div>
                    </div>
                    <div class="ps-product">
                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/electronic/8.jpg" alt=""></a>
                            <ul class="ps-product__actions">
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__container"><a class="ps-product__vendor" href="#">Go Pro</a>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Edifier Powered Bookshelf Speakers</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select><span>02</span>
                                </div>
                                <p class="ps-product__price">$42.00</p>
                            </div>
                            <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Edifier Powered Bookshelf Speakers</a>
                                <p class="ps-product__price">$42.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="ps-product">
                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/electronic/9.jpg" alt=""></a>
                            <ul class="ps-product__actions">
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__container"><a class="ps-product__vendor" href="#">Go Pro</a>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Amcrest Security Camera in White Color</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select><span>02</span>
                                </div>
                                <p class="ps-product__price">$42.00</p>
                            </div>
                            <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Amcrest Security Camera in White Color</a>
                                <p class="ps-product__price">$42.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="ps-product">
                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/electronic/10.jpg" alt=""></a>
                            <ul class="ps-product__actions">
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__container"><a class="ps-product__vendor" href="#">Go Pro</a>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Amcrest Security Camera in White Color</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select><span>02</span>
                                </div>
                                <p class="ps-product__price">$42.00</p>
                            </div>
                            <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Amcrest Security Camera in White Color</a>
                                <p class="ps-product__price">$42.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ps-product-list ps-clothings">
        <div class="ps-container">
            <div class="ps-section__header">
                <h3>Apparels & Clothings</h3>
                <ul class="ps-section__links">
                    <li><a href="shop-grid.html">New Arrivals</a></li>
                    <li><a href="shop-grid.html">Best seller</a></li>
                    <li><a href="shop-grid.html">Must Popular</a></li>
                    <li><a href="shop-grid.html">View All</a></li>
                </ul>
            </div>
            <div class="ps-section__content">
                <div class="ps-carousel--responsive owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="10000" data-owl-gap="0" data-owl-nav="false" data-owl-dots="true" data-owl-item="7" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="2" data-owl-item-lg="4" data-owl-item-xl="6" data-owl-duration="1000" data-owl-mousedrag="on">
                    <div class="ps-product">
                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/clothing/1.jpg" alt=""></a>
                            <div class="ps-product__badge">-16%</div>
                            <ul class="ps-product__actions">
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Herschel Leather Duffle Bag In Brown Color</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select><span>01</span>
                                </div>
                                <p class="ps-product__price sale">$567.99 <del>$670.00 </del></p>
                            </div>
                            <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Herschel Leather Duffle Bag In Brown Color</a>
                                <p class="ps-product__price sale">$567.99 <del>$670.00 </del></p>
                            </div>
                        </div>
                    </div>
                    <div class="ps-product">
                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/clothing/2.jpg" alt=""></a>
                            <div class="ps-product__badge out-stock">Out Of Stock</div>
                            <ul class="ps-product__actions">
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Unero Military Classical Backpack</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select><span>01</span>
                                </div>
                                <p class="ps-product__price">$101.99</p>
                            </div>
                            <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Unero Military Classical Backpack</a>
                                <p class="ps-product__price">$101.99</p>
                            </div>
                        </div>
                    </div>
                    <div class="ps-product">
                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/clothing/3.jpg" alt=""></a>
                            <div class="ps-product__badge">-25%</div>
                            <ul class="ps-product__actions">
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Rayban Rounded Sunglass Brown Color</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select><span>02</span>
                                </div>
                                <p class="ps-product__price sale">$42.00 <del>$60.00 </del></p>
                            </div>
                            <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Rayban Rounded Sunglass Brown Color</a>
                                <p class="ps-product__price sale">$42.00 <del>$60.00 </del></p>
                            </div>
                        </div>
                    </div>
                    <div class="ps-product">
                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/clothing/4.jpg" alt=""></a>
                            <div class="ps-product__badge out-stock">Out Of Stock</div>
                            <ul class="ps-product__actions">
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Sleeve Linen Blend Caro Pane Shirt</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select><span>01</span>
                                </div>
                                <p class="ps-product__price">$320.00</p>
                            </div>
                            <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Sleeve Linen Blend Caro Pane Shirt</a>
                                <p class="ps-product__price">$320.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="ps-product">
                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/clothing/5.jpg" alt=""></a>
                            <div class="ps-product__badge out-stock">Out Of Stock</div>
                            <ul class="ps-product__actions">
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Men’s Sports Runnning Swim Board Shorts</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select><span>01</span>
                                </div>
                                <p class="ps-product__price">$85.00</p>
                            </div>
                            <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Men’s Sports Runnning Swim Board Shorts</a>
                                <p class="ps-product__price">$85.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="ps-product">
                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/clothing/6.jpg" alt=""></a>
                            <div class="ps-product__badge out-stock">Out Of Stock</div>
                            <ul class="ps-product__actions">
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Store</a>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Paul’s Smith Sneaker InWhite Color</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select><span>01</span>
                                </div>
                                <p class="ps-product__price">$92.00</p>
                            </div>
                            <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Paul’s Smith Sneaker InWhite Color</a>
                                <p class="ps-product__price">$92.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="ps-product">
                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/clothing/7.jpg" alt=""></a>
                            <div class="ps-product__badge">-46%</div>
                            <ul class="ps-product__actions">
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">MVMTH Classical Leather Watch In Black</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select><span>02</span>
                                </div>
                                <p class="ps-product__price sale">$42.00 <del>$60.00 </del></p>
                            </div>
                            <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">MVMTH Classical Leather Watch In Black</a>
                                <p class="ps-product__price sale">$42.00 <del>$60.00 </del></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ps-product-list ps-garden-kitchen">
        <div class="ps-container">
            <div class="ps-section__header">
                <h3>Home, Garden & Kitchen</h3>
                <ul class="ps-section__links">
                    <li><a href="shop-grid.html">New Arrivals</a></li>
                    <li><a href="shop-grid.html">Best seller</a></li>
                    <li><a href="shop-grid.html">Must Popular</a></li>
                    <li><a href="shop-grid.html">View All</a></li>
                </ul>
            </div>
            <div class="ps-section__content">
                <div class="ps-carousel--responsive owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="10000" data-owl-gap="0" data-owl-nav="false" data-owl-dots="true" data-owl-item="7" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-item-xl="6" data-owl-duration="1000" data-owl-mousedrag="on">
                    <div class="ps-product">
                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/home/1.jpg" alt=""></a>
                            <div class="ps-product__badge">-16%</div>
                            <ul class="ps-product__actions">
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Korea Long Sofa Fabric In Blue Navy Color</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select><span>01</span>
                                </div>
                                <p class="ps-product__price sale">$567.99 <del>$670.00 </del></p>
                            </div>
                            <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Korea Long Sofa Fabric In Blue Navy Color</a>
                                <p class="ps-product__price sale">$567.99 <del>$670.00 </del></p>
                            </div>
                        </div>
                    </div>
                    <div class="ps-product">
                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/home/2.jpg" alt=""></a>
                            <div class="ps-product__badge out-stock">Out Of Stock</div>
                            <ul class="ps-product__actions">
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Aroma Rice Cooker</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select><span>01</span>
                                </div>
                                <p class="ps-product__price">$101.99</p>
                            </div>
                            <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Aroma Rice Cooker</a>
                                <p class="ps-product__price">$101.99</p>
                            </div>
                        </div>
                    </div>
                    <div class="ps-product">
                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/home/3.jpg" alt=""></a>
                            <div class="ps-product__badge">-25%</div>
                            <ul class="ps-product__actions">
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Simple Plastice Chair In White Color</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select><span>02</span>
                                </div>
                                <p class="ps-product__price sale">$42.00 <del>$60.00 </del></p>
                            </div>
                            <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Simple Plastice Chair In White Color</a>
                                <p class="ps-product__price sale">$42.00 <del>$60.00 </del></p>
                            </div>
                        </div>
                    </div>
                    <div class="ps-product">
                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/home/4.jpg" alt=""></a>
                            <div class="ps-product__badge out-stock">Out Of Stock</div>
                            <ul class="ps-product__actions">
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Korea Fabric Chair In Brown Colorr</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select><span>01</span>
                                </div>
                                <p class="ps-product__price">$320.00</p>
                            </div>
                            <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Korea Fabric Chair In Brown Colorr</a>
                                <p class="ps-product__price">$320.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="ps-product">
                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/home/5.jpg" alt=""></a>
                            <div class="ps-product__badge out-stock">Out Of Stock</div>
                            <ul class="ps-product__actions">
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Set 14-Piece Knife From KichiKit</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select><span>01</span>
                                </div>
                                <p class="ps-product__price">$85.00</p>
                            </div>
                            <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Set 14-Piece Knife From KichiKit</a>
                                <p class="ps-product__price">$85.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="ps-product">
                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/home/6.jpg" alt=""></a>
                            <div class="ps-product__badge out-stock">Out Of Stock</div>
                            <ul class="ps-product__actions">
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Store</a>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Magic Bullet NutriBullet Pro 900 Series Blender</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select><span>01</span>
                                </div>
                                <p class="ps-product__price">$92.00</p>
                            </div>
                            <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Magic Bullet NutriBullet Pro 900 Series Blender</a>
                                <p class="ps-product__price">$92.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="ps-product">
                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/home/7.jpg" alt=""></a>
                            <div class="ps-product__badge">-46%</div>
                            <ul class="ps-product__actions">
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Letter Printed Cushion Cover Cotton</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select><span>02</span>
                                </div>
                                <p class="ps-product__price sale">$42.00 <del>$60.00 </del></p>
                            </div>
                            <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Letter Printed Cushion Cover Cotton</a>
                                <p class="ps-product__price sale">$42.00 <del>$60.00 </del></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!--<div class="ps-home-ads">
        <div class="ps-container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 "><a class="ps-collection" href="#"><img src="img/collection/home-1/ad-1.jpg" alt=""></a>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 "><a class="ps-collection" href="#"><img src="img/collection/home-1/ad-2.jpg" alt=""></a>
                </div>
            </div>
        </div>
    </div>-->
    <!--<div class="ps-download-app">
        <div class="ps-container">
            <div class="ps-block--download-app">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                            <div class="ps-block__thumbnail"><img src="{{ asset('images/new/pro/app.png')}}" alt=""></div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                            <div class="ps-block__content">
                                <h3>Download Martfury App Now!</h3>
                                <p>Shopping fastly and easily more with our app. Get a link to download the app on your phone</p>
                                <form class="ps-form--download-app" action="do_action" method="post">
                                    <div class="form-group--nest">
                                        <input class="form-control" type="Email" placeholder="Email Address">
                                        <button class="ps-btn">Subscribe</button>
                                    </div>
                                </form>
                                <p class="download-link"><a href="#"><img src="img/google-play.png" alt=""></a><a href="#"><img src="img/app-store.png" alt=""></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!--<div class="ps-product-list ps-new-arrivals">
        <div class="ps-container">
            <div class="ps-section__header">
                <h3>Hot New Arrivals</h3>
                <ul class="ps-section__links">
                    <li><a href="shop-grid.html">Technologies</a></li>
                    <li><a href="shop-grid.html">Electronic</a></li>
                    <li><a href="shop-grid.html">Furnitures</a></li>
                    <li><a href="shop-grid.html">Clothing & Apparel</a></li>
                    <li><a href="shop-grid.html">Health & Beauty</a></li>
                    <li><a href="shop-grid.html">View All</a></li>
                </ul>
            </div>
            <div class="ps-section__content">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 ">
                        <div class="ps-product--horizontal">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/arrivals/1.jpg" alt=""></a></div>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Apple iPhone Retina 6s Plus 32GB</a>
                                <p class="ps-product__price">$990.50</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 ">
                        <div class="ps-product--horizontal">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/arrivals/1.jpg" alt=""></a></div>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Apple iPhone Retina 6s Plus 64GB</a>
                                <p class="ps-product__price">$1120.50</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 ">
                        <div class="ps-product--horizontal">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/arrivals/1.jpg" alt=""></a></div>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Apple iPhone Retina 6s Plus 128GB</a>
                                <p class="ps-product__price">$1220.50</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 ">
                        <div class="ps-product--horizontal">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/arrivals/2.jpg" alt=""></a></div>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Marshall Kilburn Portable Wireless Speaker</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select><span>01</span>
                                </div>
                                <p class="ps-product__price">$36.78 – $56.99</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 ">
                        <div class="ps-product--horizontal">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/arrivals/3.jpg" alt=""></a></div>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Herschel Leather Duffle Bag In Brown Color</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select><span>02</span>
                                </div>
                                <p class="ps-product__price">$125.30</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 ">
                        <div class="ps-product--horizontal">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/arrivals/4.jpg" alt=""></a></div>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Xbox One Wireless Controller Black Color</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select><span>02</span>
                                </div>
                                <p class="ps-product__price">$55.30</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 ">
                        <div class="ps-product--horizontal">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/arrivals/5.jpg" alt=""></a></div>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Grand Slam Indoor Of Show Jumping Novel</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select><span>02</span>
                                </div>
                                <p class="ps-product__price sale">$41.27 <del>$52.99 </del></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 ">
                        <div class="ps-product--horizontal">
                            <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/arrivals/6.jpg" alt=""></a></div>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Sound Intone I65 Earphone White Version</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select><span>01</span>
                                </div>
                                <p class="ps-product__price sale">$41.27 <del>$62.39 </del></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!--<div class="ps-newsletter">
        <div class="ps-container">
            <form class="ps-form--newsletter" action="do_action" method="post">
                <div class="row">
                    <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <div class="ps-form__left">
                            <h3>Newsletter</h3>
                            <p>Subcribe to get information about products and coupons</p>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <div class="ps-form__right">
                            <div class="form-group--nest">
                                <input class="form-control" type="email" placeholder="Email address">
                                <button class="ps-btn">Subscribe</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>-->
</div>

       


@endsection


