@extends('adminlte::page')

@section('title', 'Reportes | Gesccol')

@section('content_header')

    <a href="{{route('admin.reportes.create')}}" class="btn btn-secondary float-right">Nueva Registro</a>

    <h1>Listado de Tramites</h1>
@stop

@section('content')
     <hr class="mt-5">

     @if (session('info'))
        <x-adminlte-alert theme="success" title="Listo!!" dismissable>
            <strong>{{session('info')}}</strong>
        </x-adminlte-alert>
    @endif

    @livewire('admin.report-list')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
