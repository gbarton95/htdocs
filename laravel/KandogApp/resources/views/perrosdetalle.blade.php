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

                   <h1>Lista de Perros</h1>
               
                   <table class="table-auto w-full table-striped">
                       <thead>
                           <tr>
                               <th>Nombre</th>
                               <th>Edad</th>
                               <th>Sexo</th>
                               <th>Raza</th>
                               <th>Peso</th>
                               <th>PPP</th>
                           </tr>
                       </thead>
                       <tbody>
                           @foreach ($perros as $perro)
                               <tr>
                                   <td>{{ $perro->nombre }}</td>
                                   <td>{{ $perro->edad }}</td>
                                   <td>{{ $perro->sexo }}</td>
                                   <td>{{ $perro->raza ?? 'Desconocido' }}</td>
                                   <td>{{ $perro->peso . "kg" ?? 'N/A' }}</td>
                                   <td>{{ $perro->PPP ? 'Sí' : 'No' }}</td>
                               </tr>
                           @endforeach
                       </tbody>
                   </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
