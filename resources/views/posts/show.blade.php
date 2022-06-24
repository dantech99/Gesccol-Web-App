@extends('layouts.template')

@section('title', 'Tramites Y Servicios | Gesccol')
    
@section('content')

<section class="container m-auto">
    <div class="title w-full my-10">
        <h1 class=" text-4xl text-primary">{{$post->title}}</h1>
    </div>
    <div class="image h-auto w-full">
        <img src="{{asset('images/banner-notice.jpeg')}}" alt="" class="w-full">
    </div>
    <div class="contenido p-5">
        <p class=" text-xl text-black">
            {{$post->content}}
        </p>
    </div>
</section>

{{-- seccion de relacionados --}}
<section class="container m-auto mb-14">
    <h1 class="text-2xl my-10">Otras entradas relacionadas con la categoria <strong>{{$post->category->nombre}}</strong></h1>
    <div class="grid md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-3">
        @foreach ($similares as $similar)
        <div class="bg-gray-200 h-80">
            <div class="w-auto">
                <img src="{{asset('images/banner-notice.jpeg')}}" alt="">
            </div>
            <div class="w-auto p-5">
                <a href="{{route('posts.show', $similar)}}" class="text-xl text-primary">{{$similar->nombre}}</a>
            </div>
        </div>
        @endforeach


    </div>
</section>

@endsection