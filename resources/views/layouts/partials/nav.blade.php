<!-- component -->
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

<div class="w-full text-gray-700 bg-[#3366CC] shadow dark-mode:text-gray-200">
  <div x-data="{ open: false }" class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
    <div class="p-4 flex flex-row items-center justify-between">
      {{-- <a href="#" class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">Flowtrail UI</a> --}}
      <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline text-white" @click="open = !open">
        <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
          <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
          <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
        </svg>
      </button>
    </div>

    <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-center md:flex-row text-base">
      <a class="{{request()->routeIs('home.index') ? 'active' : ''}} px-4 py-4 mt-2  font-semibold text-white md:mt-0 hover:text-black focus:text-gray-900 hover:bg-[#85a133] focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="/">Inicio</a>

      <a class="{{request()->routeIs('servicios.index') ? 'active' : ''}} px-4 py-4 mt-2  font-semibold text-white md:mt-0 hover:text-black focus:text-gray-900 hover:bg-[#85a133] focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{Route('servicios.index')}}">Tramites Y Servicios</a>


      {{-- items desplegables  --}}
      <div @click.away="open = false" class="relative" x-data="{ open: false }">
        <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-4 mt-2 font-semibold text-left bg-transparent   md:w-auto md:inline md:mt-0 md:ml-4 hover:text-black text-white focus:text-gray-900 hover:bg-[#85a133] focus:bg-[#85a133] focus:outline-none focus:shadow-outline">
          <span>Publicaciones</span>
          <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
        <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full  origin-top-right rounded-md shadow-lg md:w-48 z-50">
          <div class="px-2 py-2 bg-[#3366CC]  shadow text-white text-base">
            <a class="block px-4 py-4 mt-2 font-semibold bg-transparent rounded-lg md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-[#85a133] focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{route('posts.index')}}">Noticias</a>

            <a class="block px-4 py-4 mt-2 font-semibold bg-transparent rounded-lg md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-[#85a133] focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="https://gesccol.gov.co/category/comunicados">Comunicados</a>

            <a class="block px-4 py-4 mt-2 font-semibold bg-transparent rounded-lg md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-[#85a133] focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="https://gesccol.gov.co/category/informes">Informes</a>

            <a class="block px-4 py-4 mt-2 font-semibold bg-transparent rounded-lg md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-[#85a133] focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{route('notificaciones.index')}}">Notificaciones</a>
        
          </div>
        </div>
      </div>

      <a class="{{request()->routeIs('home.atencion') ? 'active' : ''}}  px-4 py-4 mt-2  font-semibold text-white md:mt-0 hover:text-black focus:text-gray-900 hover:bg-[#85a133] focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{Route('home.atencion')}}">Atencion al Ciudadano</a>


     
      {{-- items desplegables  --}}
      <div @click.away="open = false" class="relative" x-data="{ open: false }">
        <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-4 mt-2 font-semibold text-left bg-transparent   md:w-auto md:inline md:mt-0 md:ml-4 hover:text-black text-white focus:text-gray-900 hover:bg-[#85a133] focus:bg-[#85a133] focus:outline-none focus:shadow-outline">
          <span>Gesccol</span>
          <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
        <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full  origin-top-right rounded-md shadow-lg md:w-48 z-50">
          <div class="px-2 py-2 bg-[#3366CC]  shadow text-white text-base">
            <a class="block px-4 py-4 mt-2 font-semibold bg-transparent rounded-lg md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-[#85a133] focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{Route('home.somos')}}">Quienes somos</a>

            <a class="block px-4 py-4 mt-2 font-semibold bg-transparent rounded-lg md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-[#85a133] focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{route('home.administracion')}}">Administracion</a>

            <a class="block px-4 py-4 mt-2 font-semibold bg-transparent rounded-lg md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-[#85a133] focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="{{route('home.regulations')}}">Normativas</a>
        
          </div>
        </div>
      </div>



    </nav>
  </div>
</div>