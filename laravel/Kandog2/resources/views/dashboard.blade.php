<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 container-fluid"> <!--Contenedor blanco-->
                    <div class="row justify-center">
                    
                        <div class="col-12 col-lg-9 col-xl-10">
                            <span class="display-2">{{__('Welcome')}}, {{$username}}</span>
                        </div>
                        <!--API DEL TIEMPO-->
                        @if($hoy)
                            <div class="col-10 col-sm-6  col-md-6 col-lg-3 col-xl-2 d-flex flex-col m-3 m-lg-0 cajaTiempo">
                                <span class="text-left" style="font-size: 20px;">{{ __('Today') }}:</span>
                                <div class="d-flex">
                                    <img class="col-6" src="{{ $hoy['icono'] }}" alt="icono de hoy" style="max-width: 120px; max-height:80px;">
                                    <div class="col-6">
                                        <p>Zaragoza</p>
                                        <p>{{ $hoy['temp'] }} ºC</p>
                                        <p>{{ $hoy['viento'] }} km/h</p>
                                    </div>
                                    <!--Avisos si los hubiera de calor>30ºC, aire>50km/h o lluvias mañana-->
                                    @if($maxTemp)
                                        <div class="col-12 d-flex p-0">
                                            <img src="{{asset('images/alertIconSm.png')}}" style="height: 25px; margin-right:2px;">
                                            <p>{{__("Today we are reaching")}} {{$maxTemp}}ºC </p>
                                        </div>
                                    @endif
                                    @if($windy)
                                        <div class="col-12 d-flex p-0">
                                            <img src="{{asset('images/alertIconSm.png')}}" style="height: 25px; margin-right:2px;">
                                            <p>{{__($windy)}} </p>
                                        </div>
                                    @endif
                                    @if($lluviaTomorrow)
                                        <div class="col-12 d-flex p-0">
                                            <img src="{{asset('images/alertIconSm.png')}}" style="height: 25px; margin-right:2px;">
                                            <p>{{__('Warning')}}: {{__($lluviaTomorrow)}} </p>
                                        </div>
                                    @endif
                                    <!--Fin avisos-->
                                </div>
                            </div>
                        @else
                            <div class="col-12 col-sm-10  col-md-8 col-lg-3 col-xl-2 d-flex flex-col m-3 m-sm-0 cajaTiempo">
                                <span class="text-left">{{ __('Today') }}:</span>
                                <div class="d-flex">
                                    <img class="col-6" src="{{ asset('images/noWicon.webp') }}" alt="icono de hoy" style="max-width: 80px;">
                                    <div class="col-6 ml-4">
                                        <span>{{__($no)}}</span>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <!--FIN API TIEMPO-->
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
