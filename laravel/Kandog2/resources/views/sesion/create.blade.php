<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('New session') }}
        </h2>
    </x-slot>

    <div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">

                <form action="{{ route('sesion.store') }}" method="POST" class="row g-4 p-4">
                    @csrf
                    
                    <div class="row">
                        <p>{{__('Session for')}}: {{$perro->nombre}}. <br>
                        {{__('This dog lives in')}} {{$perro->ubicacion}}. {{__('Are you going there?')}}</p>                        
                    </div>
                    <div class="form-check col-md-3">
                        <input type="radio" class="form-check-input" id="sameLocation" name="locationOption" value="same" checked>
                        <label class="form-check-label" for="sameLocation">{{__('Yes, same location')}}</label>
                    </div>
                    <div class="pt-0 mt-0 form-check col-md-3">
                        <input type="radio" class="form-check-input" id="differentLocation" name="locationOption" value="different">
                        <label class="form-check-label" for="differentLocation">{{__('No, I\'m going to a different location')}}</label>
                    </div>
                    <div class="mt-0 form-group col-md-6" id="otherLocationInput" style="display: none;">
                        <label for="otherLocation">{{__('Enter the location')}}</label>
                        <input type="text" class="form-control" id="otherLocation" name="otherLocation">
                    </div>

                    <div class="mb-3 col-md-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>

                    <div class="mb-3 col-md-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                      





                    <div class="pull-right">
                        <a class="btn mt-3 btn-secondary" href="{{ route('perro.index') }}"
                            enctype="multipart/form-data">{{ __('Back') }}</a>
                        <input type="submit" class="btn mt-3 btn-primary" value="{{ __('Add session') }}">
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!--Script para el toggle de la ubicación-->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var sameLocationRadio = document.getElementById('sameLocation');
            var differentLocationRadio = document.getElementById('differentLocation');
            var otherLocationInput = document.getElementById('otherLocationInput');
    
            function toggleOtherLocationInput() {
                otherLocationInput.style.display = differentLocationRadio.checked ? 'block' : 'none';
            }
    
            toggleOtherLocationInput();
    
            sameLocationRadio.addEventListener('change', toggleOtherLocationInput);
            differentLocationRadio.addEventListener('change', toggleOtherLocationInput);
        });
    </script>
</x-app-layout>
