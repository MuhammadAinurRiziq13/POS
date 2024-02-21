@extends('main')
@section('container') 
<div class="text-center pt-3">
    <h1>Halaman User</h1>
    <img src="https://source.unsplash.com/400x400?people" alt="profil" width="200" class="img-thumbnail rounded-circle my-3">
    <h3>{{ $name }}</h3>
    <p>{{ $id }}</p>
</div>   
@endsection