<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Your dogs') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <div class="row">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Propietario</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Edad</th>
                                    <th scope="col">Anotaciones</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($perros as $perro)
                                    <tr>
                                        <th scope="row">{{ $perro->propietario->nombre }}</th>
                                        <td>{{ $perro->nombre }}</td>
                                        <td>{{ $perro->edad }}</td>
                                        <td>{{ $perro->anotaciones }}</td>
                                        <td><a href="{{ route('perro.edit', $perro->id) }}"
                                            class="btn btn-primary btn-sm">Editar</a></td>
                                        <td>
                                            <form action="{{ route('perro.destroy', $perro->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Borrar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
