<x-app-layout>

    <x-slot name="title">
        Create
    </x-slot>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Subir Archivo</div>

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('file.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="file">Seleccionar Archivo:</label>
                                <input type="file" name="file" id="file" class="form-control-file">
                                <input type="text" name="filename" id="filename" class="form-control-file" placeholder="Nombre del documento">
                            </div>
                            <button type="submit" class="btn btn-primary">Subir Archivo</button>
                        </form>

                        <hr>

                        <h2>Archivos Subidos:</h2>
                        <ul class="list-group">
                            @foreach ($files as $file)
                                <li class="list-group-item"><a href="{{ route('file.download', $file) }}">{{ $file->filename }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>