@extends('layouts.template')

@section('title', 'Tramites Y Servicios | Gesccol')
    
@section('content')
<header class="container-xl">
    <x-header-bar>
        <h1 class="text-4xl text-white m-auto text-center font-semibold">Noticias, Informes y comunicados</h1>
    </x-header-bar>  
</header>

{{-- seccion de categorias  --}}

<section class="container m-auto text-center">
        <h1 class=" text-3xl my-6">Categorias</h1>
        <div class="flex flex-row flex-wrap justify-center w-auto">
            @foreach ($categorias as $category)
           <a href="{{route('posts.categoria', $category)}}" class="p-4  block  w-35 mx-2 my-2 rounded-md bg-gray-200 text-center hover:bg-btn">{{$category->nombre}}</a>
           @endforeach
        </div>

</section>

{{-- seccion de noticias  --}}
<section class="container m-auto">
    <div class="container w-full my-5">
        <h1 class="m-auto text-2xl font-bold text-[#2299AA]">Noticias</h1>
    </div>

    <div class="grid grid-cols-1 gap-6 md:grid-cols-3 h-auto py-6">
        @foreach ($posts as $post)
        <article class="shadow-2xl">
                <div class="w-full">
                    <img src="images/banner-notice.jpeg" alt="" class="w-full">
                </div>
                <div class="w-full p-3 text-[#2299AA] text-xl font-medium hover:underline">
                    <a href="{{route('posts.show', $post)}}"><h1>{{$post->title}}</h1></a>
                </div>
        </article>
       @endforeach
   
        
    </div>
</section>
@endsection