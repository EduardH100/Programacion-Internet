@extends('layouts.app')

@section('content')

<div class="row">
  <div class="col-md-8">
    <div class="alert alert-info">Agregar programa a: {{ $user->name }}</div>
    
    @if($user->programas->count() > 0)
      {!! Form::open(['route' => ['user.programa.update', $user->id], 'method' => 'PATCH'], ['class' => 'form']) !!}
    @else
      {!! Form::open(['route' => ['user.programa.store', $user->id]], ['class' => 'form']) !!}
    @endif
    
        {!! Form::label('programa_id', 'Seleccione un Programa:', ['class' => 'form-label']) !!}
         
        <select name="programa_id[]" class="form-control" multiple>
            @foreach($programas as $key => $value)
              <option value="{{ $key }}" {{ array_search($key, $misProgramas) !== false ? 'selected' : '' }}>{{ $value }}</option>
            @endforeach
        </select>
  
    
        {!! Form::submit('Aceptar', ['class' => 'btn btn-success']) !!}
    {!! Form::close() !!}
  </div>
</div>

@endsection