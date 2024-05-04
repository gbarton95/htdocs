<x-layouts.app>

    <x-slot name="title">
        Create
    </x-slot>

    <div class="container w-full max-w-xs">

        <h1>{{ $frase }}</h1>
        <br>

        <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('scores.index') }}" enctype="multipart/form-data"> Back</a>
            </div>
        <form action="{{ route('scores.store') }}" method="post">

            {{-- para hacer un formulario hay que poner la siguiente linea --}}
            @csrf


            {{-- Characters --}}
            <div>
                <label for="character_id">Characters</label>
                <select name="character_id" id="character_id">
                    @foreach ($characters as $character)
                        <option value="{{ $character->id }}">{{ $character->nom }}</option>
                    @endforeach
                </select>
            </div>

            {{-- Tournaments --}}
             <div>
                 <label for="tournament_id">Tournaments</label>
                    <select name="tournament_id" id="tournament_id">
                        @foreach ($tournaments as $tournament)
                            <option value="{{ $tournament->id }}">{{ $tournament->nom }}</option>
                        @endforeach
                    </select>
            </div>

            {{-- Name --}}
            <div>
                <label for="score"> Score </label>
                <br>
                <input class="bg-gray-200 border"  type="text" name="score" id="score">
                <br>
                <br>
            </div>


            {{-- Boton Enviar --}}
            <input type="submit" value="Enviar formulario" />
        </form>
    </div>
</x-layouts.app>

