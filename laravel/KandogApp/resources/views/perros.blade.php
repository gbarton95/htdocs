<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Perros
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!--Contenido aquí-->

                    <form name="searchForm" action="{{ route('perrosearch') }}" method="GET">
                        <input type="search" name="inputSearch" placeholder="Buscar...">
                        <button type="submit" name="buttonSearch">Buscar<!--img=""--></button>
                    </form>

                    <table class="table w-full table-striped">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Raza</th>
                                <th>Tutor</th>
                                <th>Teléfono</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($perros as $perro)
                                <tr>
                                    <td>{{ $perro->nombre }}</td>
                                    <td>{{ $perro->raza ?? 'Desconocido' }}</td>
                                    <td>{{ $perro->Propietario->nombre }}</td>
                                    <td>{{ $perro->Propietario->telefono }}</td>
                                    <td><img src="{{ asset('private_img/edit.png') }}" alt="imagen de portada"></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
