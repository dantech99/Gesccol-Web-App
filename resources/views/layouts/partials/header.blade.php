{{-- barra gov --}}
<div class="container-xl flex justify-between  h-10 bg-[#3366CC]">
   <div class="container flex m-auto h-full">
      <img class=" w-auto my-2" src="{{ asset('images/logo.png') }}" alt="">
   </div>
   
   <div class="m-auto flex">
   <form class="flex justify-between">   
       <div class="relative">
           <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
               <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
           </div>
           <input type="search" id="search" class="block p-2 pl-10 w-60 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search" required>
       </div>
       <button type="submit" class="text-white right-2.5 bottom-2.5 bg-blue-800 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Buscar</button>
   </form>
   </div>
</div>

{{-- contendor del logo empresarial --}}
<div class="container m-auto">
<div class=" grid grid-cols-4 h-32 m-auto">
   <div class="flex align-items-center p-4 col-span-3">
      <a href="/" class="my-auto ml-5">
         <img src="{{ asset('images/logo-gesccol.png') }}" alt="" class=" w-80">
      </a>
   </div>

   <div class="container md:flex hidden align-items-center ">
      <a href="https://www.facebook.com/gesccol" target="_blank" class="m-auto"><ion-icon name="logo-facebook"></ion-icon></a>
   </div>
</div>
</div>
