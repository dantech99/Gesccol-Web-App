@extends('layouts.template')

@section('title', 'Contrataciones | Gesccol')
    
@section('content')

<header class="container-xl">
    <x-header-bar>
        <h1 class=" text-5xl font-bold text-[#2299AA] m-auto text-center">Contratos, Ordenes de compra y servicio</h1>
    </x-header-bar>  
</header>

<section class="container m-auto mt-10">
    <main class="flex flex-col md:flex-row items-center  justify-center text-[#2299AA]">
        <div class="container w-96 h-56 bg-gray-100 p-5 ml-10 mb-10 flex text-center items-center justify-center border-l-8 border-blue-200">
            <h1 class="text-2xl"><a href="{{route('contratos.contratos')}}">Contrataciones </a></h1>
            <ion-icon name="arrow-round-forward"></ion-icon>
        </div>   
       
       
         <div class="container w-96 h-56 bg-gray-100 p-5 ml-10 mb-10 flex text-center items-center border-l-8 border-blue-200">
            <h1 class="text-2xl"><a href="{{route('contratos.ordenes')}}">Ordenes de compra y servicios</a></h1>
            <ion-icon name="arrow-round-forward"></ion-icon>
        </div>    
    </main>
</section>

@endsection