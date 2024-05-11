<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Your dogs') }}
        </h2>
    </x-slot>

    
    <div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">

                <div class="row g-2 d-flex align-items-center justify-between">
                    @if(count($perros)==0 && $buscar==false)
                        <div class="col-12 col-md-3">{{__('Insert your very first client!')}}</div> 
                    @endif

                    <div class=" col-md-3">
                        <a href="{{ route('perro.create') }}" class="w-100 btn btn-success btn-sm" style="width: 150px;">{{__('Create new dog')}} </a>
                    </div>
                    @if($buscar==true)
                        <div class="col-12 col-md-3 text-right">
                            <a class="btn btn-sm btn-secondary d-none d-md-inline-block" href="{{ route('perro.index') }}"
                            enctype="multipart/form-data">{{ __('Back') }}</a>
                            <a class="btn btn-sm btn-secondary w-100 d-md-none" href="{{ route('perro.index') }}"
                            enctype="multipart/form-data">{{ __('Back') }}</a>
                        </div>
                    @endif
                    <div class="col-12 col-md-6">
                        <form action="{{ route('perro.search') }}" class="buscador d-flex" method="POST">
                            @csrf
                            <input type="text" style="width: 90%;" id="searchDog" name="searchDog" class="py-1" placeholder="{{__('Dog\'s name, owner, phone number')}}"><button type="submit" class="px-2">OK</button>
                            {{-- <input type="image" class="lupa" src="{{ asset('images/lupa.png') }}"> --}}
                            <!--Un input type="image" actúa como botón de envío por defecto cuando se coloca dentro de un formulario!!-->
                        </form>
                    </div>                   
                </div>

                <!--TABLA VISTA PERROS-->
                <div class="pt-4">
                    <table id="tablaVerPerros" class="table table-striped table-bordered align-middle" @if($perros->isEmpty()) hidden="true" @endif>
                        <thead class="thead-dark">
                            <tr>
                                <th onclick="ordenarTabla('nombre')" scope="col">{{__('Name')}}</th>
                                <th onclick="ordenarTabla('edad')" scope="col">{{__('Age')}}</th>
                                <th onclick="ordenarTabla('raza')" scope="col">{{__('Breed')}}</th>
                                <th onclick="ordenarTabla('tutor_nombre')" scope="col">{{__('Owner')}}</th>
                                <th scope="col">{{__('Phone number')}}</th>
                                <th onclick="ordenarTabla('telefono')" class="columnaBoton"></th>
                                <th class="columnaBoton"></th>
                                <th class="columnaBoton"></th>
                            </tr>
                        </thead>
                        <tbody id="cuerpoTabla">
                            @foreach ($perros as $perro)
                                <tr class="">
                                    <td>{{ $perro->nombre }}</td>
                                    <td>{{ $perro->edad }}</td>
                                    <td>{{ $perro->raza }}</td>
                                    <td scope="row">{{ $perro->tutor_nombre }} {{ $perro->tutor_apellidos }}</td>
                                    <td>{{ $perro->telefono }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('perro.edit', $perro->id) }}" class="btn btn-primary btn-sm w-100">{{ __('Edit') }}</a>
                                    </td>
                                    <td class="text-center">
                                        <form action="{{ route('perro.destroy', $perro->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm w-100 h-80">{{ __('Delete') }}</button>
                                        </form>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('sesion.create2', $perro->id) }}" class="btn btn-success btn-sm w-100">{{ __('Session +') }}</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        function ordenarTabla(columna) {
        // Realizar una solicitud AJAX al servidor para ordenar los datos
        axios.get('perro/ordenar', {
            params: {
                columna: columna
            }
        })
        .then(response => {
            // Actualizar el contenido de la tabla con los datos ordenados recibidos del servidor
            document.getElementById('cuerpoTabla').innerHTML = response.data;
        })
        .catch(error => {
            console.error('Error al ordenar la tabla:', error);
        });
    }
    </script>
</x-app-layout>