
@extends('layouts.front')

@section('content')

<div class="ps-page--single ps-page--vendor">
    <div class="ps-breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
            <li><a href="{{route('home')}}">Home</a></li>
                <li>Store List</li>
            </ul>
        </div>
    </div>
    <section class="ps-store-list">
        <div class="container">
            <div class="ps-section__header" style="margin-top: 0px;">
                <h3 style="margin-top: 0px;">Store list</h3>
            </div>
            <div class="ps-section__wrapper">
               <!-- <div class="ps-section__left">
                    <aside class="widget widget--vendor">
                        <h3 class="widget-title">Search</h3>
                        <input class="form-control" type="text" placeholder="Search...">
                    </aside>
                    <aside class="widget widget--vendor">
                        <h3 class="widget-title">Filter by Category</h3>
                        <div class="form-group">
                            <select class="ps-select">
                                <option>Lighting</option>
                                <option>Exterior</option>
                                <option>Custom Grilles</option>
                                <option>Wheels & Tires</option>
                                <option>Performance</option>
                            </select>
                        </div>
                    </aside>
              
                </div>-->
                <div class="ps-section__right">
                    <section class="ps-store-box">
                        <div class="ps-section__header">
                            <p>Showing 1 -8 of 22 results</p>
                            <select class="ps-select">
                                <option value="1">Sort by Newest: old to news</option>
                                <option value="2">Sort by Newest: New to old</option>
                                <option value="3">Sort by average rating: low to hight</option>
                            </select>
                        </div>
                        <div class="ps-section__content">
                            <div class="row">
                                @foreach ($shops as $s )
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                                    <article class="ps-block--store">
                                        <div class="ps-block__thumbnail bg--cover" data-background="{{asset('storage/'.$s->cover_img)}}"></div>
                                        <div class="ps-block__content">
                                           <div class="ps-block__author"> <!--<a class="ps-block__user" href="#"><img src="img/vendor/store/user/3.jpg" alt=""></a>--><a class="ps-btn" href="{{url('shops/'.$s->id)}}">Visit Store</a></div>
                                        <h4>{{$s->name}}</h4>
                                            
                                        <p><b>Area of Specialization:</b>&nbsp;{{$s->specialization}}</p>
                                            <!--<ul class="ps-block__contact">
                                                <li><i class="icon-envelope"></i><a href="/cdn-cgi/l/email-protection#94f7fbfae0f5f7e0d4ecfcfbf9f1baf7fbf9"><span class="__cf_email__" data-cfemail="e784888993868493a79f8f888a82c984888a">[email&#160;protected]</span></a></li>
                                                <li><i class="icon-telephone"></i> (+093) 77-637-3300</li>
                                            </ul>
                                            <div class="ps-block__inquiry"><a href="#"><i class="icon-question-circle"></i> inquiry</a></div>-->
                                        </div>
                                    </article>
                                </div>
                                @endforeach
                              
                            </div>
                            <div class="ps-pagination">
                                <ul class="pagination">
                                    
                                </ul>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
</div>


@endsection





















