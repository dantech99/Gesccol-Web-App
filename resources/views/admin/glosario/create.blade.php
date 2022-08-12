@extends('adminlte::page')

@section('title', 'Creando Terminos | Gesccol')

@section('content_header')

    <h1>Formulario para la creacion de palabras claves del glosario de terminos</h1>
@stop

@section('content')

  <x-head.tinymce-config/>

   <p class="container">Bienvenido al formulario de creacion de palabras claves, aqui podras ingresar nuevas palabras con sus conceptos significado, estas palabras se mostraran en el glosario de terminos</p>

<div class="card">
    <div class="card-body">
        {!! Form::open(['route' => 'admin.glosario.store', 'autocomplete' => 'off']) !!}

        {!! Form::hidden('user_id', auth()->user()->id) !!}

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

        {!! Form::submit('Publicar', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
    </div>
</div>

@stop

@section('css')
   
@stop

@section('js')
   
     
@stop
