@extends('layouts.master')
@section('title', 'Page Title')
@section('sidebar')
    <p>Esto se añadirá al sidebar del master layout.</p>
@endsection
@section('content')
    <h2>{{$name}}</h2>
    <p>Este es el contenido de mi página.</p>
    @if ($day == 'Viernes')
        <p>Sesión en Morrisey</p>
    @else
        <p>Preparando discos</p>
    @endif
@endsection
