@extends('layouts.template')

@section('title', 'Quienes Somos | Gesccol')
    
@section('content')

<header>
    <x-header-bar>
        <h1 class="text-4xl text-black m-auto text-center font-semibold">¿Quienes Somos?</h1>
    </x-header-bar>
</header>

<section class="container m-auto h-auto my-10">
    <div class="grid md:grid-cols-2 grid-cols-1 gap-6">
        {{-- layout-seccion principal --}}
        <div class="container w-full">
            <div class="flex bg-blue-700 h-10">
                <h1 class="m-auto ml-5 text-white text-xl font-medium">Quienes Somos</h1>
            </div>
            <div class="container h-auto mt-5">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit reprehenderit sit vero neque id exercitationem, itaque, quas totam natus porro rerum dolorum. Qui corporis debitis maiores autem atque fugit provident dolores placeat iusto ducimus laudantium perspiciatis officia ipsum neque, ipsa repellendus praesentium. Temporibus rem quis enim eaque facilis ratione nemo fugiat consequuntur autem, vitae dolores perspiciatis, veniam explicabo aperiam placeat doloremque in. Culpa magni, fugiat recusandae maxime eos aperiam commodi quasi quibusdam cum nobis exercitationem aut. Similique delectus perferendis expedita soluta eius nihil porro repellendus esse impedit, dicta ipsa reiciendis aliquid blanditiis at aliquam! Sapiente temporibus est suscipit quasi perferendis.</p>
            </div>
        </div>

        {{-- layout-aside  --}}
        <aside class="w-full  border border-gray-300 p-5">
            <div class="grid grid-flow-row gap-y-6">
                <div class="container  bg-gray-500 h-full w-full">1</div>
                <div class="container  bg-gray-500 h-full w-full">1</div>
                <div class="container  bg-gray-500 h-full w-full">1</div>
            </div>
        </aside>
    </div>
</section>

@endsection