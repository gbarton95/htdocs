@extends('master')

@section('title', 'pedidos')

@section('header', 'Pedidos por empleado')

@section('main_title', 'Producto solicitado')

@section('content')

    <h3>Para:
        {{ $product->supplier->contact->employee->name }}
        {{ $product->supplier->contact->employee->surname }}
    </h3> <!--Esto sólo puedes hacerlo si todo está bien comunicado por Eloquent-->

    <h2 class="centrado">{{ $product->name }}</h2>

    <br><br>
    <ul>
        <li>Cantidad solicitada: {{ $amount }}</li>
        <li>Cantidad en stock: {{ $product->stock }}</li>
        <li>Proveedor: {{ $product->supplier->name }}</li>
        <li>Teléfono de contacto: {{ $product->supplier->contact->phone_number }}</li>
        <li>Empleado solicitante (ID): {{ $employee->id }} {{ $employee->name }} {{ $employee->surname }}</li>
    </ul>

    <br><br>
    <form action = "{{ route('menu') }}" method="GET" class="centrado">
        @csrf
        <input type="submit" value="MENÚ PRINCIPAL">
    </form>
@endsection
