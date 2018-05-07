@extends('layouts.app')  

@section('content')

<div class="row"> 
    <div class="col-md-12">
        <h2>
            Ingresa los nuevos datos del usuario
        </h2>
    </div>
</div>
<br>

<div class="row"> 
    <div class="col-md-8 offset-md-2">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
<!--         <form action = "{{ action('UserController@store') }}" method="POST"> -->
          @if(!isset($user))
              {!! Form::open(['action' => 'UserController@store']) !!}
          @else
              {!! Form::model($user, ['action' => ['UserController@update', $user->id, 'method' => '']]) !!}
          @endif
      
            {{ csrf_field() }}
            <div class = "form-group">
                <label for="name">Nombre:</label>
<!--                 <input type="text" name="name" placeholder="Nombre del usuario" class = "form-control" value="{{ old('name') }}" required> -->
                {!! Form::text('name', null, ['placeholder' => 'Nombre de usuario', 'class' => 'form-control', 'value' => '{{ $user->name }}', 'required']) !!}
            </div>
      
            <div class = "form-group">
                <label for="email">Correo:</label>
<!--                 <input type="email" name="email" placeholder="Correo del usuario" class = "form-control" value="{{ old('email') }}" required> -->
                {!! Form::email('email', null, ['placeholder' => 'Correo de usuario', 'class' => 'form-control', 'value' => '{{ $user->email }}', 'required']) !!}				
						</div>	
			
						<div class = "form-group"> 
      				<label for="password">Contraseña:</label>
							{!! Form::text('password', null, ['placeholder' => 'Contraseña de usuario', 'class' => 'form-control', 'value' => '{{ $user->password }}', 'required']) !!} 
           	</div>
						
						<div class = "form-group"> 
      				<label for="password_conf">Confirmar contraseña:</label>
							{!! Form::text('password_conf', null, ['placeholder' => 'Confirmar contraseña', 'class' => 'form-control', 'value' => '{{ $user->password_conf }}', 'required']) !!}
            	</div>
					
						<div class = "form-group">
                <label for="address">Direccion:</label>
                {!! Form::text('address', null, ['placeholder' => 'Direccion', 'class' => 'form-control', 'value' => '{{ $user->address }}', 'required']) !!}      
            </div>
			
						<div class = "form-group">
                <label for="telephone">Telefono:</label>
                 {!! Form::tel('telephone', null, ['placeholder' => 'Telefono', 'class' => 'form-control', 'value' => '{{ $user->telephone }}', 'maxlength' => '8', 'required']) !!}               
            </div>
			
						<div class = "form-group">
                <label for="age">Edad:</label>
                {!! Form::tel('age', null, ['placeholder' => 'Edad', 'class' => 'form-control', 'value' => '{{ $user->age }}', 'max' => '70', 'min' => '18', 'required']) !!}             
            </div>
			
            <button type = "submit" class="btn-submit" name="submit" >Enviar</button>
        {!! Form::close() !!}
        </form>
    </div>
</div>

@endsection