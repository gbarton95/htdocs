@extends('master')

@section('title', 'pedidos')

@section('header', 'Pedidos por empleado')

@section('main_title', 'Producto solicitado')

@section('content')

    <p>Para:</p>

    <ul>
        <li>Cantidad solicitada: </li>
        <li>Cantidad en stock: </li>
        <li>Proveedor: </li>
        <li>Teléfono de contacto: </li>
        <li>Empleado solicitante (ID): </li>
    </ul>



    <br><br>
    <form action = "{{ route('menu') }}" method="GET" class="centrado">
        @csrf
        <input type="submit" value="MENÚ PRINCIPAL">
    </form>
@endsection
