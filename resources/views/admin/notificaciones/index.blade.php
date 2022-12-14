@extends('adminlte::page')

@section('title', 'Notificaciones | Gesccol')

@section('content_header')

    <a href="{{route('admin.contratos.create')}}" class="btn btn-secondary float-right">Nueva Notificacion</a>

    <h1>Listado de Notificaciones</h1>
@stop

@section('content')
     <hr class="mt-5">

     @if (session('info'))
        <x-adminlte-alert theme="success" title="Listo!!" dismissable>
            <strong>{{session('info')}}</strong>
        </x-adminlte-alert>
    @endif

    @livewire('')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <style type="text/css">
        <textarea name=""></textarea>
    </style>
@stop
