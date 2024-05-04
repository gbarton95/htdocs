<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit ') }}{{ $perro->nombre }}
        </h2>
    </x-slot>

    <div class="container h-100 mt-5">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-10 col-md-8 col-lg-6">
                <h3>Update perro</h3>
                <form action="{{ route('perro.update', $perro->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div>
                        <label for="propietario_id">Tournaments</label>
                        <select name="propietario_id" id="propietario_id">
                            @foreach ($propietarios as $propietario)
                                <option value="{{ $propietario->id }}" @if ($propietario->id == $perro->propietario_id) selected @endif>
                                    {{ $propietario->nombre }} {{ $propietario->apellidos }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title"
                            value="{{ $perro->nombre }}" required>
                    </div>
                    {{-- <div class="form-group">
                <label for="body">Body</label>
                <textarea class="form-control" id="body" name="body" rows="3" required>{{ $perro->body }}</textarea>
              </div> --}}
                    <button type="submit" class="btn mt-3 btn-primary">Update perro</button>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>
