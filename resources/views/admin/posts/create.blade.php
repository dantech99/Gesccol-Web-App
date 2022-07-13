@extends('adminlte::page')

@section('title', 'Creando publicacion | Gesccol')

@section('content_header')

    <h1>Formulario para la creacion de una noticia, informe o comunicado</h1>
@stop

@section('content')

  <x-head.tinymce-config/>

   <p class="container">Bienvenido al formulario de creacion de una noticia, informe o comunicado, aqui podras introducir los datos para crear nuevas entradas segun su categoria</p>

<div class="card">
    <div class="card-body">
        {!! Form::open(['route' => 'admin.posts.store', 'autocomplete' => 'off', 'files' => true]) !!}

        {!! Form::hidden('user_id', auth()->user()->id) !!}

        @include('admin.posts.partials.form')

        {!! Form::submit('Publicar', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
    </div>
</div>

@stop

@section('css')
    <style>
        .image-wrapper{
            position: relative;
            padding-bottom: 56.25%;
        }
        .image-wrapper img{
            position: absolute;
            object-fit: cover;
            width: 100%;
            height: 100%;
        }
    </style>
@stop

@section('js')
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>
    <script>
         $(document).ready( function() {
        $("#title").stringToSlug({
            setEvents: 'keyup keydown blur',
            getPut: '#slug',
            space: '-'
        });
        });

     

        //CAMBIAR IMAGEN Y MOSTRAR VISTA PREVIA
        document.getElementById("file").addEventListener('change', cambiarImagen);

        function cambiarImagen(event){
            let file = event.target.files[0];

            let reader = new FileReader();
            reader.onload = (event) =>{
                document.getElementById("picture").setAttribute('src', event.target.result);
            }
            reader.readAsDataURL(file);
        }
    </script>
@stop