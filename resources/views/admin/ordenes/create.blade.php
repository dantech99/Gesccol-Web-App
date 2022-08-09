@extends('adminlte::page')

@section('title', 'Creando orden | Gesccol')

@section('content_header')

    <h1>Formulario para la creacion de una ordern de servicios</h1>
@stop

@section('content')

  <x-head.tinymce-config/>

   <p class="container">Bienvenido al formulario de creacion de contratos, aqui podras introducir los datos para crear un nuevo proceso de contratacion segun su estado</p>

<div class="card">
    <div class="card-body">
        {!! Form::open(['route' => 'admin.ordenes.store', 'autocomplete' => 'off']) !!}

        {!! Form::hidden('user_id', auth()->user()->id) !!}

        @include('admin.ordenes.partials.form')
        
        {!! Form::submit('Publicar', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
    </div>
</div>

@stop

@section('css')
   
@stop

@section('js')
   
     
@stop
