@extends('layouts.template')

@section('title', 'Noticia | ' . $post->title)
    
@section('content')

<section class="container m-auto  md:px-14 px-2">
      <div class="title w-full my-10 ">
        <h1 class=" text-4xl text-primary">{{$post->title}}</h1>
     </div>
     
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 py-6 ">
        <div class="col-span-2">
          
            <div class="image  h-auto overflow-hidden w-full">
                <img src="{{asset('images/banner-notice.jpeg')}}" alt="imagen-gesccol" class="object-cover object-center w-full">
            </div>
            <div class="contenido m-auto p-5 md:px-2 md:pt-5">
                <p class=" text-xl text-black">
                    {!!$post->content!!}
                </p>
                <p class=" text-2xl mt-20 text-gray-600">Publicado por: {!!$post->author!!}</p>
            </div>
        </div>
        <div class="flex">
        <p>hola</p>
        </div>
    </div>
  
</section>

{{-- seccion de relacionados --}}
<section class="container m-auto mb-14 px-2 md:px-14">
    <h1 class="text-2xl my-10">Otras entradas relacionadas con la categoria <strong>{{$post->category->name}}</strong></h1>
    <div class="grid md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-3 ">
        @foreach ($similares as $similar)
        <div class="bg-gray-200 h-auto">
            <div class="w-auto">
                <img src="{{asset('images/banner-notice.jpeg')}}" alt="imagen-gesccol">
            </div>
            <div class="w-auto p-5">
                <a href="{{route('posts.show', $similar)}}" class="text-xl text-primary">{{$similar->title}}</a>
            </div>
        </div>
        @endforeach
    </div>
</section>

@endsection