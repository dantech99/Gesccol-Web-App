@extends('adminlte::page')

@section('title', 'Administracion | Gesccol')

@section('content_header')

    <h1>Administracion Gesccol</h1>
@stop

@section('content')

    {{-- descripcion inicial  --}}
    <p>Bienvenido al panel administrativo del sito web gesccol.gov.co, en este componente podras mantener actualizado todo el sitio web con nuevas entradas, servicios y comunicados, podras crear eliminar o editar una publicacion, podras configurar tu perfil y configurar el perfil administrativo del sitio.</p>

    <hr class="mt-5">

    <section> 
      <header><h1>Gesccol E.I.C.E</h1></header>

        <main>
            <p>Somos el gestor catastral, habilitado por el IGAC, para realizar las actividades de formación, actualización y conservación catastral, en el municipio de Sahagún – Córdoba.</p>
            <p>La gestión catastral es un servicio público desarrollado a través de los procesos de formación, actualización, conservación y difusión de la información física, jurídica y económica de los predios, para una mejor administración de los territorios.</p>

            <img src="{{ asset('images/logo-gesccol.png') }}" alt="" class="img-fluid img-thumbnail p-3 mb-4">

            <img src="{{ asset('images/oficinas.jpg') }}" alt="" class="img-fluid img-thumbnail p-3 mb-4">


            <img src="{{ asset('images/banner-notice.jpeg') }}" alt="" class="img-fluid img-thumbnail p-3 mb-4">

        </main>
    </section>

@stop











@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop