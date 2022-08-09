@extends('adminlte::page')

@section('title', 'Editando Ordenes | Gesccol')

@section('content_header')
    <h1>Editor de Ordenes</h1>
@stop

@section('content')
  @if (session('info'))    
        <x-adminlte-alert theme="success" title="Listo!!" dismissable>
                <strong>{{session('info')}}</strong>
         </x-adminlte-alert>
    @endif

    {{-- <p class="container">Editando el contrato: <strong>{{$order->numerorden}}</strong> </p> --}}
    <div class="card">
        <div class="card-body">
            {!! Form::model($order, ['route' => ['admin.ordenes.update', $order], 'autocomplete' => 'off', 'method' => 'PUT'])!!}

            @include('admin.ordenes.partials.form')

            {!!Form::submit('Actualizar orden', ['class' => 'btn btn-primary'])!!}

            {!! Form::close() !!}
        </div>
    </div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop