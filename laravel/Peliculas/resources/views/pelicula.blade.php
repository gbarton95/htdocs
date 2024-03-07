@extends('master')

@section('main_title', 'CARTEL DE PELICULA')

@section('content')
    <h2>{{ $peli->title }}</h2>

    <div class="formal">
        <div class="cartel">
            <img src="{{ asset('images/' . $peli->image) }}" alt="imagen de portada">
            <div>
                <br>
                <p><strong>Director: </strong>{{ $dire->name }} {{ $dire->surname }}</p>
                <p><strong>Actor principal: </strong> {{ $prota->name }} {{ $prota->surname }}</p>
                <p><strong>Guionistas: </strong>
                @foreach ($guionistas as $guionista)
                    {{ $guionista->name }} {{ $guionista->surname }} <br>
                @endforeach
                </p>
                <p><strong>Fecha de estreno: </strong> {{ $peli->release_date }}</p>
                <p><strong>Duración: </strong>{{ $peli->duration }}</p>
                <p><strong>Género: </strong>{{ $genero->genre }}</p>
                <br>
            </div>
        </div>
        <table class="sinopsis">
            <tr>
                <td style="vertical-align: top"><strong>Sinopsis:</strong></td>
                <td class="justified">{{ $peli->synopsis }}</td>
            </tr>
        </table>
    </div>
@endsection
