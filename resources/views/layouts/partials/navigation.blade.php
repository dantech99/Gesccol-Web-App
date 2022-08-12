<nav role="navigation" class="bg-[#3366CC] shadow xl:block hidden">
  <div class="mx-auto container  px-6 py-2 xl:py-0">
      <div class="flex items-center justify-center">
          <div class="flex">
              <div class="hidden xl:flex md:mr-8 xl:mr-16 text-white">
                  <a href="/" class="focus:text-indigo-700 border-b-2 border-transparent  flex px-5 items-center py-6 text-lg leading-5  hover:bg-[#85a133]   focus:bg-gray-100 focus:outline-none transition duration-150 ease-in-out">
                      Inicio
                  </a>
                  <a href="{{Route('servicios.index')}}" class="focus:text-indigo-700 border-b-2 border-transparent  flex px-5 items-center py-6 text-lg leading-5  hover:bg-[#85a133] focus:bg-gray-100 focus:outline-none transition duration-150 ease-in-out">
                      
                      <p class="{{request()->routeIs('servicios.index') ? 'active' : ''}}">Tramites y Servicios</p>
                  </a>
                  <a href="{{Route('posts.index')}}" class="{{request()->routeIs('posts.index') ? 'active' : ''}}focus:text-indigo-700 border-b-2 border-transparent  flex px-5 items-center py-6 text-lg leading-5  hover:bg-[#85a133] focus:bg-gray-100 focus:outline-none transition duration-150 ease-in-out">
                      
                     <p class="{{request()->routeIs('posts.index') ? 'active' : ''}}"> Noticias y Comunicados</p>
                  </a>

                  <a href="{{Route('home.atencion')}}" class="focus:text-indigo-700 border-b-2 border-transparent  flex px-5 items-center py-6 text-lg leading-5   hover:bg-[#85a133] focus:bg-gray-100 focus:outline-none transition duration-150 ease-in-out">
                      
                   <p class="{{request()->routeIs('home.atencion') ? 'active' : ''}}"> Atencion al Ciudadano</p>
                </a>

                 <!-- <a href="{{Route('home.somos')}}" class="focus:text-indigo-700 border-b-2 border-transparent  flex px-5 items-center py-6 text-lg leading-5  hover:bg-[#85a133] focus:bg-gray-100 focus:outline-none transition duration-150 ease-in-out">
                    <p class="{{request()->routeIs('home.somos') ? 'active' : ''}}"> ¿Quienes Somos?</p>
                  </a> -->
                <a href="{{Route('contratos.index')}}" class="focus:text-indigo-700 border-b-2 border-transparent  flex px-5 items-center py-6 text-lg leading-5   hover:bg-[#85a133] focus:bg-gray-100 focus:outline-none transition duration-150 ease-in-out">
                      
                   <p class="{{request()->routeIs('contratos.index') ? 'active' : ''}}">Contrataciones</p>
                </a> 
              </div>
          </div>
      </div>
  </div>
</nav>



<nav>
    <div class="py-4 px-6 w-full flex xl:hidden justify-between  items-center  bg-white  top-0 z-50">
        <div class="flex items-center justify-between w-full">
            <div>
                <span>Menu</span>
            </div>
            <button id="menu" aria-label="open menu" class="focus:outline-none focus:ring-2 focus:ring-gray-600 rounded-md " onclick="sidebarHandler(true)">
                <ion-icon name="menu" class="text-gray-800"></ion-icon>
            </button>
        </div>
       
    </div>
    <!--Mobile responsive sidebar-->
    <div class="absolute w-full h-full transform -translate-x-full z-40 xl:hidden" id="mobile-nav">
        <div class="bg-gray-800 opacity-50 w-full h-full" onclick="sidebarHandler(false)"></div>
        <div class="w-64 z-40 fixed overflow-y-auto  top-0 bg-white shadow h-full flex-col justify-between xl:hidden pb-4 transition duration-150 ease-in-out">
            <div class="px-6 h-full">
                <div class="flex flex-col justify-between h-full w-full">
                    <div>
                        <div class="mt-6 flex w-full items-center justify-between">
                            <div class="flex items-center justify-between w-full">
                                <div class="flex items-center">
                                  <a href="/" class="my-auto ml-5">
                                    <img src="images/logo-gesccol.png" alt="" class="w-52">
                                  </a>
                          
                                </div>
                                <button id="cross" aria-label="close menu" class="focus:outline-none focus:ring-2 rounded-md text-gray-800" onclick="sidebarHandler(false)">
                                    <img class="icon icon-tabler icon-tabler-x" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/light-with-button-svg11.svg" alt="cross" />
                                </button>
                            </div>
                        </div>
                        <ul class="f-m-m">
                            <li>
                                <a class="cursor-pointer" href="/">
                                    <div class="text-gray-800 pt-10">
                                        <div class="flex items-center">
                                            <p tabindex="0" class="focus:outline-none focus:text-indigo-600 text-gray-800 xl:text-base md:text-2xl text-base ml-3">Inicio</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            {{-- <li>
                              <a class="cursor-pointer" href="{{Route('home.somos')}}">
                                  <div class="text-gray-800 pt-10">
                                      <div class="flex items-center">
                                          <p tabindex="0" class="focus:outline-none focus:text-indigo-600 text-gray-800 xl:text-base md:text-2xl text-base ml-3">¿Quienes Somos?</p>
                                      </div>
                                  </div>
                              </a>
                          </li> --}}
                            <li>
                              <a class="cursor-pointer" href="{{Route('servicios.index')}}">
                                  <div class="text-gray-800 pt-10">
                                      <div class="flex items-center">
                                          <p tabindex="0" class="focus:outline-none focus:text-indigo-600 text-gray-800 xl:text-base md:text-2xl text-base ml-3"> Tramites y Servicios</p>
                                      </div>
                                  </div>
                              </a>
                          </li>
                          <li>
                            <a class="cursor-pointer" href="{{Route('posts.index')}}">
                                <div class="text-gray-800 pt-10">
                                    <div class="flex items-center">
                                        <p tabindex="0" class="focus:outline-none focus:text-indigo-600 text-gray-800 xl:text-base md:text-2xl text-base ml-3">Noticias</p>
                                    </div>
                                </div>
                            </a>
                        </li> 
                        <li>
                            <a class="cursor-pointer" href="{{Route('home.atencion')}}">
                                <div class="text-gray-800 pt-10">
                                    <div class="flex items-center">
                                        <p tabindex="0" class="focus:outline-none focus:text-indigo-600 text-gray-800 xl:text-base md:text-2xl text-base ml-3">Atencion al Ciudadano</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="cursor-pointer" href="{{route('contratos.index')}}">
                                <div class="text-gray-800 pt-10">
                                    <div class="flex items-center">
                                        <p tabindex="0" class="focus:outline-none focus:text-indigo-600 text-gray-800 xl:text-base md:text-2xl text-base ml-3">Contrataciones</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</nav>

          
          
          <!-- Code block ends -->

  
<script>
  function dropdownHandler(element) {
    let single = element.getElementsByTagName("ul")[0];
    single.classList.toggle("hidden");
}
function MenuHandler(el, val) {
    let MainList = el.parentElement.parentElement.getElementsByTagName("ul")[0];
    let closeIcon = el.parentElement.parentElement.getElementsByClassName("close-m-menu")[0];
    let showIcon = el.parentElement.parentElement.getElementsByClassName("show-m-menu")[0];
    if (val) {
        MainList.classList.remove("hidden");
        el.classList.add("hidden");
        closeIcon.classList.remove("hidden");
    } else {
        showIcon.classList.remove("hidden");
        MainList.classList.add("hidden");
        el.classList.add("hidden");
    }
}
// ------------------------------------------------------
let sideBar = document.getElementById("mobile-nav");
let menu = document.getElementById("menu");
let cross = document.getElementById("cross");
const sidebarHandler = (check) => {
    if (check) {
        sideBar.style.transform = "translateX(0px)";
        menu.classList.add("hidden");
        cross.classList.remove("hidden");
    } else {
        sideBar.style.transform = "translateX(-100%)";
        menu.classList.remove("hidden");
        cross.classList.add("hidden");
    }
};
let list = document.getElementById("list");
let chevrondown = document.getElementById("chevrondown");
let chevronup = document.getElementById("chevronup");
const listHandler = (check) => {
    if (check) {
        list.classList.remove("hidden");
        chevrondown.classList.remove("hidden");
        chevronup.classList.add("hidden");
    } else {
        list.classList.add("hidden");
        chevrondown.classList.add("hidden");
        chevronup.classList.remove("hidden");
    }
};
</script>