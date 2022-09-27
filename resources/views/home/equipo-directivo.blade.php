@extends('layouts.template')

@section('title', 'Quienes Somos - Equipo Directivo | Gesccol')
    
@section('content')

<header>
    <x-header-bar>
        <h1 class=" text-5xl font-bold text-[#2299AA] m-auto text-center">¿Quienes Somos?</h1>
    </x-header-bar>
</header>


    <div class="container md:p-5 my-6 m-auto grid grid-cols-1 md:grid-cols-4">
        {{-- layout-seccion principal --}}
        <div class="container w-full col-span-3 p-4">
            <div class="flex bg-blue-700 h-10">
                <h1 class="m-auto ml-5 text-white text-xl font-medium">Equipo Directivo</h1>
            </div>
            <div class="container h-auto mt-5 text-center">
               <h1 class="text-4xl pt-10">Muy Pronto se mostrara nuestro equipo</h1>
               <img src="http://gesccol.gov.co/images/logo-gesccol.png" alt="" width="500">
            </div>
        </div>

        {{-- layout-aside  --}}
        <aside class="w-full  border border-gray-200 p-5">
           <x-sidebar-nav>
            </x-sidebar-nav>
        </aside>
    </div>


@endsection