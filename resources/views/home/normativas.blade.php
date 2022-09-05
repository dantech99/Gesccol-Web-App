@extends('layouts.template')

@section('title', 'Normativas | Gesccol')
    
@section('content')

<header class="container-xl">
    <x-header-bar>
        <h1 class=" text-5xl font-bold text-[#2299AA] m-auto text-center">Normativas y Legalidades</h1>
    </x-header-bar> 
</header>

<div class="container mdp-5 my-6 m-auto grid grid-cols-4">
    <div x-data="{ openedIndex: 1 }" class="flex flex-col p-4 col-span-3">

        
     
        <div @click="openedIndex == 1 ? openedIndex = -1 : openedIndex = 1" class="mb-5 flex items-center bg-[#BED3F9] border-t border-b border-secondary p-4">
        <p class="text-xl">Decretos: 2019</p>
        <span :class="openedIndex == 1 ? 'fa-chevron-down' : 'fa-chevron-up'" class="fas ml-3"></span>
        </div>

        <div x-show.transition.in.duration.800ms="openedIndex == 1" class="border p-4 mb-5  ">
         <strong>DECRETO 1983 DE 2019</strong>
         <p>Por medio del cual se expide el Decreto Reglamentario Único del Sector Administrativo de información Estadística  <a href="https://drive.google.com/file/d/1NTqOwyCf-yhkcJWAArOY6vfRfiB-isOE/view?usp=sharing" target="_blank" class="text-blue-500"><ion-icon name="document" size="small"></ion-icon>Ver Documento en pdf</a></p>

        </div>

       

        <div @click="openedIndex == 2 ? openedIndex = -1 : openedIndex = 2" class="mb-5 flex items-center bg-[#BED3F9] border-t border-b border-secondary p-4">
        <p class="text-xl">Decretos: 2021</p>
        <span :class="openedIndex == 2 ? 'fa-chevron-down' : 'fa-chevron-up'" class="fas ml-3"></span>
        </div>
        <div x-show.transition.in.duration.800ms="openedIndex == 2" class="border p-4 mb-5 ">
        <strong>RESOLUCIÓN 1448 DEL 2021 (23 DE SEPTIEMBRE DE 2021)</strong>
        <p>Por medio de la cual se habilita como gestor catastral al municipio de Sahagún-Córdoba se dictan otras disposiciones.  <a href="https://drive.google.com/file/d/1gH6_sx-5fK7K1RYcmdUmVITYPXs7OTVF/view?usp=sharing" target="_blank" class="text-blue-500"><ion-icon name="document" size="small"></ion-icon>Ver Documento en pdf</a></p>
         <br>


        <strong>ACUERDO 035 NOVIEMBRE 29 DE 2021</strong>
        <p>Por medio del cual se autoriza al Señor Alcalde del Municipio de Sahagún crear una empresa industrial y comercial del Estado.<a href="https://drive.google.com/file/d/1jOVTQQZkCOpvozXwRxG44BMwICJsQr3M/view?usp=sharing" target="_blank" class="text-blue-500"><ion-icon name="document" size="small"></ion-icon>Ver Documento en pdf</a></p>
         <br>
        </div>

       

        <div @click="openedIndex == 3 ? openedIndex = -1 : openedIndex = 3" class="mb-5 flex items-center bg-[#BED3F9] border-t border-b border-secondary p-4">
        <p class="text-xl">Decretos: 2022</p>
        <span :class="openedIndex == 3 ? 'fa-chevron-down' : 'fa-chevron-up'" class="fas ml-3"></span>
        </div>
        <div x-show.transition.in.duration.800ms="openedIndex == 3" class="border p-4 mb-5 ">
        <strong>DECRETO 0028 (ENERO 6 DE 2022)</strong>
        <p>Por medio del cual el Señor Alcalde Municipal de Sahagún – Córdoba en atención a la autorización contenida en el acuerdo municipal 035 de noviembre 29 de 2.021 procede a crear la empresa industrial y comercial del Estado.<a href="https://drive.google.com/file/d/1Xk6Y2cdQbW5Psk0rab7uwAt6oFqD1dpO/view?usp=sharing" target="_blank" class="text-blue-500"><ion-icon name="document" size="small"></ion-icon>Ver Documento en pdf</a></p>
         <br>

        <strong>DECRETO Nº 0079 (ENERO 31 DE 2022)</strong>
        <p>Por medio del cual se modifica el Decreto Nº 0028 del 06 de enero del 2022, y se dictan otras disposiciones.<a href="https://drive.google.com/file/d/1SIo2YnJlFKL4CHNhUWLTtTztpQ-pHMrE/view?usp=sharing" target="_blank" class="text-blue-500"><ion-icon name="document" size="small"></ion-icon>Ver Documento en pdf</a></p>
        <br>

        <strong>RESOLUCIÓN 003 (FEBRERO 15 DE 2022)</strong>
        <p>Por medio del cual se fijan los precios unitarios de venta de los productos y servicios que comercializa la empresa industrial y comercial del estado "gestión catastral de colombia" (GESCCOL E.I.C.E) en le municipio de Sahagún Córdoba.<a href="https://drive.google.com/file/d/1Z2V-9kLtzybMbyb7H2tNpgsnxDAe18n-/view?usp=sharing" target="_blank" class="text-blue-500"><ion-icon name="document" size="small"></ion-icon>Ver Documento en pdf</a></p>
        <br>
        </div>
    </div>
     {{-- layout-aside  --}}
    <aside class="w-full  border border-gray-200 p-5">
       <x-sidebar-nav>
        </x-sidebar-nav>
    </aside>
</div>


@endsection