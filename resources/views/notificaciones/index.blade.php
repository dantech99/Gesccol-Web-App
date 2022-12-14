@extends('layouts.template')

@section('title', 'Notificaciones | Gesccol')
    
@section('content')

<header class="container-xl">
    <x-header-bar>
        <h1 class=" text-5xl font-bold text-[#2299AA] m-auto text-center">Notificaciones por Aviso</h1>
    </x-header-bar>  
</header>

<section class="container md:p-5 my-6 m-auto grid grid-cols-1 md:grid-cols-4">
    <main class="container w-full col-span-3 p-4">
        <div class="flex bg-blue-700 h-10">
            <h1 class="m-auto ml-5 text-white text-xl font-medium">Notificaciones Por Aviso | Gestión Catastral</h1>
        </div> 

        <div class="container h-auto mt-5">
            @foreach ($notifications as $notify)
            <div class="card w-full h-24 border flex justify-between items-center p-5">
                <div class="container flex flex-row items-center">
                    <ion-icon name="notifications-outline"></ion-icon>
                    <h1 class="text-2xl">{{$notify->title}}</h1>
                </div>
                <div class="container flex flex-row items-center justify-end">
                    <a href={{$notify->link}}><ion-icon name="open"></ion-icon></a>
                    <a href=""><ion-icon name="link"></ion-icon></a>
                </div>
            </div>
            @endforeach
        </div>
         <div class=" mt-6 px-6 py-6 flex justify-center container m-auto ">
        {{$notifications->links()}}
    </div>
    </main>

    <aside class="w-full  border border-gray-200 p-5">
           <div class="container flex justify-center py-2">
            <img src="{{asset('images/logo-gesccol.png')}}" alt="" class="w-80">
        </div>
    </aside>
</section>

@endsection