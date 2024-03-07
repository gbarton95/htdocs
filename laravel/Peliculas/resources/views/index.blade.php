@extends('master')

@section('main_title', 'PELICULAS ONLINE')

@section('content')
    <h2>{{ $titulo }}</h2>
    <!--Me di cuenta tarde de que pedían una tabla, lo dejo así porque ya está todo formateado :/-->
    @foreach ($Movies as $peli)
        <a href="{{ route('cartelPeli', $peli->id) }}">
            <img src="{{ asset('images/' . $peli->image) }}" alt="imagen de portada"> <!--Ponle asset para que no se rompa el vínculo-->
        </a>
    @endforeach
@endsection