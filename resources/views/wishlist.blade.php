@extends('layouts.front')

@section('content')

<div class="ps-page--simple">
    <div class="ps-breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
            <li><a href="{{route('home')}}">Home</a></li>
                <li>Wishlist</li>
            </ul>
        </div>
    </div>
    <div class="ps-section--shopping ps-whishlist">
        <div class="container">
            <div class="ps-section__header">
                <h1>Wishlist</h1>
            </div>

            <div class="ps-section__content">
                <?php if($products->isEmpty()) { ?>
                    <h4 class="text-center">Your Wishlist is Empty</h4>
                <?php } else { ?>
                    @foreach ($products as $product)
                        <div class="table-responsive">
                            <table class="table ps-table--whishlist">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Product </th>
                                        <th>Unit Price</th>
                                        <th>Stock Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="{{url('/')}}/removeWishList/{{$product->id}}"><i class="far fa-trash-alt"></i></a></td>
                                        <td>
                                            <div class="ps-product--cart">
                                                <div class="ps-product__thumbnail"><a href=""><img src="{{asset('storage/'.$product->cover_img)}}" alt=""></a></div>
                                                <div class="ps-product__content"><a href="{{url('product/'.$product->id)}}">{{$product->name}}</a></div>
                                            </div>
                                        </td>
                                        <td class="price">KES {{$product->price}}</td>
                                        <td><span class="ps-tag ps-tag--in-stock">{{$product->is_available}}</span></td>
                                        <td><a class="ps-btn" href="{{route('cart.add', $product->id)}}">Add to cart</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    @endforeach
                    <?php } ?>
            </div>
        </div>
    </div>
</div>





@endsection


