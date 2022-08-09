@extends('layouts.template')

@section('title', 'Tramite | ' . $service->title)
    
@section('content')

<section class="container m-auto mt-20">
    <header class=" px-6 md:px-20">
        <div class="container flex"> 
        <ion-icon name="arrow-round-back" ></ion-icon> &nbsp
        <a href="{{route('servicios.index')}}" class="text-2xl">Regresar</a>
          
        </div>
        <h1 class="text-4xl font-semibold mt-5 text-center">{!!$service->title!!}</h1>
        <p class=" text-xl my-5 ">{!!$service->description!!}</p>
    </header>
    <div class="timeline mt-10 px-6 md:px-20">
        {!!$service->content!!}
    </div>
</section>

@endsection