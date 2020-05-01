



<div class="col-md-4">
<div class="card card-product-grid">
    <a href="#" class="img-wrap"> <img src="{{asset('storage/'.$product->cover_img)}}"> </a>
        <figcaption class="info-wrap text-center">
            <h4 class="card-title">{{$product->name}}</h4>
        <p class="card-text mb-2">{{$product->brand}}</p>
        <a href="{{route('cart.add', $product->id)}}" class="btn btn-block btn-primary">Add to cart </a>	
        <p class="card-text mt-2"><b>KES {{$product->price}}</b></p>   
        <a href="{{url('product/'.$product->id)}}" class="text-primary"><b>More Product Details</b><a>
        </figcaption>
    </div>
</div>




<!--
<div class="col-md-4">
    <div class="card">
        <img class="card-img-top" src="{{asset('storage/'.$product->cover_img)}}" alt="Card image cap">
        <div class="card-body">
        <h4 class="card-title">{{$product->name}}</h4>
        <p class="card-text">{{$product->details}}</p>
        <p class="card-text">{{$product->brand}}</p>
        <p class="card-text">{{$product->is_available}}</p>

        </div>
        <div class="card-body">
            <a href="#" class="card-link">Add to Cart</a>
            <p class="card-text">KES {{$product->price}}</p>   
        </div>
    </div>   
</div> -->
