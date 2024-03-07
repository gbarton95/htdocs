@extends('master')

@section('title', 'Administración de pedidos')

@section('header', 'Administración de pedidos')

@section('main_title', 'Insertar/modificar pedido')

@section('content')
    @isset($order)
        <br><br>
        <form action="{{ route('order.update', ['order' => $order->id]) }}" method="GET">
            @method('PATCH')
    @else
        <form action="{{ route('order.create') }}" method="GET">
    @endisset
            @csrf
            <br>
            <table class='sinbordes'>
                <tr>
                    <td class='sinbordes'>Producto:</td>
                    <td class='sinbordes'>
                        <select>
                            @foreach($products as $product)
                                <option value="{{ $product->id }}">{{ $product->name }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class='sinbordes'>Proveedor:</td>
                    <td class='sinbordes'>
                        <select>
                            @foreach($suppliers as $supplier)
                                <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class='sinbordes'>Empleado de compras:</td>
                    <td class='sinbordes'>
                        <select>
                            @foreach($employees as $employee)
                                <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class='sinbordes'>Cantidad:</td>
                    <td class='sinbordes'><input type="text" name="amount" value="{{ $order->amount ?? '' }}" required></td>
                </tr>
                <tr>
                    <td class='sinbordes'>Precio:</td>
                    <td class='sinbordes'><input type="text" name="price" value="{{ $order->price ?? '' }}" required></td>
                </tr>
                <tr>
                    <td class='sinbordes'>Comentarios:</td>
                    <td class='sinbordes'><input type="text" name="comments" value="{{ $order->comments ?? '' }}" required></td>
                </tr>
                <tr>
                    <td class='sinbordes'><a href="{{ route('order.status') }}">Volver al listado</a></td>
                    <td class='sinbordes'><input type="submit"></td>
                </tr>
            </table>
        </form>

        <br><br>
        <form action = "{{route('menu')}}" method="GET" class="centrado">
            @csrf
            <input type="submit" value="MENÚ PRINCIPAL">
        </form>
@endsection
