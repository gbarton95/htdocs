<x-layouts.app>

    <x-slot name="title">
        Tournaments
    </x-slot>

    <br>
    <h2>Tournaments</h2>
    <br>

    {{-- <a href="{{ route('tournaments.create' )}}">Crear nuevo post</a> --}}

    @forelse ($tournaments as $tournament)
        <li>
        <a href="{{ route('tournaments.show', $tournament) }}">{{ $tournament->nom }}</a>
        </li>
    @empty
        <li>No hay posts</li>
    @endforelse
    <br>
    <a href="{{route('tournaments.create')}}">Create Tournaments</a>
    {{ $tournaments->links() }}
</x-layouts.app>
