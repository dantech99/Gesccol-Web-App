@extends('layouts.template')

@section('title', 'Contrataciones | Gesccol')
    
@section('content')

<header class="container-xl">
    <x-header-bar>
        <h1 class=" text-5xl font-bold text-[#2299AA] m-auto text-center">Contrataciones</h1>
    </x-header-bar>  
</header>

<section class="container m-auto relative py-10 md:px-0 px-2 h-4/5 mb-40">
    <div x-data="
       {
       openTab: 1,
       activeClasses: 'bg-primary text-white',
       inactiveClasses: 'text-body-color hover:bg-[#2299AA] hover:text-white',
       }
        "class="w-full h-full">
       <div class="flex flex-wrap rounded-lg py-3 px-4 border border-[#E4E4E4]
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
         
       </div>
       <div>
          <div x-show="openTab === 1" class="text-body-color text-base leading-relaxed p-6">
           <!-- component -->
                <table class="w-full">
                    <tr class="bg-indigo-300">
                        <th class=" text-center pr-4">Numero de proceso</th>
                        <th class=" text-center pr-4">Tipo de proceso</th>
                        <th class=" text-center pr-4">estado</th>
                        <th class=" text-center pr-4">Entidad</th>
                        <th class=" text-center pr-4">Objetivo</th>
                        <th class=" text-center pr-4">Cuantia</th>
                        <th class=" text-center pr-4">Fecha</th>
                    </tr>

                    @foreach ($contratos as $contract)
                            <tr class="max-h-16">
                                <td class="p-2"># {{$contract->numeroprocesos}}</td>
                                <td class="p-2 text-center ">{{$contract->status}}</td>
                                <td class="p-2 text-center text-green-600">{{$contract->estado}}</td>
                                <td class="p-2 text-center">{{$contract->entidad}}</td>
                                <td class="p-2 text-center  text-xs"><textarea name="" id="" cols="30" rows="2">{{$contract->objetivo}} </textarea> </td>
                                <td class="p-2 text-center">$ {{$contract->valor}}</td>
                                <td class="p-2 w-20 text-center text-xs">{{$contract->created_at->format('Y-m-d')}}</td>
                            </tr>
                     @endforeach
                </table>
                <div class=" mt-6 px-6 py-6 flex justify-center container m-auto ">
                    {{$contratos->links()}}
                </div>
          </div>
          <div x-show="openTab === 2" class="text-body-color text-base leading-relaxed p-6">
           <!-- component -->
                <table class="w-full">
                    <tr class="bg-indigo-300">
                        <th class=" text-center pr-4">Numero de proceso</th>
                        <th class=" text-center pr-4">Tipo de proceso</th>
                        <th class=" text-center pr-4">estado</th>
                        <th class=" text-center pr-4">Entidad</th>
                        <th class=" text-center pr-4">Objetivo</th>
                        <th class=" text-center pr-4">Cuantia</th>
                        <th class=" text-center pr-4">Fecha</th>
                    </tr>

                    @foreach ($statusone as $contract)
                            <tr class="max-h-16">
                                <td class="p-2"># {{$contract->numeroprocesos}}</td>
                                <td class="p-2 text-center ">{{$contract->status}}</td>
                                <td class="p-2 text-center text-green-600">{{$contract->estado}}</td>
                                <td class="p-2 text-center">{{$contract->entidad}}</td>
                                <td class="p-2 text-center  text-xs"><textarea name="" id="" cols="30" rows="2">{{$contract->objetivo}} </textarea> </td>
                                <td class="p-2 text-center">$ {{$contract->valor}}</td>
                                <td class="p-2 w-20 text-center text-xs">{{$contract->created_at->format('Y-m-d')}}</td>
                            </tr>
                     @endforeach
                </table>
                <div class=" mt-6 px-6 py-6 flex justify-center container m-auto ">
                    {{$statusone->links()}}
                </div>
          </div>


          <div x-show="openTab === 3" class="text-body-color text-base leading-relaxed p-6" style="display: none;">
             <table class="w-full">
                  <tr class="bg-indigo-300">
                        <th class=" text-center pr-4">Numero de proceso</th>
                        <th class=" text-center pr-4">Tipo de proceso</th>
                        <th class=" text-center pr-4">estado</th>
                        <th class=" text-center pr-4">Entidad</th>
                        <th class=" text-center pr-4">Objetivo</th>
                        <th class=" text-center pr-4">Cuantia</th>
                        <th class=" text-center pr-4">Fecha</th>
                    </tr>

                   @foreach ($statustwo as $contract)
                            <tr class="">
                                <td class="p-2"># {{$contract->numeroprocesos}}</td>
                                <td class="p-2 text-center ">{{$contract->status}}</td>
                                <td class="p-2 text-center text-green-600">{{$contract->estado}}</td>
                                <td class="p-2 text-center">{{$contract->entidad}}</td>
                                <td class="p-2 text-center  text-xs"><textarea name="" id="" cols="30" rows="2">{{$contract->objetivo}} </textarea> </td>
                                <td class="p-2 text-center">$ {{$contract->valor}}</td>
                                <td class="p-2 w-20 text-center text-xs">{{$contract->created_at->format('Y-m-d')}}</td>
                            </tr>
                     @endforeach
                </table>
                <div class=" mt-6 px-6 py-6 flex justify-center container m-auto ">
                    {{$statustwo->links()}}
                </div>
          </div>
          <div x-show="openTab === 4" class="text-body-color text-base leading-relaxed p-6" style="display: none;">
            <table class="w-full">
                  <tr class="bg-indigo-300">
                        <th class=" text-center pr-4">Numero de proceso</th>
                        <th class=" text-center pr-4">Tipo de proceso</th>
                        <th class=" text-center pr-4">estado</th>
                        <th class=" text-center pr-4">Entidad</th>
                        <th class=" text-center pr-4">Objetivo</th>
                        <th class=" text-center pr-4">Cuantia</th>
                        <th class=" text-center pr-4">Fecha</th>
                    </tr>
                   @foreach ($statusthree as $contract)
                            <tr class="">
                                <td class="p-2"># {{$contract->numeroprocesos}}</td>
                                <td class="p-2 text-center ">{{$contract->status}}</td>
                                <td class="p-2 text-center text-green-600">{{$contract->estado}}</td>
                                <td class="p-2 text-center">{{$contract->entidad}}</td>
                                <td class="p-2 text-center  text-xs"><textarea name="" id="" cols="30" rows="2">{{$contract->objetivo}} </textarea> </td>
                                <td class="p-2 text-center">$ {{$contract->valor}}</td>
                                <td class="p-2 w-20 text-center text-xs">{{$contract->created_at->format('Y-m-d')}}</td>
                            </tr>
                     @endforeach
                </table>
                 <div class=" mt-6 px-6 py-6 flex justify-center container m-auto ">
                    {{$statusthree->links()}}
                </div>
          </div>
       </div>
    </div>
</section>

@endsection