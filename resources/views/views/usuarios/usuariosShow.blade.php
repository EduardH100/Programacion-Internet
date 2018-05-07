@extends('layouts.tema')   

@section('content')

@component('partials.titulo', ['titulo' => 'Usuario'])
    Admin / usuarios / 
@endcomponent


<div class="row">
  <div class="col-md-3">
      {!! Form::open(['route' => 'registro.store']) !!}
      {!! Form::hidden('user_id', $user->id) !!}
      {!! Form::submit('Registrar Entrada', ['class' => 'btn btn-success']) !!}
      {!! Form::close() !!}
  </div>
 
</div>

<div class="row">
    <div class="col-md-10">
<!--       @if($user->programas->count() > 0)
          <ul> Programas asociados: 
              @foreach($user->programas as $programa)
                  <li>
                  Programa: {{ $programa->prog_dep }} <br>
                  Fecha Inicio: {{ $programa->pivot->fecha_inicio }} 
                    
                  {!! Form::open(['route' => ['user.programa.destroy', $user->id, $programa->id]], ['method' => 'delete']) !!}
                  {!! Form::submit('Eliminar', ['class' => 'btn btn-danger btn-sm']) !!}
                  {!! Form::close() !!}
                  </li>
              @endforeach
          </ul>  
      @else
      <span class="alert alert-info">No hay programas relacionados</span>
      @endif -->
    </div>
</div>     

<div class="row"> 
  <div class="col-md-10">
    <table class="table table-bordered">
      <thead class="thead-dark">
        <tr>
          <th class="text-center">Nombre</th>
          <th class="text-center">Correo Electronico</th>
          <th class="text-center">Fecha de Creacion</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="text-center">{{ $user->name }}</td>
          <td class="text-center">{{ $user->email }}</td>
          <td class="text-center">{{ $user->created_at }}</td>
        </tr>
      </tbody>
  </table>
  <br>
    <br>
    {!! Form::open(['action' => ['UserController@destroy', $user->id], 'method' => 'delete']) !!}
    {!! Form::submit('Borrar Usuario', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
  </div>
</div>

@endsection
