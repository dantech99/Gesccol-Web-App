
@extends('layouts.template')

@section('title', 'Contrataciones | Gesccol')
    
@section('content')

<header class="container-xl">

    <x-header-bar>
        <h1 class=" text-5xl font-bold text-[#2299AA] m-auto text-center"><a href="{{route('contratos.index')}}"><ion-icon name="arrow-round-back" size="large"></ion-icon></a> Contrataciones</h1>
    </x-header-bar>  
</header>
/
<section class="container m-auto relative py-10 md:px-0 px-2 h-4/5 mb-40">
    <div x-data="
       {
       openTab: 1,
       activeClasses: 'bg-primary text-white',
       inactiveClasses: 'text-body-color hover:bg-[#2299AA] hover:text-white',
       }
        "class="w-full h-full">
       {{-- <div class="flex flex-wrap rounded-lg py-3 px-4 border border-[#E4E4E4]
          ">
          <a href="javascript:void(0)" @click="openTab = 1" :class="openTab === 1 ? activeClasses : inactiveClasses" class="text-sm md:text-base font-medium rounded-md py-3 px-4 lg:px-6 bg-primary text-white mr-2">
          Todos los contratros
          </a>

          <a href="javascript:void(0)" @click="openTab = 2" :class="openTab === 2 ? activeClasses : inactiveClasses" class="text-sm md:text-base font-medium rounded-md py-3 px-4 lg:px-6  text-black mr-2">
          Invitaciones
          </a>
          <a href="javascript:void(0)" @click="openTab = 3" :class="openTab === 3 ? activeClasses : inactiveClasses" class="text-sm md:text-base font-medium rounded-md py-3 px-4 lg:px-6 text-body-color hover:bg-black hover:text-white mr-2">
          En Ejecucion
          </a>
          <a href="javascript:void(0)" @click="openTab = 4" :class="openTab === 4 ? activeClasses : inactiveClasses" class="text-sm md:text-base font-medium rounded-md py-3 px-4 lg:px-6 text-body-color hover:bg-primary hover:text-white">
          Ejecutados y Celebrados
          </a>
         
       </div> --}}
       <div>
          <div x-show="openTab === 1" class="text-body-color text-base leading-relaxed p-6">
                <table class="w-full">
                    <tr class="bg-indigo-300">
                        <th class=" text-center pr-4">N° Orden</th>
                        <th class=" text-center pr-4">Valor</th>
                        <th class=" text-center pr-4">Objeto</th>
                        <th class=" text-center pr-4">descripcion de la compra</th>
                        <th class=" text-center pr-4">Fecha</th>
                    </tr>
                    @foreach ($ordenes as $orden)
                            <tr class="max-h-16">
                                <td class="p-2">{{$orden->numerorden}}</td>
                                <td class="p-2 text-center ">{{$orden->valor}}</td>
                                <td class="p-2 text-center">{{$orden->objeto}}</td>
                                <td class="p-2 text-center"><textarea cols="50" rows="5" disabled class="p-2">{{$orden->descripcion}}</textarea></td>
                                <td class="p-2 w-20 text-center text-xs">{{$orden->created_at->format('Y-m-d')}}</td>
                            </tr>
                    @endforeach
                </table>
                <div class=" mt-6 px-6 py-6 flex justify-center container m-auto ">
                    {{$ordenes->links()}}
                </div>
          </div>
       </div>
    </div>
</section>

@endsection