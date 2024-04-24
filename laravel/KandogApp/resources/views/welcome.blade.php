@extends('partials.base')

@section('content')
    <div class="jumbotron text-center">
        <h1>Bienvenido a Kandog</h1>
        <img src="{{ asset('private_img/Logo_naranja.png') }}" alt="Logo de Kandog" style="width: 50%;"/>
        <p>Esta es tu aplicación para gestionar todo lo relacionado con el adiestramiento.</p>
        <a href="" class="btn btn-success">Ir a otra página</a>
    </div>
@endsection