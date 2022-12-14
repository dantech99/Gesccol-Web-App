@extends('adminlte::page')

@section('title', 'Editando Notificacion | Gesccol')

@section('content_header')

    <h1>Editor de Notificaciones</h1>
@stop

@section('content')
    @if (session('info'))    
        <x-adminlte-alert theme="success" title="Listo!!" dismissable>
                <strong>{{session('info')}}</strong>
         </x-adminlte-alert>
    @endif

    <p class="container">Editando la notificacion: <strong>{{$notification->title}}</strong> </p>

<div class="card">
    <div class="card-body">
        {!! Form::model($notification, ['route' => ['admin.notificaciones.update', $notification], 'autocomplete' => 'off', 'method' => 'PUT'])!!}

        @include('admin.notificaciones.partials.form')

        {!!Form::submit('Actualizar Contratacion', ['class' => 'btn btn-primary'])!!}

        {!! Form::close() !!}
    </div>
</div>
   
@stop

@section('css')
    
@stop

@section('js')
    
@stop