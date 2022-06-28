@extends('layouts.template')

@section('title', 'Noticia | ' . $post->title)
    
@section('content')

<section class="container m-auto ">
    <div class="title w-full my-10 p-5">
        <h1 class=" text-4xl text-primary">{{$post->title}}</h1>
    </div>
    <div class="image  h-96 overflow-hidden w-full">
        <img src="{{asset('images/banner-notice.jpeg')}}" alt="" class="object-cover object-center w-full">
    </div>
    <div class="contenido m-auto p-5 md:px-14 md:pt-5">
        <p class=" text-xl text-black">
            {{$post->content}}
        </p>
        <p class=" text-2xl mt-20 text-gray-600">Publicado por: {{$post->author}}</p>
    </div>
</section>

{{-- seccion de relacionados --}}
<section class="container m-auto mb-14">
    <h1 class="text-2xl my-10">Otras entradas relacionadas con la categoria <strong>{{$post->category->name}}</strong></h1>
    <div class="grid md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-3 p-5">
        @foreach ($similares as $similar)
        <div class="bg-gray-200 h-80">
            <div class="w-auto">
                <img src="{{asset('images/banner-notice.jpeg')}}" alt="">
            </div>
            <div class="w-auto p-5">
                <a href="{{route('posts.show', $similar)}}" class="text-xl text-primary">{{$similar->title}}</a>
            </div>
        </div>
        @endforeach


    </div>
</section>

@endsection