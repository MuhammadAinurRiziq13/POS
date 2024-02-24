{{-- @extends('main')
@section('container') 
<div class="text-center pt-3">
    <h1>Halaman Product</h1>
    <h3>All Category</h3>
    <ul>
        <li><a href="categories/food-beverage">food-beverage</a></li>
        <li><a href="categories/beauty-health">beauty-health</a></li>
        <li><a href="categories/home-care">home-care</a></li>
        <li><a href="categories/baby-kid">baby-kid</a></li>
    </ul>
</div>   
@endsection --}}

@extends('main')
@section('container') 
<div class="text-center pt-3">
    <h1 class="mb-4">Halaman Product</h1>
    <h3>All Category</h3>
    <div class="d-flex justify-content-center mt-3 gap-3">
        <a href="categories/food-beverage">
            <div class="card" style="width: 18rem;">
                <img src="https://source.unsplash.com/400x300?food-beverage" class="card-img-top" alt="...">
                <div class="card-body d-grid gap-3">
                  <h5 class="card-title">Food Beverage</h5>
                </div>
            </div>
        </a>
        <a href="categories/beauty-health">
            <div class="card" style="width: 18rem;">
                <img src="https://source.unsplash.com/400x300?beauty-health" class="card-img-top" alt="...">
                <div class="card-body d-grid gap-3">
                  <h5 class="card-title">Beauty Health</h5>
                </div>
            </div>
        </a>
        <a href="categories/home-care">
            <div class="card" style="width: 18rem;">
                <img src="https://source.unsplash.com/400x300?home-care" class="card-img-top" alt="...">
                <div class="card-body d-grid gap-3">
                  <h5 class="card-title">Home Care</h5>
                </div>
            </div>
        </a>
        <a href="categories/baby-kid">
            <div class="card" style="width: 18rem;">
                <img src="https://source.unsplash.com/400x300?toys" class="card-img-top" alt="...">
                <div class="card-body d-grid gap-3">
                  <h5 class="card-title">Baby Kid</h5>
                </div>
            </div>
        </a>
    </div>
</div>   
@endsection