@extends('layouts.app')   
@section('content')

<div class="row"> 
  <div class="col-md-12">
    <h2>
      Lista de Usuarios
    </h2>
  </div>
</div>

<div class="row"> 
  <div class="col-md-10">
    <table class="table table-dark">
      <thead class="thead-dark">
        <tr>
          <th class="text-center">Nombre</th>
          <th class="text-center">Horas</th>
          <th class="text-center">Password</th>
        </tr>
      </thead>
      <tbody>
        @foreach($usuarios as $usuario)
        <tr>
          <td class="text-center">{{ $prestadores->nombre_programa }}</td>
          <td class="text-center">{{ $prestadores->horas_programa }}</td>
          <td class="text-center">{{ $user->name }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

<!--  sudo chgrp -R www-data storage/logs -->
<!--  sudo chmod -R ug+rwx storage/logs -->

<!--  Es para todas las vistas -->

@endsection

