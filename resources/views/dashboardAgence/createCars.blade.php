@extends('layout.layout')

@section('content')

<form action="{{ route('dashboardAgence.store') }}" method="post">
    @csrf
    <h3>create Car</h3>

    <label for="email"></label>
    <input type="text"  name="matricule" placeholder="Enter matricule">
    @error('matricule')
        <p class="text-danger fs-6 mb-3">{{ $message }}</p>
    @enderror

    <label for="password"></label>
    <input type="text" name="modele" placeholder="Enter modele">
    @error('modele')
        <p class="text-danger fs-6 mb-3">{{ $message }}</p>
    @enderror

    <label for="password"></label>
    <input type="text"  name="nombre_de_place" placeholder="Enter nombre_de_place">
    @error('nombre_de_place')
        <p class="text-danger fs-6 mb-3">{{ $message }}</p>
    @enderror

    <label for="password"></label>
    <input type="text"  name="tarif" placeholder="Enter tarif">
    @error('tarif')
        <p class="text-danger fs-6 mb-3">{{ $message }}</p>
    @enderror    

    <button type="submit" class="btn btn-primary">Login</button>
    {{-- <a  href="{{ route("registerAgence") }}">Register</a> --}}

</form>

@endsection



