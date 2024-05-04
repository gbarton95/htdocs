<x-layouts.app>

    <x-slot name="title">
        Create
    </x-slot>

    <div class="container w-full max-w-xs">

        <h1>{{ $frase }}</h1>
        <br>


        <form action="{{ route('tournaments.store') }}" method="post">

            {{-- para hacer un formulario hay que poner la siguiente linea --}}
            @csrf



            {{-- Name --}}
            <div>
                <label for="nom"> Nom </label>
                <br>
                <input class="bg-gray-200 border"  type="text" name="nom" id="nom">
                <br>
                <br>
            </div>


            {{-- Boton Enviar --}}
            <input type="submit" value="Enviar formulario" />
        </form>
    </div>
</x-layouts.app>

