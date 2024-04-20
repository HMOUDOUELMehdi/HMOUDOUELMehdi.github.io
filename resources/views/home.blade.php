@extends('layout.layout')

@section('content')

@section("backImage")
'/photos/backGroundImage.jpg'
@endsection

<div class="container">
    <div class="row justify-content-between"> 
        <h2>voiture de location</h2>
        <h3> Marshall Cars </h3>
        <div class="col-auto"> 
            <a class="btn btn-primary" href="{{ route("registerClient") }}">Visiter comme client</a>
        </div>
        <div class="col-auto"> 
            <a class="btn btn-success" href="{{ route("loginAgence") }}">Visiter comme agence</a>
        </div>

        <h2>INFO</h2>
        <h3> Tel:0700699177 </h3>
        <h3> Email:ELmehdiHmoudou0@gmail.com </h3>
    </div>
</div>

<!-- Example of linking custom CSS file -->
<link rel="stylesheet" href="{{ asset('css/styleHome.css') }}">

@endsection
