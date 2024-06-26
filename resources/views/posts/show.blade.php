@extends('layouts.template')

@section('title', 'Noticia | ' . $post->title)
    
@section('content')

<section class="container m-auto  md:px-14 px-2">
    <div class="container flex mt-5"> 
        <ion-icon name="arrow-round-back" ></ion-icon> &nbsp
        <a href="{{route('posts.index')}}" class="text-2xl">Regresar</a>    
    </div>
      <div class="title w-full my-10 ">
        <h1 class=" text-4xl text-primary">{{$post->title}}</h1>
     </div>
     
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 py-6 ">

        {{-- seccion mai --}}
        <main class="col-span-2">
            <div class="image  h-auto overflow-hidden w-full">
                <img src="{{asset('images/banner-notice.jpeg')}}" alt="imagen-gesccol" class="object-cover object-center w-full">
            </div>
            <span class="text-gray-500 ">fecha de publicacion: {{$post->created_at->format('Y-m-d')}} | Gesccol E.I.C.E</span>
            <div class="contenido m-auto p-5 md:px-2 md:pt-5">
                <p class=" text-xl text-black">
                    {!!$post->content!!}
                </p>
                <p class=" text-2xl mt-20 text-gray-600">Publicado por: {!!$post->author!!}</p>
            </div>
        </main>

        <aside class="flex w-full">
            <div class="fb-page w-full h-full" data-href="https://www.facebook.com/gesccol/" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/gesccol/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/gesccol/">Gesccol EICE</a></blockquote></div>

        </aside>
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