<x-layouts.app>

    <x-slot name="title">
        Create
    </x-slot>
<div class="container mt-2">

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Score</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('scores.index') }}" enctype="multipart/form-data"> Back</a>
            </div>
        </div>
    </div>

  @if(session('status'))
    <div class="alert alert-success mb-1 mt-1">
        {{ session('status') }}
    </div>
  @endif

  <form action="{{ route('scores.update',$score->id) }}" method="POST">

{{-- para hacer un formulario hay que poner la siguiente linea --}}
@csrf
        @method('PUT')


{{-- Characters --}}
<div>
    <label for="character_id">Characters</label>
    <select name="character_id" id="character_id">
        @foreach ($characters as $character)
            <option value="{{ $character->id }}" @if($character->id == $score->character_id) selected @endif>{{ $character->nom }}</option>
        @endforeach
    </select>
</div>

{{-- Tournaments --}}
 <div>
     <label for="tournament_id">Tournaments</label>
        <select name="tournament_id" id="tournament_id">
            @foreach ($tournaments as $tournament)
                <option value="{{ $tournament->id }}" @if($tournament->id == $score->tournament_id) selected @endif>{{ $tournament->nom }}</option>
            @endforeach
        </select>
</div>



{{-- Name --}}
<div class="form-group">
    <strong>Score</strong>
    <input type="number" name="score" value="{{ $score->score }}" class="form-control" placeholder="score">
</div>

{{-- Boton Enviar --}}
<input type="submit" value="Enviar formulario" />
</form>
</div>

</x-layouts.app>
