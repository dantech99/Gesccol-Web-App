@extends('adminlte::page')

@section('title', 'Creando Reportes | Gesccol')

@section('content_header')
    <h1>Formulario para crear un reporte de radicado de un usuario</h1>
@stop

@section('content')

  <x-head.tinymce-config/>

 <p class="container">Bienvenido al formulario de creacion de un reporte, aqui podras introducir los datos para crear un nuevo reporte.</p>

  <div class="card">
      <div class="card-body">
        {!! Form::open(['route' => 'admin.reportes.store', 'autocomplete' => 'off'])!!}
            {!! Form::hidden('user_id', auth()->user()->id) !!}

                @include('admin.reportes.partials.formreport')

            {!! Form::submit('Publicar', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
      </div>
  </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop
