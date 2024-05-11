<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Sessions') }}
        </h2>
    </x-slot>

    <div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">

                @if (count($sesiones) == 0)
                    <p class="py-5 text-center">{{ __('You don\'t have any sessions yet') }}</p>
                @endif

                <!-- Pestañas -->
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="activesession-tab" data-bs-toggle="tab"
                            data-bs-target="#activesession" role="tab" aria-controls="activesession"
                            aria-selected="true">{{ __('Next sessions') }}</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="lastsession-tab" data-bs-toggle="tab" data-bs-target="#lastsession"
                            role="tab" aria-controls="lastsession"
                            aria-selected="false">{{ __('Last sessions') }}</a>
                    </li>
                </ul>

                <!-- Contenido de las Pestañas -->
                <div class="tab-content">
                    @if (!$sesiones)
                        <div class="col-12 col-md-3">{{ __('You don\'t have any sessions yet') }}</div>
                    @else
                        <!--SESIONES PENDIENTES-->
                        <div class="tab-pane fade show active" id="activesession" role="tabpanel"
                            aria-labelledby="activesession-tab">
                            <div class="pt-4">
                                <table id="tablaVerSesiones" class="table table-striped table-bordered align-middle">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">{{ __('Dog\'s name') }}</th>
                                            <th scope="col">{{ __('Owner') }}</th>
                                            <th scope="col">{{ __('Location') }}</th>
                                            <th scope="col">{{ __('Date') }}</th>
                                            <th scope="col">{{ __('Duration') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($sesiones as $sesion)
                                            @if ($sesion->inicio > now())
                                                <tr class="">
                                                    <td>{{ $sesion->perro->nombre }}</td>
                                                    <td>{{ $sesion->perro->tutor_nombre }}
                                                        {{ $sesion->perro->tutor_apellidos }}</td>
                                                    <td>{{ $sesion->calle }}</td>
                                                    <td>{{ $sesion->inicio }}</td>
                                                    <td>{{ $sesion->duracion }} {{ __('minutes') }}</td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!--SESIONES PASADAS ('DONE')-->
                        <div class="tab-pane fade" id="lastsession" role="tabpanel" aria-labelledby="lastsession-tab">
                            <div class="pt-4">                                
                                <table id="tablaVerSesiones" class="table table-striped table-bordered align-middle">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">{{ __('Dog\'s name') }}</th>
                                            <th scope="col">{{ __('Owner') }}</th>
                                            <th scope="col">{{ __('Location') }}</th>
                                            <th scope="col">{{ __('Date') }}</th>
                                            <th scope="col">{{ __('Duration') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($sesiones as $sesion)
                                            @if ($sesion->inicio < now())
                                                <tr class="">
                                                    <td>{{ $sesion->perro->nombre }}</td>
                                                    <td>{{ $sesion->perro->tutor_nombre }}
                                                        {{ $sesion->perro->tutor_apellidos }}</td>
                                                    <td>{{ $sesion->calle }}</td>
                                                    <td>{{ $sesion->inicio }}</td>
                                                    <td>{{ $sesion->duracion }} {{ __('minutes') }}</td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
