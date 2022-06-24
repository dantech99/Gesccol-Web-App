@extends('layouts.template')

@section('title', 'Atencion al Ciudadano | Gesccol')
    
@section('content')

{{-- seccion de formulario de contacto  --}}
<section class="container m-auto  bg-[url('/images/oficinas.jpg')] bg-center bg-no-repeat bg-fixed ">
    <div class="grid md:grid-cols-2 gird-cols-1 h-auto p-3">
        <div class="w-full text-right">
            <div class=" m-7 p-3">
                <h1 class=" text-4xl font-bold text-white">Comunicate con Nosotros</h1>
                <br>
                <h2 class="text-2xl font-semibold text-white">dejanos tu informacion y mensaje y pronto te contestaremos</h2>
            </div>
        </div>
        <div class="w-full">
            <div class=" m-7 border p-3">
                <form action="" class="flex flex-col">
                    <input type="text" class="mt-5 p-3 rounded-lg" placeholder="Nombre y Apellidos">
                    <input type="text" class="mt-5 p-3 rounded-lg" placeholder="Correo">
                    <input type="text" class="mt-5 p-3 rounded-lg" placeholder="Telefono">
                    <textarea name="mensaje" id="" rows="15" class="mt-5 rounded-lg p-3" placeholder="Mensaje"></textarea>
                    <button class=" w-28 my-3 p-4 text-xl font-medium boton" type="submit">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</section>

{{-- otros datos de contacto  --}}
<section class="container m-auto my-6">
    <div class="grid grid-cols-2 gap-5 p-5">
        <div class="w-full h-40 shadow-xl flex  flex-col justify-center items-center ">
            <h1 class="text-2xl font-semibold">Telefono</h1>
            <p>Muy Pronto</p>
        </div>
        <div class="w-full h-40 shadow-xl flex  flex-col justify-center items-center">
            <h1 class="text-2xl font-semibold">Email</h1>
            <p>Muy Pronto</p>
        </div>
        <div class="w-full h-40 shadow-xl flex  flex-col justify-center items-center">
            <h1 class="text-2xl font-semibold">Direccion</h1>
            <p>Muy Pronto</p>
        </div>
        <div class="w-full h-40 shadow-xl flex  flex-col justify-center items-center">
            <h1 class="text-2xl font-semibold">Horario De Antencion</h1>
            <p>Muy Pronto</p>
        </div>
    </div>
</section>

<section class="container m-auto py-5 h-96 w-full">
    <h1 class="text-2xl text-center my-6">Ubicacion</h1>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3941.292089474439!2d-75.45074778583984!3d8.9452093927602!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e59634ef03f3e37%3A0xa255ec1d58b4da3b!2sGesccol%20E.I.C.E!5e0!3m2!1ses-419!2sco!4v1655910888770!5m2!1ses-419!2sco" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

@endsection
