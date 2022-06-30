<footer class="container-lx h-auto border-t-4 border-t-[#3366CC]">
    <div class="container m-auto">
        <div class="logo w-full flex ">
            <img src="{{ asset('images/logo-gesccol.png') }}" alt="logo-gesccol" class=" my-10 mx-10 w-48">
        </div>
        <div class="grid md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-6 w-auto h-auto  mx-10 pb-40 ">
            <div>
                <strong>Lorem ipsum dolor sit amet.</strong>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas, rem!</p>
                <strong>Lorem ipsum dolor sit amet.</strong>
                <p>Lorem ipsum dolor sit.</p>
            </div>
            <div>
                <strong>Lorem ipsum dolor sit amet.</strong>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas, rem!</p>
                <strong>Lorem ipsum dolor sit amet.</strong>
                <p>Lorem ipsum dolor sit.</p>
            </div>
            <div>
                <strong>Lorem ipsum dolor sit amet.</strong>
                <strong>Lorem ipsum dolor sit amet.</strong>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas, rem!</p>
                <p>Lorem ipsum dolor sit.</p>
            </div>
        </div>
    </div>
    <div class="barra container-lx bg-[#3366CC] h-auto p-3 text-center flex justify-between">
        <h1></h1>
        <h1 class="text-white font-semibold">GESCCOL   |  2022  |  Sahagun |</h1>
         @auth 
         <a href="{{route('admin.home')}}" class="text-white">administracion</a>   
         @else 
         <a href="{{route('login')}}" class="text-white h-5 w-5 bg-blue-900"></a> @endauth
    </div>
</footer>