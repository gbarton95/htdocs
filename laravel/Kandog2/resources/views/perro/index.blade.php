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

                    <!--SI NO HAY PERROS...-->
                    <div class="row col-12 justify-content-between d-flex">
                        @if(count($perros)==0)
                            {{__('Insert your very first client!')}} 
                        @endif
                        <a href="{{ route('perro.create') }}" class="btn btn-success btn-sm" style="width: 150px;">{{__('Create new dog')}} </a>
                    </div>

                    <!--SI HAY PERROS...-->
                    <form action="{{ route('perro.search') }}" class="buscador" method="POST">
                        @csrf
                        <input type="text" id="searchDog" name="searchDog"><button type="submit">OK</button>
                        {{-- <input type="image" class="lupa" src="{{ asset('images/lupa.png') }}"> --}}
                        <!--Un input type="image" actúa como botón de envío por defecto cuando se coloca dentro de un formulario!!-->
                    </form>

                    <!--TABLA VISTA PERROS-->
                    <div class="row">
                        <table id="tablaVerPerros" class="table" @if($perros->isEmpty()) hidden="true" @endif>
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">{{__('Owner')}}</th>
                                    <th scope="col">{{__('Name')}}</th>
                                    <th scope="col">{{__('Age')}}</th>
                                    <th scope="col">{{__('Phone number')}}</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($perros as $perro)
                                    <tr>
                                        <th scope="row">{{ $perro->tutor_nombre }}</th>
                                        <td>{{ $perro->nombre }}</td>
                                        <td>{{ $perro->edad }}</td>
                                        <td>{{ $perro->telefono }}</td>
                                        <td><a href="{{ route('perro.edit', $perro->id) }}"
                                            class="btn btn-primary btn-sm">{{ __('Edit') }}</a></td>
                                        <td>
                                            <form action="{{ route('perro.destroy', $perro->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">{{ __('Delete') }}</button>
                                            </form>
                                        </td>
                                        <td>
                                            <a href="{{ route('sesion.create'), $perro->id }}" class="btn btn-success btn-sm">{{__('Create session')}} </a>
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