@extends('layouts.template')

@section('title', 'Difusion | Gesccol')

@section('content')

<header class="container-xl">
    <x-header-bar>
        <h1 class=" text-5xl font-bold text-[#2299AA] m-auto text-center">Difusion Catastral</h1>
    </x-header-bar> 
</header>

<section class="container m-auto my-6 md:p-5 ">
	<div class="grid grid-cols-1 sm:grid-cols-2  md:grid-cols-2 gap-5">
        <a href="{{Route('home.regulations')}}">
            <div class="w-full  h-auto m-1 flex flex-col p-9 bg-blue-200 rounded-md">
                <div class="rounded-full w-auto p-4 m-auto bg-white border-4 border-blue-600">
                    <ion-icon name="compass" class="interes"></ion-icon>
                </div>
                <h1 class="m-auto mt-2 text-3xl font-bold">Observatorio</h1>
            </div>
        </a>

        <a href="https://difusion.gesccol.gov.co/" target="_blank">
            <div class="w-full  h-auto m-1 flex flex-col p-9 bg-[url('/images/mapa-catastral.jpg')] bg-cover bg-no-repeat rounded-md">
                <div class="rounded-full w-auto p-4 m-auto bg-white border-4 border-blue-600">
                    <ion-icon name="locate" class="interes"></ion-icon>
                </div>
                <h1 class="m-auto mt-2 text-3xl text-black font-bold ">Geovisor</h1>
            </div>
        </a>
    </div>
</section>



@endsection