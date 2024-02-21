@extends('main')
@section('container') 
<div class="text-center pt-3">
    <h1 class="mb-4">Halaman Product</h1>
    <h3>Category : {{ $title }}</h3>
    <div class="d-flex justify-content-center mt-4 gap-3">
        <div class="card" style="width: 18rem;">
            <img src="https://source.unsplash.com/200x150?{{ $product }}" class="card-img-top" alt="...">
            <div class="card-body d-grid gap-3">
              <h5 class="card-title">{{ $product }}</h5>
              <a href="#" class="btn btn-primary">Buy Now</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="https://source.unsplash.com/200x150?{{ $product }}" class="card-img-top" alt="...">
            <div class="card-body d-grid gap-3">
              <h5 class="card-title">{{ $product }}</h5>
              <a href="#" class="btn btn-primary">Buy Now</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="https://source.unsplash.com/200x150?{{ $product }}" class="card-img-top" alt="...">
            <div class="card-body d-grid gap-3">
              <h5 class="card-title">{{ $product }}</h5>
              <a href="#" class="btn btn-primary">Buy Now</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="https://source.unsplash.com/200x150?{{ $product }}" class="card-img-top" alt="...">
            <div class="card-body d-grid gap-3">
              <h5 class="card-title">{{ $product }}</h5>
              <a href="#" class="btn btn-primary">Buy Now</a>
            </div>
        </div>
    </div>
</div>   
@endsection