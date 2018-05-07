@extends('layouts.tema')
@section('content')

Contenido de pagina inicio

@endsection

@section('js')

@parent
<script src="{{ asset('vendor/chart.js/chart.min.js') }}"></script>

@endsection