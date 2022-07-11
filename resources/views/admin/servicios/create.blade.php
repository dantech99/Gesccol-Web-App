@extends('adminlte::page')

@section('title', 'Administracion | crear servicios')

@section('content_header')
    <h1>Formulario para crear un servicio o tramite a ofrecer</h1>
@stop

@section('content')
  <hr class="mt-5">

  <x-head.tinymce-config/>

  <div class="card">
      <div class="card-body">
        {!! Form::open(['route' => 'admin.servicios.store', 'autocomplete' => 'off'])!!}
          {!! Form::hidden('user_id', auth()->user()->id) !!}

          @include('admin.servicios.partials.formservice')

            {!! Form::submit('Publicar', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
      </div>
  </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
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

    </script>
@stop