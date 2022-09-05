@extends('layouts.template')

@section('title', 'Quienes Somos - Politicas Y Privacidad de los Datos | Gesccol')
    
@section('content')

<header>
    <x-header-bar>
        <h1 class=" text-5xl font-bold text-[#2299AA] m-auto text-center">¿Quienes Somos?</h1>
    </x-header-bar>
</header>

<section class="container m-auto h-auto my-10">
    <div class="grid md:grid-cols-4 grid-cols-1 gap-6">
        {{-- layout-seccion principal --}}
        <div class="container w-full col-span-3">
            <div class="flex bg-blue-700 h-10">
                <h1 class="m-auto ml-5 text-white text-xl font-medium">Politicas y Privacidad de los Datos Personales</h1>
            </div>
            <div class="container h-auto mt-5">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit reprehenderit sit vero neque id exercitationem, itaque, quas totam natus porro rerum dolorum. Qui corporis debitis maiores autem atque fugit provident dolores placeat iusto ducimus laudantium perspiciatis officia ipsum neque, ipsa repellendus praesentium. Temporibus rem quis enim eaque facilis ratione nemo fugiat consequuntur autem, vitae dolores perspiciatis, veniam explicabo aperiam placeat doloremque in. Culpa magni, fugiat recusandae maxime eos aperiam commodi quasi quibusdam cum nobis exercitationem aut. Similique delectus perferendis expedita soluta eius nihil porro repellendus esse impedit, dicta ipsa reiciendis aliquid blanditiis at aliquam! Sapiente temporibus est suscipit quasi perferendis.</p>
            </div>
        </div>

        {{-- layout-aside  --}}
        <aside class="w-full  border border-gray-200 p-5">
           <x-sidebar-nav>
            </x-sidebar-nav>
        </aside>
    </div>
</section>

@endsection