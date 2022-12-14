@extends('adminlte::page')

@section('title', 'Creando Notificacion | Gesccol')

@section('content_header')

    <h1>Formulario para crear Notificaciones</h1>
@stop

@section('content')

  <x-head.tinymce-config/>

   <p class="container">Bienvenido al formulario de creacion de notificaciones por aviso, aqui se podra crear las diferentes notificaciones que se aran por aiviso a los usuarios</p>

<div class="card">
    <div class="card-body">
        {!! Form::open(['route' => 'admin.notificaciones.store', 'autocomplete' => 'off', 'files' => true]) !!}

        {!! Form::hidden('user_id', auth()->user()->id) !!}

        @include('admin.notificaciones.partials.form')
        {!! Form::submit('Publicar', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
    </div>
</div>

@stop

@section('css')
   
@stop

@section('js')
   
     
@stop
