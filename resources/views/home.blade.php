@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Bienvenido!!!</div>
                     
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

<!--                     You are logged in! -->
                  Has accedido a tu cuenta exitosamente!!!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection