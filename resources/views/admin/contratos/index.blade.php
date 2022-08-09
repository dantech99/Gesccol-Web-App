@extends('adminlte::page')

@section('title', 'Contrataciones | Gesccol')

@section('content_header')

    <a href="{{route('admin.contratos.create')}}" class="btn btn-secondary float-right">Nueva Contratacion</a>

    <h1>Listado de Contrataciones</h1>
@stop

@section('content')
     <hr class="mt-5">

     @if (session('info'))
        <x-adminlte-alert theme="success" title="Listo!!" dismissable>
            <strong>{{session('info')}}</strong>
        </x-adminlte-alert>
    @endif

    @livewire('admin.contract-list')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <style type="text/css">
        <textarea name=""></textarea>
    </style>
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop