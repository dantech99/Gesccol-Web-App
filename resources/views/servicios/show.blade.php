@extends('layouts.template')

@section('title', 'Tramite | ' . $service->title)
    
@section('content')

<section class="container m-auto mt-20">
    <header class=" px-20">
        <h1 class="text-4xl font-semibold mt-5 text-center">{!!$service->title!!}</h1>
        <p class=" text-xl my-5 ">{!!$service->description!!}</p>
    </header>
    <div class="timeline mt-10 px-20">
        {!!$service->content!!}
    </div>
</section>

@endsection