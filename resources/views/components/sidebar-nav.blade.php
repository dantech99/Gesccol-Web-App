<div class="grid grid-flow-row gap-y-6">
    <a href="{{Route('home.somos')}}" class="bg-blue-300 p-2 mt-1 {{request()->routeIs('home.somos') ? 'active-bg' : ''}} hover:bg-blue-700 hover:text-white h-full w-full">¿Quienes Somos?</a>

    <a href="{{Route('home.administracion')}}" class="{{request()->routeIs('home.administracion') ? 'active-bg' : ''}} bg-blue-300 p-2 mt-1 hover:bg-blue-700 hover:text-white h-full w-full">Direccion y Administracion</a>

    <a href="{{Route('home.equipo')}}" class="{{request()->routeIs('home.equipo') ? 'active-bg' : ''}} bg-blue-300 p-2 mt-1 hover:bg-blue-700 hover:text-white h-full w-full">Equipo Directivo</a>

    <a href="{{Route('home.regulations')}}" class=" {{request()->routeIs('home.regulations') ? 'active-bg' : ''}} bg-blue-300 p-2 mt-1 hover:bg-blue-700 hover:text-white h-full w-full">Normativas</a>

    <a href="{{Route('home.politicas')}}" class="{{request()->routeIs('home.politicas') ? 'active-bg' : ''}}  bg-blue-300 p-2 mt-1 hover:bg-blue-700 hover:text-white h-full w-full">politica de datos</a>
</div>