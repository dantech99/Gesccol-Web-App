<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Language" content="es">
    <meta name="Keywords" content="gesccol, catastro, catastral, gestion catastral, Gesccol, desenglobe, englobe, sahagun, cordoba, colombia, predios, terrenos">
    <meta name="Robots" content="all"/>
    <meta name="description" content="Somos el gestor catastral, habilitado por el IGAC, para realizar las actividades de formación, actualización y conservación catastral, en el municipio de Sahagún – Córdoba.">
    <meta property="og:image" content="http://gesccol.gov.co/images/logo-gesccol.png">
   
    <title>@yield('title')</title>
    

      <!-- Styles -->
      <link rel="stylesheet" href="{{ asset('css/app.css') }}">

      <link rel="shortcut icon" href="{{asset('images/logo-gesccol.png')}}" type="image/x-icon">

      {{-- iconos  --}}
      <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
      
      {{-- cdn  tw-components  --}}
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

      {{-- flowbite --}}
      <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.1/dist/flowbite.min.css" />

      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
      <script src="https://cdn.tailwindcss.com"></script>

      {{-- sweetalert --}}
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      {{-- styles  --}}
      <style>
        ion-icon {
          font-size: 45px;
          color: #3366CC;
        }

        .interes{
          font-size: 100px;
        }

        .boton{
          background: #3366CC !important;
        }

        .active{
          background: #85A133 !important;

        }
        .active-bg{
          background: #3366CC !important;
          color: white;
        }
        .active:hover{
          color: white !important;
        }

        ul.lista{
          list-style: "\2714";
          color: black;
        }

        /* botones flotantes de aumentar y disminuir fuente */


        .btn-1 {
              text-transform: uppercase; /* Texto en mayusculas */
              font-weight: bold; /* Fuente en negrita o bold */
              border-radius: 5px; /* Borde del boton */
              letter-spacing: 2px; /* Espacio entre letras */
              padding: 10px; /* Relleno del boton */
              position: fixed;
              bottom: 70px;
              right: 5px;
              transition: all 300ms ease 0ms;
              box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
              z-index: 99;
            }

          .btn-2{
              text-transform: uppercase; /* Texto en mayusculas */
              font-weight: bold; /* Fuente en negrita o bold */
              border-radius: 5px; /* Borde del boton */
              letter-spacing: 2px; /* Espacio entre letras */
              padding:10px; /* Relleno del boton */
              position: fixed;
              bottom: 10px;
              right: 5px;
              transition: all 300ms ease 0ms;
              box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
              z-index: 99;
          }

            /*@media only screen and (max-width: 600px) {
              .btn-flotante {
                font-size: 14px;
                padding: 12px 20px;
                bottom: 20px;
                right: 20px;
              }
            }*/


            /* estilos para el cambio de tamaño de la fuente de la web */

             .f0 {
                font-size: 0.8rem;
              }
              .f1 {
                font-size: 0.9rem;
              }
              .f2 {
                font-size: 1rem;
              }
              .f3 {
                font-size: 1.1rem;
              }
              .f4 {
                font-size: 1.2rem;
              }
        
      </style>

  <script src="{{ asset('js/app.js') }}" defer></script>

</head>
<body>
  <a href="#" id="aumentar" class="btn-1 bg-blue-500"><ion-icon name="add-circle" size="small" class="text-white"></ion-icon></a>
  <a href="#" id="disminuir" class="btn-2 bg-blue-500"><ion-icon name="remove-circle" size="small" class="text-white"></ion-icon></a>

    {{-- plugin de paginas --}}
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v14.0" nonce="eZqN0IYy"></script>
    {{-- header --}}
    @include('layouts.partials.header')

     {{-- navigation --}}

    {{-- @include('layouts.partials.navigation') --}}
    @include('layouts.partials.nav')


  


    {{-- contenido --}}
    @yield('content')

    {{-- pie de pagina --}}
    @include('layouts.partials.footer')
    

    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
    <script type="text/javascript">
      function inputSearch() {
        return {
            iconReset: false,
            search: '',
        }
    }

   function imprimir(){
    window.print();
   }

   var classes = ["f0", "f1", "f2", "f3", "f4"];
   var classIndex = 2;
   document.getElementById('aumentar').addEventListener('click', function(){
    let previousClass = classIndex;
    classIndex++;
    classIndex = (classIndex == classes.length) ? classes.length -1 : classIndex;
    changeClass(previousClass, classIndex);
   });
   document.getElementById('disminuir').addEventListener('click', function(){
    let previousClass = classIndex;
    classIndex--;
    classIndex = (classIndex < 0) ? 0 : classIndex;
    changeClass(previousClass, classIndex);
   });

   function changeClass(previous, next){
    if (previous != next) {
      var htmlElement = document.querySelector('html')
      htmlElement.classList.remove(classes[previous]);
      htmlElement.classList.add(classes[next]);
    }
   }



    </script>
</body>
</html>