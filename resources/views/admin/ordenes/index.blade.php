@extends('adminlte::page')

@section('title', 'Ordenes de servicio | Gesccol')

@section('content_header')

    <a href="{{-- {{route('admin.ordenes.create')}} --}}" class="btn btn-secondary float-right">Nueva Orden</a>

    <h1>Listado de Ordenes de compra y servicio</h1>
@stop

@section('content')
<hr class="mt-5">

@if (session('info'))
    <x-adminlte-alert theme="success" title="Listo!!" dismissable>
        <strong>{{session('info')}}</strong>
    </x-adminlte-alert>
@endif

    @livewire('admin.order-list')
@stop



@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop