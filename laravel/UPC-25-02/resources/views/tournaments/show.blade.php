<x-layouts.app>

    <x-slot name="title">
        Index
    </x-slot>

    <div class="container w-full max-w-xs">

        <br>
        <h1>{{ $frase }}</h1>
        <br>

        <h1>{{ $tournament->id }}</h1>
        <p>{{ $tournament->nom }}</p>

        <a href="{{ route('tournaments.edit', $tournament) }}">Editar Post</a>

        <form action="{{ route('tournaments.destroy', $tournament) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Eliminar Post</button>
        </form>

    </div>
</x-layouts.app>
