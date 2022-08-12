@extends('adminlte::page')

@section('title', 'Editando terminos | Gesccol')

@section('content_header')
    <h1>Editor de terminos</h1>
@stop

@section('content')
<x-head.tinymce-config/>
  @if (session('info'))    
        <x-adminlte-alert theme="success" title="Listo!!" dismissable>
                <strong>{{session('info')}}</strong>
         </x-adminlte-alert>
    @endif

    <p class="container">Editando el termino: <strong>{{$glosario->titulo}}</strong> </p>
    <div class="card">
        <div class="card-body">
            {!! Form::model($glosario, ['route' => ['admin.glosario.update', $glosario], 'autocomplete' => 'off', 'method' => 'PUT'])!!}

            <div class="form-group">
                {!! Form::label('titulo', 'titulo') !!}
                {!! Form::text('titulo', null, ['class' => 'form-control', 'placeholder' => 'ingrese el termino']) !!}
            
                @error('titulo')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
    
            <div class="form-group">
                {!! Form::label('description', 'description') !!}
                {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'ingrese la descripcion de la palabra clave']) !!}
            
                @error('description')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
    
                    
            <div class="form-group">
                <p class="font-weight-bold">Abecedario</p>
    
                <label>
                {!! Form::radio('abecedario', 'a') !!}
                    A
                </label><br>
                
                <label>
                    {!! Form::radio('abecedario', 'bcde') !!}
                        B-C-D-E
                </label><br>
    
                <label >
                    {!! Form::radio('abecedario', 'fgh')!!}
                    F-G-H
                </label><br>
    
                <label >
                    {!! Form::radio('abecedario', 'ijkl')!!}
                    I-J-K-L
                </label><br>
    
                <label >
                    {!! Form::radio('abecedario', 'mnop')!!}
                    M-N-O-P
                </label><br>
    
                <label >
                    {!! Form::radio('abecedario', 'qrstuv')!!}
                    Q-E-S-T-U-V
                </label><br>
    
    
                    {{-- MENSAJE DE ERROR --}}
            @error('abecedario')
                    <br>
                    <small class="text-danger">{{$message}}</small>
                @enderror
            </div>

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