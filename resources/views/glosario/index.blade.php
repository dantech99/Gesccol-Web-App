@extends('layouts.template')

@section('title', 'Glosario | Gesccol')
    
@section('content')

{{-- glosario de terminos  --}}
<header class="container-xl">
    <x-header-bar>
        <h1 class=" text-5xl font-bold text-[#2299AA] m-auto text-center">Glosario De Terminos</h1>
    </x-header-bar>
</header>

{{-- descripcion glosario de terminos  --}}
<section class="container m-auto my-6">
    <div class="header py-6 p-5">
        <h1 class="text-2xl">Glosario de Terminos</h1>
        <p>consultar los conceptos de los terminos mas usados en gestion catastral, mantente informado y educado ante cualquier duda</p>
    </div>
    <div class="content">
        <div x-data="{ openedIndex: 1 }" class="flex flex-col p-4">

            
            {{--------------------------A--------------------------------}}
          
            <div @click="openedIndex == 1 ? openedIndex = -1 : openedIndex = 1" class="mb-5 flex items-center bg-white border-t border-b border-secondary p-4">
              <p class="text-xl font-bold text-primary">A</p>
              <span :class="openedIndex == 1 ? 'fa-chevron-down' : 'fa-chevron-up'" class="fas ml-3"></span>
            </div>
            
            <div x-show.transition.in.duration.800ms="openedIndex == 1" class="border p-4 mb-5  bg-yellow-200">
             
            @foreach($glosaries as $glosario)
              @if($glosario->abecedario == 'a')
              <strong>{{ $glosario->titulo }}</strong>
              <p>{!! $glosario->description !!}</p><br>
              @endif 
            @endforeach
            </div>
           
         

            {{------------------------BCDE----------------------- --}}

            <div @click="openedIndex == 2 ? openedIndex = -1 : openedIndex = 2" class="mb-5 flex items-center bg-white border-t border-b border-secondary p-4">
                <p class="text-xl font-bold text-primary">B-C-D-E</p>
              <span :class="openedIndex == 2 ? 'fa-chevron-down' : 'fa-chevron-up'" class="fas ml-3"></span>
            </div>
            <div x-show.transition.in.duration.800ms="openedIndex == 2" class="border p-4 mb-5 bg-yellow-200">
            @foreach($glosaries as $glosario)
              @if($glosario->abecedario == 'bcde')
              <strong>{{ $glosario->titulo }}</strong>
              <p>{!! $glosario->description !!}</p><br>
              @endif 
            @endforeach
            </div>

              {{-------------------FGH---------------------------- --}}

            <div @click="openedIndex == 3 ? openedIndex = -1 : openedIndex = 3" class="mb-5 flex items-center bg-white border-t border-b border-secondary p-4">
                <p class="text-xl font-bold text-primary">F-G-H</p>
              <span :class="openedIndex == 3 ? 'fa-chevron-down' : 'fa-chevron-up'" class="fas ml-3"></span>
            </div>
              <div x-show.transition.in.duration.800ms="openedIndex == 3" class="border p-4 mb-5 bg-yellow-200">
              @foreach($glosaries as $glosario)
                @if($glosario->abecedario == 'fgh')
                <strong>{{$glosario->titulo}}</strong>
                <p>{!! $glosario->description !!}</p><br>
                @endif 
              @endforeach
            </div>

              {{---------------------IJKL-------------------------- --}}
              <div @click="openedIndex == 4 ? openedIndex = -1 : openedIndex = 4" class="mb-5 flex items-center bg-white border-t border-b border-secondary p-4">
                <p class="text-xl font-bold text-primary">I-J-K-L</p>
              <span :class="openedIndex == 4 ? 'fa-chevron-down' : 'fa-chevron-up'" class="fas ml-3"></span>
            </div>
              <div x-show.transition.in.duration.800ms="openedIndex == 4" class="border p-4 mb-5 bg-yellow-200">
              @foreach($glosaries as $glosario)
                @if($glosario->abecedario == 'ijkl')
                <strong>{{ $glosario->titulo }}</strong>
                <p>{!! $glosario->description !!}</p><br>
                @endif 
              @endforeach
            </div>

            {{-- -------------------MNOP------------------------------}}
            <div @click="openedIndex == 5 ? openedIndex = -1 : openedIndex = 5" class="mb-5 flex items-center bg-white border-t border-b border-secondary p-4">
                <p class="text-xl font-bold text-primary">M-N-O-P</p>
              <span :class="openedIndex == 5 ? 'fa-chevron-down' : 'fa-chevron-up'" class="fas ml-3"></span>
            </div>
              <div x-show.transition.in.duration.800ms="openedIndex == 5" class="border p-4 mb-5 bg-yellow-200">
              @foreach($glosaries as $glosario)
                @if($glosario->abecedario == 'mnop')
                <strong>{{ $glosario->titulo }}</strong>
                <p>{!! $glosario->description !!}</p><br>
                @endif 
              @endforeach
            </div>

            {{-- -------------------QRSTUV------------------------------}}
            <div @click="openedIndex == 6 ? openedIndex = -1 : openedIndex = 6" class="mb-5 flex items-center bg-white border-t border-b border-secondary p-4">
                <p class="text-xl font-bold text-primary">Q-R-S-T-U-V</p>
              <span :class="openedIndex == 6 ? 'fa-chevron-down' : 'fa-chevron-up'" class="fas ml-3"></span>
            </div>
              <div x-show.transition.in.duration.800ms="openedIndex == 6" class="border p-4 mb-5 bg-yellow-200">
              @foreach($glosaries as $glosario)
                @if($glosario->abecedario == 'qrstuv')
                <strong>{{ $glosario->titulo }}</strong>
                <p>{!! $glosario->description !!}</p><br>
                @endif 
              @endforeach
            </div>
          </div>
    </div>
</section>

@endsection

