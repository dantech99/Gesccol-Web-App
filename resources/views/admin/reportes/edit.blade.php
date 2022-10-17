@extends('adminlte::page')

@section('title', 'Editando Reportes | Gesccol')

@section('content_header')
    <h1>Editor de Reportes</h1>
@stop

@section('content')
   {{-- compoente de tinymice --}}
<x-head.tinymce-config/>

@if (session('info'))
    <x-adminlte-alert theme="success" title="Listo!!" dismissable>
        <strong>{{session('info')}}</strong>
    </x-adminlte-alert>
@endif

 {{-- <p class="container">Editando el reporte: <strong>{{$report->n_radicado}}</strong> </p> --}}


<div class="card">
    <div class="card-body">
        {!! Form::model($reporte, ['route' => ['admin.reportes.update', $reporte], 'autocomplete' => 'off','method' => 'PUT'])!!}

        @include('admin.reportes.partials.formreport')

        {!!Form::submit('Actualizar servicio', ['class' => 'btn btn-primary'])!!}

        {!! Form::close() !!}
    </div>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop