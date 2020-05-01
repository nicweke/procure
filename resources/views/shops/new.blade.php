
@extends('layouts.front')




@section('content')
  
    <div class="container">
  
    <div>

    <h2>Create Your Shop</h2>

    

    <form action="{{route('shops.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    
    
        
      <div class="form-group mt-4">
          <label for="cover_img">Upload company logo</label>
          <div class="col-md-6">
          <input type="file" class="form-control-file" name="cover_img" required>
          <small>* Make sure your image dimensions are 281 x 179 pixels before upload</small>
          @error('cover_img')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
           @enderror
          </div>
        </div> 


        <div class="form-group mt-4">
            <label for="name">Company Name*</label>
            <div class="col-md-6">
            <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId" required>
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
             @enderror
            </div>
        </div>


        <div class="form-group mt-2">
            <label for="description">Describe Your Business</label>
            <div class="col-md-6">
            <textarea class="form-control" name="description" id="" rows="3" required></textarea> 
            @error('description')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
             @enderror
            </div>
        </div>

        <div class="form-group mt-2">
            <label for="specialization">Area Of Specialization</label>
            <div class="col-md-6">
            <input type="text" name="specialization" id="" class="form-control" placeholder="" aria-describedby="helpId" required>
            <small><i>a)Electrical  b)Mechanical  c)Plumbing  d)Electro-mechanical</i></small>
            </div>
        </div>

      
        <button type="submit" class="btn btn-primary mt-6">Create Shop</button>



    </form>
</div>
    
  </div>
@endsection
