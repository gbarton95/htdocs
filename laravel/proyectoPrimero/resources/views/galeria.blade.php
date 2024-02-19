@extends("layouts.miplantilla")

@include("layouts.navegadorBoot")
@section("cabecera")
    <h1>Galería</h1>
@endsection

@section("infoGeneral")


    @if(count($alumnos))
        <table width="50%" border="1">
            @foreach ($alumnos as $alumno)
                <tr>
                    <td>{{$alumno}}</td>
                </tr>
            @endforeach
        </table>

    @else
        {{"Sin alumnos"}}

    @endif

@endsection

@section("pie")