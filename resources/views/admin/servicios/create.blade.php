@extends('adminlte::page')

@section('title', 'Creando Servicios | Gesccol')

@section('content_header')
    <h1>Formulario para crear un servicio o tramite a ofrecer</h1>
@stop

@section('content')

  <x-head.tinymce-config/>

 <p class="container">Bienvenido al formulario de creacion de un servicio, aqui podras introducir los datos para crear un nuevo servicio el cual sera ofrecido en las oficinas de gestion catastral</p>

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

{{-- <div class="w-1/2">
  <div class="flex">
    <div class="flex flex-col items-center mr-4">
      <div>
        <div class="flex items-center justify-center w-10 h-10 border rounded-full">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-500" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 13l-5 5m0 0l-5-5m5 5V6" />
          </svg>
        </div>
      </div>
      <div class="w-px h-full bg-gray-300"></div>
    </div>
    <div class="pb-8 ">
      <p class="mb-2 text-xl font-bold text-gray-600">Step 1</p>
      <p class="text-gray-700">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. veniam libero facilis minus reprehenderit.
      </p>
    </div>
  </div>
  <div class="flex">
    <div class="flex flex-col items-center mr-4">
      <div>
        <div class="flex items-center justify-center w-10 h-10 border rounded-full">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-500" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 13l-5 5m0 0l-5-5m5 5V6" />
          </svg>
        </div>
      </div>
      <div class="w-px h-full bg-gray-300"></div>
    </div>
    <div class="pb-8 ">
      <p class="mb-2 text-xl font-bold text-gray-600">Step 2</p>
      <p class="text-gray-700">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. veniam libero facilis minus reprehenderit.
      </p>
    </div>
  </div>
  <div class="flex">
    <div class="flex flex-col items-center mr-4">
      <div>
        <div class="flex items-center justify-center w-10 h-10 border rounded-full">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-500" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 13l-5 5m0 0l-5-5m5 5V6" />
          </svg>
        </div>
      </div>
      <div class="w-px h-full bg-gray-300"></div>
    </div>
    <div class="pb-8 ">
      <p class="mb-2 text-xl font-bold text-gray-600">Step 3</p>
      <p class="text-gray-700">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. veniam libero facilis minus reprehenderit.
      </p>
    </div>
  </div>

  <div class="flex">
    <div class="flex flex-col items-center mr-4">
      <div>
        <div class="flex items-center justify-center w-10 h-10 border rounded-full">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-500" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
          </svg>
        </div>
      </div>
    </div>
    <div class="pt-1">
      <p class="mb-2 text-lg font-bold text-gray-600">Done</p>
    </div>
  </div>
</div> --}}