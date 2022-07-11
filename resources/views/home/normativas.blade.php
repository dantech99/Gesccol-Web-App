@extends('layouts.template')

@section('title', 'Normativas | Gesccol')
    
@section('content')

<header class="container-xl">
    <x-header-bar>
        <h1 class=" text-5xl font-bold text-[#2299AA] m-auto text-center">Normativas y Legalidades</h1>
    </x-header-bar> 
</header>

<div class="container mdp-5 my-6 m-auto">
    <div x-data="{ openedIndex: 1 }" class="flex flex-col p-4">

        
        {{-- ------------------------A------------------------------ --}}
        <div @click="openedIndex == 1 ? openedIndex = -1 : openedIndex = 1" class="mb-5 flex items-center bg-[#BED3F9] border-t border-b border-secondary p-4">
          <p class="text-xl">Decretos</p>
          <span :class="openedIndex == 1 ? 'fa-chevron-down' : 'fa-chevron-up'" class="fas ml-3"></span>
        </div>

        <div x-show.transition.in.duration.800ms="openedIndex == 1" class="border p-4 mb-5  ">
         <strong>Catastro:</strong>
         <p>es un registro administrativo en el que se incluyen todos los bienes inmuebles rústicos, urbanos y de características especiales de un territorio. Es decir, es una especie de inventario estatal de todos los inmuebles</p>
         <strong>Catastro:</strong>
         <p>es un registro administrativo en el que se incluyen todos los bienes inmuebles rústicos, urbanos y de características especiales de un territorio. Es decir, es una especie de inventario estatal de todos los inmuebles</p>
        </div>

        {{------------------------BCDE----------------------- --}}

        <div @click="openedIndex == 2 ? openedIndex = -1 : openedIndex = 2" class="mb-5 flex items-center bg-[#BED3F9] border-t border-b border-secondary p-4">
            <p class="text-xl">Decretos</p>
          <span :class="openedIndex == 2 ? 'fa-chevron-down' : 'fa-chevron-up'" class="fas ml-3"></span>
        </div>
          <div x-show.transition.in.duration.800ms="openedIndex == 2" class="border p-4 mb-5 ">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam varius vel magna lacinia mollis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque ligula neque, imperdiet nec est laoreet, pulvinar commodo odio. Vivamus eget eleifend libero. Fusce dolor nibh, porta eu gravida ut, maximus non erat.
        </div>

          {{-------------------FGH---------------------------- --}}

        <div @click="openedIndex == 3 ? openedIndex = -1 : openedIndex = 3" class="mb-5 flex items-center bg-[#BED3F9] border-t border-b border-secondary p-4">
            <p class="text-xl">Decretos</p>
          <span :class="openedIndex == 3 ? 'fa-chevron-down' : 'fa-chevron-up'" class="fas ml-3"></span>
        </div>
          <div x-show.transition.in.duration.800ms="openedIndex == 3" class="border p-4 mb-5 ">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam varius vel magna lacinia mollis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque ligula neque, imperdiet nec est laoreet, pulvinar commodo odio. Vivamus eget eleifend libero. Fusce dolor nibh, porta eu gravida ut, maximus non erat.
        </div>

          {{---------------------IJKL-------------------------- --}}
          <div @click="openedIndex == 4 ? openedIndex = -1 : openedIndex = 4" class="mb-5 flex items-center bg-[#BED3F9] border-t border-b border-secondary p-4">
            <p class="text-xl">Decretos</p>
          <span :class="openedIndex == 4 ? 'fa-chevron-down' : 'fa-chevron-up'" class="fas ml-3"></span>
        </div>
          <div x-show.transition.in.duration.800ms="openedIndex == 4" class="border p-4 mb-5 ">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam varius vel magna lacinia mollis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque ligula neque, imperdiet nec est laoreet, pulvinar commodo odio. Vivamus eget eleifend libero. Fusce dolor nibh, porta eu gravida ut, maximus non erat.
        </div>

        {{-- -------------------MNOP------------------------------}}
        <div @click="openedIndex == 5 ? openedIndex = -1 : openedIndex = 5" class="mb-5 flex items-center bg-[#BED3F9] border-t border-b border-secondary p-4">
            <p class="text-xl">Decretos</p>
          <span :class="openedIndex == 5 ? 'fa-chevron-down' : 'fa-chevron-up'" class="fas ml-3"></span>
        </div>
          <div x-show.transition.in.duration.800ms="openedIndex == 5" class="border p-4 mb-5 ">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam varius vel magna lacinia mollis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque ligula neque, imperdiet nec est laoreet, pulvinar commodo odio. Vivamus eget eleifend libero. Fusce dolor nibh, porta eu gravida ut, maximus non erat.
        </div>

        {{-- -------------------QRSTUV------------------------------}}
        <div @click="openedIndex == 6 ? openedIndex = -1 : openedIndex = 6" class="mb-5 flex items-center bg-[#BED3F9] border-t border-b border-secondary p-4">
            <p class="text-xl">Decretos</p>
          <span :class="openedIndex == 6 ? 'fa-chevron-down' : 'fa-chevron-up'" class="fas ml-3"></span>
        </div>
          <div x-show.transition.in.duration.800ms="openedIndex == 6" class="border p-4 mb-5 ">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam varius vel magna lacinia mollis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque ligula neque, imperdiet nec est laoreet, pulvinar commodo odio. Vivamus eget eleifend libero. Fusce dolor nibh, porta eu gravida ut, maximus non erat.
        </div>
      </div>
</div>


@endsection