@extends('layouts.front')

@section('content')
<!-- Breadcrumb Area -->
<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-box text-center">
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item" style="float: left"><a href="{{url()->previous() }}"><i class="fas fa-arrow-left"></i>Back</a></li>
                    <li class="list-inline-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="list-inline-item"><span>||</span> Wishlist</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Breadcrumb Area -->

<!-- Wishlist -->
<section class="shopping-cart">
    <div class="container">
        <?php if($products->isEmpty()) { ?>
            <h4 class="text-center">Your Wishlist is Empty</h4>
        <div class="row">
            <?php } else { ?>
                @foreach ($products as $product)
            <div class="col-md-12">
                <div class="cart-table wsh-list table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="t-pro">Product</th>
                                <th class="t-price">Price</th>
                                <th class="t-qty">Stock</th>
                                <th class="t-total">Add To Cart</th>
                                <th class="t-rem"></th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            
                            <tr>
                                <td class="t-pro d-flex">
                                    <div class="t-img">
                                        <a href=""><img src="{{asset('storage/'.$product->cover_img)}}" alt=""></a>
                                    </div>
                                    <div class="t-content">
                                        <p class="t-heading"><a href="{{url('product/'.$product->id)}}">{{$product->name}}</a></p>
                                        
                                        <ul class="list-unstyled col-sz">
                                            <li><p>{{$product->details}}</p></li>
                                            
                                        </ul>
                                    </div>
                                </td>
                                <td class="t-price">KES {{$product->price}}</td>
                            <td class="t-stk">{{$product->is_available}}</td>
                                <td class="t-add"><button type="button" name="button"><a href="{{route('cart.add', $product->id)}}" style="color: aliceblue">Add to Cart</a></button></td>
                                <td class="t-rem"><a href="{{url('/')}}/removeWishList/{{$product->id}}"><i class="far fa-trash-alt"></i></a></td>
                            </tr>
                            
                        </tbody>
                        
                    </table>
                </div>
            </div>
            @endforeach
            <?php } ?>
            
        </div>
    </div>
</section>
<!-- End Wishlist -->

<!-- Brand area 2 -->
<section class="brand2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tp-bnd owl-carousel">
                    <div class="bnd-items">
                        <a href="#"><img src="images/brand-01.png" alt="" class="img-fluid"></a>
                    </div>
                    <div class="bnd-items">
                        <a href="#"><img src="images/brand-02.png" alt="" class="img-fluid"></a>
                    </div>
                    <div class="bnd-items">
                        <a href="#"><img src="images/brand-03.png" alt="" class="img-fluid"></a>
                    </div>
                    <div class="bnd-items">
                        <a href="#"><img src="images/brand-04.png" alt="" class="img-fluid"></a>
                    </div>
                    <div class="bnd-items">
                        <a href="#"><img src="images/brand-05.png" alt="" class="img-fluid"></a>
                    </div>
                    <div class="bnd-items">
                        <a href="#"><img src="images/brand-06.png" alt="" class="img-fluid"></a>
                    </div>
                    <div class="bnd-items">
                        <a href="#"><img src="images/brand-07.png" alt="" class="img-fluid"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Brand area 2 -->




@endsection


