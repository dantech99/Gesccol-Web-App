@extends('layouts.template')

@section('title', 'Noticias Y Comunicados | Gesccol')
    
@section('content')     
<header class="container-xl">
    <x-header-bar>
        <h1 class=" text-5xl font-bold text-[#2299AA] m-auto text-center">Noticias, Informes y comunicados</h1>
    </x-header-bar>  
</header>

{{-- seccion de categorias  --}}

<x-categories/>

{{-- seccion de noticias  --}}
<section class="container m-auto">

    <div class="grid grid-cols-1 gap-6 md:grid-cols-3 h-auto py-6 px-5 md:px-0">
        @foreach ($posts as $post)
        <article class="h-96 max-h-96 ">
                <div class="w-full h-60 overflow-hidden">
                    @if ($post->image)
                        <img src="{{Storage::url($post->image->url)}}" alt="imagenes-gesccol" class="h-full w-full object-cover">
                    @else
                     <img src="images/banner-notice.jpeg" alt="imagenes-gesccol"  class="h-full w-full object-cover">
                    @endif
                   
                </div>
                <div class="w-full p-3 text-[#2299AA] text-2xl font-medium hover:underline">
                    <a href="{{route('posts.show', $post)}}"><h1>{{$post->title}}</h1></a>
                </div>
        </article>
       @endforeach
  
    </div>
    <div class=" mt-6 px-6 py-6 flex justify-center container m-auto ">
        {{$posts->links()}}
    </div>

</section>
@endsection