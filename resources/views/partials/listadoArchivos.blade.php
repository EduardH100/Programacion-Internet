<table class="table">
	<thead>
		<tr>
				<th>Archivo</th>
				<th>Tamaño</th>
				<th>Acciones</th>
		</tr>
	</thead>
	<tbody>
		@foreach($archivos as $archivo)
			<tr>
				<td>{{ $archivo->original_name }}</td>  
				<td>{{ $archivo->size }}</td>  
				<td>
					<a href="{{  route('descarga', $archivo->id)  }}" class="btn btn-sm btn-info">Descargar</a>
					{!! Form::open(['route' => ['archivo.destroy', $archivo->id], 'method' => 'delete']) !!}
					{!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
					{!! Form::close() !!}
				</td>  
		</tr>
		@endforeach
	</tbody>
</table>