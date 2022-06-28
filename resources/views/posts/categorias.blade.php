@extends('layouts.template')

@section('title', 'Noticias Y Comunicados | Gesccol')
    
@section('content')

{{-- componente categorias  --}}
<x-categories/>

    <section class="container m-auto">
        <div class="container w-full my-5">
            <h1 class="m-auto text-2xl font-bold text-[#2299AA]">{{$category->name}}</h1>
        </div>
    
        <div class="grid grid-cols-1 gap-6 md:grid-cols-3 h-auto py-6 px-5 md:px-0">
            @foreach ($posts as $post)
            <article class=" h-80">
                    <div class="w-full">
                        <img src="{{asset('images/banner-notice.jpeg')}}" alt="" class="w-full">
                    </div>
                    <div class="w-full p-3 text-[#2299AA] text-xl font-medium hover:underline">
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
