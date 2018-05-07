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
          <th class="text-center">Correo Electronico</th>
          <th class="text-center">Direccion</th>
          <th class="text-center">telefono</th>
          <th class="text-center">Edad</th>
        </tr>
      </thead>
      <tbody>
<!--         @foreach($usuarios as $usuario)
        <tr>
          <td>
            <a href="{{ route('usuario.show', $usuario->id) }}" target="_new">
              {{ $usuario->name }}
            </a>
          </td> -->
          <td class="text-center">{{ $usuario->name }}</td>
					<td class="text-center">{{ $usuario->email }}</td>
					<td class="text-center">{{ $usuario->address }}</td>
					<td class="text-center">{{ $usuario->telephone }}</td>
					<td class="text-center">{{ $usuario->age }}</td>
        </tr>
<!--         @endforeach -->
      </tbody>
    </table>
  </div>
</div>

<!--  sudo chgrp -R www-data storage/logs -->
<!--  sudo chmod -R ug+rwx storage/logs -->

<!--  Es para todas las vistas -->

@endsection

