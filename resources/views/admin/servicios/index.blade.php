@extends('adminlte::page')

@section('title', 'servicios | Gesccol')

@section('content_header')
     <a href="{{-- {{route('admin.posts.create')}} --}}" class="btn btn-secondary float-right">Nuevo Servicio/Tramite</a>

    <h1>Listado de Servicios y Tramites</h1>
@stop

@section('content')
   <hr class="mt-5">

    @if (session('info'))
        <x-adminlte-alert theme="success" title="Listo!!" dismissable>
            <strong>{{session('info')}}</strong>
        </x-adminlte-alert>
    @endif

    @livewire('admin.service-list')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop