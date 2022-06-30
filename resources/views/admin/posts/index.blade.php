@extends('adminlte::page')

@section('title', 'Noticias | Gesccol')

@section('content_header')

    <a href="{{route('admin.posts.create')}}" class="btn btn-secondary float-right">Nueva Entrada</a>

    <h1>Listado de Noticias, Comunicados e Informes</h1>
@stop

@section('content')


    <hr class="pt-5">
    
    @if (session('info'))
        <x-adminlte-alert theme="success" title="Listo!!" dismissable>
            <strong>{{session('info')}}</strong>
        </x-adminlte-alert>
    @endif

@livewire('admin.post-list')

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop