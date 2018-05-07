@extends('layouts.app')   
@section('content')

<div class="row"> 
    <div class="col-md-12">
        {!! Form::open(['route' => ['archivo.store'], 'files' => 'true']) !!}
        {!! Form::file('archivos') !!}
      	{!! Form::submit('Cargar archivos', ['class' => 'btn btn-success']) !!}
      	{!! Form::hidden('origen_id', $origen_id) !!}
      	{!! Form::hidden('origen_id', $origen_type) !!}
      	{!! Form::close() !!}
    </div>
</div>