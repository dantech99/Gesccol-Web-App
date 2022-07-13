@extends('adminlte::page')

@section('title', 'Editando contratacion | Gesccol')

@section('content_header')

    <h1>Editor de Contrataciones</h1>
@stop

@section('content')
    @if (session('info'))    
        <x-adminlte-alert theme="success" title="Listo!!" dismissable>
                <strong>{{session('info')}}</strong>
         </x-adminlte-alert>
    @endif

    <p class="container">Editando el contrato: <strong>{{$contract->tipo}}</strong> </p>

<div class="card">
    <div class="card-body">
        {!! Form::model($contract, ['route' => ['admin.contratos.update', $contract], 'autocomplete' => 'off', 'method' => 'PUT'])!!}

        @include('admin.contratos.partials.form')

        {!!Form::submit('Actualizar Contratacion', ['class' => 'btn btn-primary'])!!}

        {!! Form::close() !!}
    </div>
</div>
   
@stop

@section('css')
    
@stop

@section('js')
    
@stop