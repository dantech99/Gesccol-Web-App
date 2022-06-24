@extends('layouts.template')

@section('title', 'Inicio | Gestion Catastral De Colombia')

@section('content')

{{-- carrusel  --}}
<div class="container m-auto">
    @include('layouts.partials.carrousel')
</div>

{{-- present --}}
<div class="container m-auto my-5 bg-[#ECF2FF] shadow-lg">
    <div class="grid grid-cols-2 gap-4 md:grid-cols-3 ">
        <div class="w-full  h-auto p-6">
            <img src="images/logo-gesccol.png" alt="logo-gesccol" >
        </div>
        <div class="w-full h-auto p-6 col-span-2">
            <h1 class=" text-5xl font-bold text-[#2299AA]">Gesccol</h1>
            <h2 class="text-2xl font-bold text-[#2299AA]">E.I.C.E</h2>
            <h4 class="text-lg text-[#2299AA]">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis facilis iste tenetur assumenda sed consequatur optio corporis, ut dolore dolorum quasi tempora cupiditate doloremque alias consequuntur illum quaerat doloribus, ipsa culpa perferendis repellendus asperiores. Iste voluptas distinctio pariatur, voluptatum facilis reprehenderit debitis quia doloremque, accusamus tempora eligendi voluptatem suscipit porro!</h4>
        </div>
       
    </div>
</div>

{{-- linea divisora  --}}
<div class="container m-auto h-1 bg-[#2299AA] my-8"></div>


{{-- enlaces de interes  --}}
<div class="container m-auto py-8">
    <div class="grid grid-cols-2  md:grid-cols-4">
        <a href="{{Route('servicios.index')}}">
            <div class="w-full  h-auto m-1 flex flex-col p-9 ">
                <div class="rounded-full w-auto p-4 m-auto bg-white border-4 border-blue-600">
                    <ion-icon name="filing" class="interes"></ion-icon>
                </div>
                <h1 class="m-auto mt-2 text-lg">Guia de tramites y servicios</h1>
            </div>
        </a>

        <a href="{{Route('home.glossary')}}">
            <div class="w-full  h-auto m-1 flex flex-col p-9 ">
                <div class="rounded-full w-auto p-4 m-auto bg-white border-4 border-blue-600">
                    <ion-icon name="journal" class="interes"></ion-icon>
                </div>
                <h1 class="m-auto mt-2 text-lg">Glosario de terminos</h1>
            </div>
        </a>
        <a href="{{Route('home.questions')}}">
            <div class="w-full  h-auto m-1 flex flex-col p-9 ">
                <div class="rounded-full w-auto p-4 m-auto bg-white border-4 border-blue-600">
                    <ion-icon name="help-circle" class="interes"></ion-icon>
                </div>
                <h1 class="m-auto mt-2 text-lg">Preguntas Frecuentes</h1>
            </div>
        </a>
        <a href="{{Route('home.regulations')}}">
            <div class="w-full  h-auto m-1 flex flex-col p-9 ">
                <div class="rounded-full w-auto p-4 m-auto bg-white border-4 border-blue-600">
                    <ion-icon name="warning" class="interes"></ion-icon>
                </div>
                <h1 class="m-auto mt-2 text-lg">Normativas y Legalidades</h1>
            </div>
        </a>
    </div>
</div>

{{-- linea divisora  --}}
<div class="container m-auto h-1 bg-[#2299AA] my-8"></div>



{{-- seccion de noticias  --}}
<section class="container m-auto">
    <div class="container w-full my-5">
        <h1 class="m-auto text-4xl font-bold text-[#2299AA] text-center">Ultimas Noticias e Informes</h1>
    </div>

    <div class="grid grid-cols-1 gap-6 md:grid-cols-3 h-auto py-6">
        @foreach ($posts as $post)
        
       <article class="shadow-2xl">
            <div class="w-full">
                <img src="images/banner-notice.jpeg" alt="" class="w-full">
            </div>
            <div class="w-full p-3 text-[#2299AA] text-xl font-medium hover:underline">
                <a href="{{route('posts.show', $post)}}"><h1>{{$post->title}}</h1></a>
            </div>
       </article>
       @endforeach
    </div>
    <div class="container w-full my-5 text-center">
        <a href="{{Route('posts.index')}}" class="m-auto text-xl font-bold text-[#2299AA]">Ver Mas...</a>
    </div>
</section>


{{-- newletter  --}}
<div class=" container-xl bg-[#ECF2FF] my-10 h-auto">
    <div class="container h-64">
        <div class="m-auto min-w-full h-full  text-center p-10">
            <h1 class="m-auto text-center my-10 text-2xl">Suscribete para recibir mas informacion</h1>
            <form action="" class="flex justify-center" >
                <input type="email" name="email" id="email" class=" w-96 p-1 rounded-md border-2 border-blue-500">
                <button type="submit" class=" ml-1 p-3 bg-emerald-600 text-white">Suscribete</button>
            </form>
        </div>
    </div>
</div>
@endsection

