
@extends('layouts.front')

@section('content')

<div class="ps-page--single ps-page--vendor">
    <div class="ps-breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                @foreach (Breadcrumbs::current() as $crumbs)
                @if ($crumbs->url() && !$loop->last)
                    <li class="breadcrumb-item">
                        <a href="{{ $crumbs->url() }}">
                            {{ $crumbs->title() }}
                        </a>
                    </li>
                @else
                    <li class="breadcrumb-item active">
                        {{ $crumbs->title() }}
                    </li>
                @endif
            @endforeach
            </ul>
        </div>
    </div>
    <section class="ps-store-list">
        <div class="container">
            <div class="ps-section__header">
                <h3>Store list</h3>
            </div>
            <div class="ps-section__wrapper">
                <div class="ps-section__left">
                    <aside class="widget widget--vendor">
                        <h3 class="widget-title">Search</h3>
                        <form class="ps-form--quick-search" action="{{route('shops.search')}}" method="GET">
                        <input class="form-control" type="text" name="search" placeholder="Search for shops...">
                        <button type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </aside>
                    <!--<aside class="widget widget--vendor">
                        <h3 class="widget-title">Filter by Category</h3>
                        <div class="form-group">
                            <select class="ps-select">
                                <option>Lighting </option>
                                <option>Exterior</option>
                                <option>Custom Grilles</option>
                                <option>Wheels & Tires</option>
                                <option>Performance</option>
                            </select>
                        </div>
                    </aside>-->
                  
                </div>
                <div class="ps-section__right">
                    <section class="ps-store-box">
                        <div class="ps-section__header">
                            <p>Showing <strong>{{ $allShopViews->firstItem() }}</strong> to <strong>{{ $allShopViews->lastItem() }}</strong> of total <strong>{{$allShopViews->total()}}</strong> Shops</p></p>
                            <select class="ps-select">
                                <option value="1">Sort by Newest: old to news</option>
                                <option value="2">Sort by Newest: New to old</option>
                                <option value="3">Sort by average rating: low to hight</option>
                            </select>
                        </div>
                        <div class="ps-section__content">
                            <div class="row">
                                @foreach ($allShopViews as $shopsview )
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                                    <article class="ps-block--store">
                                        <div class="ps-block__thumbnail bg--cover" data-background="{{asset('storage/'.$shopsview->cover_img)}}"></div>
                                        <div class="ps-block__content">
                                           <div class="ps-block__author"> <!--<a class="ps-block__user" href="#"><img src="img/vendor/store/user/3.jpg" alt=""></a>--><a class="ps-btn" href="{{url('shops/'.$shopsview->id)}}">Visit Store</a></div>
                                        <h4>{{$shopsview->name}}</h4>
                                            
                                        <p><b>Area of Specialization:</b>&nbsp;{{$shopsview->specialization}}</p>
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
                                    {{$allShopViews->links()}}
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





















