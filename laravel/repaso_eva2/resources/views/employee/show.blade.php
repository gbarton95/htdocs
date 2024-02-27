@extends("master")

@section("title", "Administración de empleado")

@section("header", "Administración de empleado")

@section("main_title", "Detalle del empleado")

@section("content")
    <table class='sinbordes'>
        <tr>
            <th class='sinbordes derecha mitad'>Nombre del empleado:</th>
            <td class='sinbordes mitad'>{{ $employee->name }}</td>
        </tr>
        <tr>
            <th class='sinbordes derecha mitad'>Apellido:</th>
            <td class='sinbordes mitad'>{{ $employee->surname }}</td>
        </tr>
        <tr>
            <th class='sinbordes derecha mitad'>Departamento:</th>
            <td class='sinbordes mitad'>{{ $employee->department }}</td>
        </tr>
        <tr>
            <th class='sinbordes derecha mitad'>Funciones:</th>
            <td class='sinbordes mitad'>{{ $employee->functions }}</td>
        </tr>
    </table>

    <br><br>
    <a href="{{ route('employee.index') }}" class='centrado'>Volver al listado</a>

    <br><br>
    <form action = "{{route('menu')}}" method="GET" class="centrado">
        @csrf
        <input type="submit" value="MENÚ PRINCIPAL">
    </form>
@endsection