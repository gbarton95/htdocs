@extends('master')

@section('title', 'Pedidos')

@section('header', 'Gestión de pedidos')

@section('main_title', 'Carrito de la compra')

@section('content')
    @isset($product)
        <br><br>
        <form action="{{ route('product.update', ['product' => $product->id]) }}" method="POST">
            @method('PATCH')
    @else
        <form action="{{ route('product.store') }}" method="POST">
    @endisset
            @csrf
            <br>
            <table class='sinbordes'>
                <tr>
                    <td class='sinbordes'>Empleado solicitante:</td>
                    <td class='sinbordes'>
                        <select name="empleado_id">
                            @foreach($employees as $employee)
                                <option value="{{ $employee->id }}">{{ $employee->name . ' ' . $employee->surname }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class='sinbordes'>Producto solicitado:</td>
                        <td class='sinbordes'>
                    @foreach($products as $product)
                        <input type="radio" name="opcion" value="{{ $product->id }}">{{ $product->name }}</input><br>
                    @endforeach
                        </td>
                </tr>
                <tr>
                    <td class='sinbordes'>Cantidad a comprar:</td>
                    <td class='sinbordes'><input type="number" name="numero" required></td>
                    <td class='sinbordes'><input type="submit" value="Realizar pedido"></td>
                </tr>
            </table>
        </form>

        <br><br>
        <form action = "{{route('menu')}}" method="GET" class="centrado">
            @csrf
            <input type="submit" value="MENÚ PRINCIPAL">
        </form>
@endsection
