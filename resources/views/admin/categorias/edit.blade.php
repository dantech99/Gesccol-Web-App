@extends('adminlte::page')

@section('title', 'Editar | Categorias')

@section('content_header')
    <h1>Editar Categoria</h1>
@stop

@section('content')

@if (session('info'))
    <x-adminlte-alert theme="success" title="Listo!!" dismissable>
            <strong>{{session('info')}}</strong>
    </x-adminlte-alert>
@endif
    
    <p class="container">Editando la Categoria: {{$category->name}}</p>


    <section>
        <div class="card">
            <div class="card-body">
                {!! Form::model($category, ['route' => ['admin.categorias.update', $category], 'method' => 'put']) !!}

                <div class="form-group">
                    {!! Form::label('name', 'nombre', []) !!}
                    {!! Form::text('name', null , ['class' => 'form-control', 'placeholder' => 'ingrese el nombre de la categoria']) !!}

                    @error('name')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('slug', 'slug', []) !!}
                    {!! Form::text('slug', null , ['class' => 'form-control', 'placeholder' => 'ingrese el nombre del slug', 'readonly']) !!}

                    @error('slug')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                {!! Form::submit('Actualizar categoria', ['class' => 'btn btn-primary']) !!}

                 {!! Form::close() !!}  
               
            </div>
        </div>
    </section>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>
 
    <script>
        $(document).ready( function(){
        $("#name").stringToSlug({
            setEvents: 'keyup keydown blur',
            getPut: '#slug',
            space: '-'
        });
        });
    </script>
@stop