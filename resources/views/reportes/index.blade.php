            @extends('layouts.template')

@section('title', 'Reportes | Gesccol')
    
@section('content')

<header class="container-xl">

    <x-header-bar>
        <h1 class=" text-5xl font-bold text-[#2299AA] m-auto text-center"><a href="/"><ion-icon name="arrow-round-back" size="large"></ion-icon></a> Reporte de Radicados</h1>
    </x-header-bar>  
</header>

<section class="container m-auto relative py-10 md:px-0 px-2 h-4/5 mb-40">
    <div class="card container p-5 mb-4 border">
        <p><span class="text-danger-500 text-xl">Atencion!! </span> Los radicados que estan en estado <span class="bg-red-400"> Incompleto</span> es por falta de documentos, pedimos a todos los usuarios que tengan radicados del año 2021 asercarse a las oficinas con su numero de radicado.</p>
    </div>

    <div class="buscador grid grid-cols-3 m-5">
        <div class="container col-span-3 text-right">
            <form class="flex justify-center  flex-col  md:flex-row md:justify-end" action="{{ route('reportes.index') }}" method="GET">
                <strong class=" mr-3 p-2">Busqueda con el numero de radicado</strong>
                <input type="text" name="busqueda" value="{{$search}}">
                <input type="text" name="vertodo" class="hidden">
                <button type="submit" class="text-white right-2.5 bottom-2.5 bg-blue-800 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 m-1">Buscar</button>
                <button type="submit" class="text-white right-2.5 bottom-2.5 bg-blue-800 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 m-1">Ver todo</button>

            </form>
        </div>
    </div>
    @if ($reports->count())
    <div class="overflow-auto">
        <table class="w-full">

            <tr class="bg-indigo-300 ">
                <th class=" text-center pr-4">N° Radicado</th>
                <th class=" text-center pr-4">Tipo de Mutacion</th>
                <th class=" text-center pr-4">estado</th>
                <th class=" text-center pr-4">Notificacion</th>
                <th class=" text-center pr-4">observacion</th>
            </tr>
            @foreach ($reports as $reporte)
                <tr class="max-h-16 border">
                    <td class="p-2 text-center border-r-2">{{$reporte->n_radicado}}</td>
                    <td class="p-2 text-center border-r-2">{{$reporte->tipo_mutacion}}</td>
                    <td class="p-2 text-center border-r-2 @if ($reporte->status == 'completo') bg-green-500  @endif @if ($reporte->status == 'incompleto') bg-red-400  @endif ">{{$reporte->status}}</td>
                    <td class="p-2 text-center border-r-2">{{$reporte->notificacion}}</td>
                    <td class="p-2 text-center border-r-2">{{$reporte->observaciones}}</td>
                </tr>
            @endforeach
        </table>
    </div>
    @else
    <div class="container m-5 text-center bg-gray-200 p-5">
        <h1>No hay Registros con esta busqueda</h1>
    </div>
    @endif

    <div class=" mt-6 px-6 py-6 flex justify-center container m-auto ">
        {{$reports->links()}}
    </div>
</section>
@endsection