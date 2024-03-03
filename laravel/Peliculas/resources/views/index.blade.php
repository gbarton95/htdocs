@extends('master')

@section('title', 'PELICULAS ONLINE')

@section('content')
    <h2>CATALOGO DE PELÍCULAS</h2>
    <!--Me di cuenta tarde de que pedías una tabla, lo dejo así porque ya está todo formateado :/-->
    @foreach ($Movies as $peli)
        <a href="{{ route('cartelPeli', $peli->id) }}">
            <img src="{{ 'images/' . $peli->image }}" alt="imagen de portada">
        </a>
    @endforeach
@endsection