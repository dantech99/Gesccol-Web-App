<footer class="container-lx h-auto border-t-4 border-t-[#3366CC]">
    <div class="container m-auto">
        <div class="logo w-full flex ">
            <img src="{{ asset('images/logo-gesccol.png') }}" alt="logo-gesccol" class=" my-10 mx-10 w-48">
        </div>
        <div class="grid md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-6 w-auto h-auto  mx-10 pb-10 ">
            <div>
                <strong>Horarios de Atencion</strong>
                <p>Lunes a viernes 8:00 am - 05:00 pm </p>
                <br>
                <strong>Direccion</strong>
                <p>Terminal de Transportes local 1-4</p>
                <p>Sahagun - Cordoba</p>
            </div>
            <div>
                <strong>Correo Electronico</strong>
                <p>info@gesccol.gov.co</p>
                <p>gesccolsas@gmail.com</p>
                <p><a href="{{Route('home.atencion')}}">atencion al ciudadano</a></p>
                <br>
                <strong>Telefono</strong>
                <p>3155547419</p>
            </div>
            <div>
                <strong>Gestion Catastral de Colombia</strong>
                <br>
                <p>NIT: 901560504-0</p>
                <p>Sahagún - Cordoba - Colombia</p>
                <p><a href="{{Route('home.regulations')}}">Normativas</a></p>
                <p><a href="{{Route('glosario.index')}}">Glosario</a></p>
                <p><a href="{{Route('home.administracion')}}">Gesccol</a></p>
                <p><a href="{{Route('home.politicas')}}">Politicas y Privacidad de los Datos</a> </p>
            </div>
        </div>
    </div>
    <div class="barra container-lx bg-[#3366CC] h-auto p-3 text-center flex justify-between">
         @auth 
         <a href="{{route('admin.home')}}" class="text-white">administracion</a>   
         @else 
         <a href="{{route('login')}}" class="text-white h-5 w-5 bg-blue-600"></a> @endauth
        <h1 class="text-white font-semibold">&copy; Copyright <?php echo date('Y'); ?>, Gesccol | Sahagun - Cordoba </h1>
        <h1></h1>
        
    </div>
</footer>