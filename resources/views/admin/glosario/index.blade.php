@extends('adminlte::page')

@section('title', 'glosario | Gesccol')

@section('content_header')

    <a href="{{route('admin.glosario.create')}}" class="btn btn-secondary float-right">Nueva palabra</a>

    <h1>Listado de terminos claves</h1>
@stop

@section('content')
     <hr class="mt-5">

     @if (session('info'))
        <x-adminlte-alert theme="success" title="Listo!!" dismissable>
            <strong>{{session('info')}}</strong>
        </x-adminlte-alert>
    @endif

    @livewire('admin.glosary-list')
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