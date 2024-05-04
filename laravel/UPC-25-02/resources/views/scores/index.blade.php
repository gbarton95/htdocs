<x-layouts.app>

    <x-slot name="title">
        Score
    </x-slot>

    <br>
    <h2 class="text-center">Puntuaciones</h2>
    <br>
    <br>

    <table class="table table-dark">
        <thead>
            <tr>
                <th>Personaje</th>
                <th>Torneo</th>
                <th>Puntuación</th>
                @if(auth()->user()->name == 'Eloy')
                                <!-- No mostrar el menu -->
                @else
                <th>Acciones</th>
                @endif
            </tr>
        </thead>
        <tbody>
            @forelse ($scores as $score)
                <tr>
                    <td>{{ $score->character->nom }}</td>
                    <td>{{ $score->tournament->nom }}</td>
                    <td>{{ $score->score }}</td>
                    <td>
                        <div class="d-flex align-items-center">
                            @if(auth()->user()->name == 'Eloy')
                                <!-- No mostrar los botones -->
                            @else
                                <form action="{{ route('scores.destroy', $score) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm mr-2">Eliminar</button>
                                </form>
                                <a class="btn btn-primary btn-sm" href="{{ route('scores.edit',$score->id) }}">Editar</a>
                            @endif
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No hay puntuaciones disponibles</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    @if(auth()->user()->name == 'Eloy')
    <!-- No mostrar los botones -->
    @else
    <a href="{{ route('scores.create') }}" class="btn btn-success btn-sm" style="width: 150px;">Crear Puntuación</a>
    @endif
    <br>
    {{ $scores->links() }}
</x-layouts.app>
