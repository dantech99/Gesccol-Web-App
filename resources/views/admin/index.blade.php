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
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum inventore vitae ex consequuntur sapiente esse laborum eaque eius quae cupiditate blanditiis quidem repudiandae, expedita obcaecati similique architecto numquam maiores, saepe incidunt! Inventore quo saepe dolorum voluptatem, nemo dolor repudiandae minima. Nemo voluptates deserunt quisquam ducimus, minima, eos cum amet ab assumenda ipsa nulla earum animi quia officia, nesciunt sint necessitatibus. Aliquam aliquid facilis repudiandae eos, officiis? Dolore eius consequatur, exercitationem facere deserunt nobis, sed saepe enim earum eaque nam quas harum totam vero. Exercitationem fugit ea fugiat officia rerum, dolores et asperiores accusamus modi. Esse cumque, non fugit repudiandae reprehenderit?</p>

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