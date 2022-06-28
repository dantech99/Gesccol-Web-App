@extends('layouts.template')

@section('title', 'Tramites Y Servicios | Gesccol')
    
@section('content')

<header class="container-xl">
    <x-header-bar>
        <h1 class="text-4xl text-black m-auto text-center font-semibold">Tramites y Servicios</h1>
    </x-header-bar>  
</header>

<section class="container m-auto h-auto py-5">
    <div class="header w-full h-32 flex flex-col text-center content-center">
        <h1 class=" text-4xl font-bold text-primary m-auto">Tramites</h1>
        <h2 class="text-2xl font-bold text-primary m-auto">Conoce los requisitos para tramite</h2>
    </div>

    {{-- card service  --}}
    <div class="m-auto grid md:grid-cols-4 sm:grid-cols-3 grid-cols-1 gap-3 md:p-0 p-5 ">
        @foreach ($services as $service)
        <div class="w-full h-64 bg-gray-300">
            <div class="w-full h-4/5  flex justify-center items-center text-center bg-btn">
                <h1 class=" text-2xl text-white font-medium">{{$service->title}}</h1>
            </div>
            <div class="w-full h-auto flex justify-center items-center text-center">
                <a href="{{route('servicios.show', $service)}}" class="m-1 w-32 p-2 bg-btn rounded-md text-white">requisitos</a>
            </div>   
        </div>
        @endforeach

    </div>
</section>

@endsection