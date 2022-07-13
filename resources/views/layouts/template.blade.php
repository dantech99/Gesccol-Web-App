<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Somos el gestor catastral, habilitado por el IGAC, para realizar las actividades de formación, actualización y conservación catastral, en el municipio de Sahagún – Córdoba.">
    <title>@yield('title')</title>
    

      <!-- Styles -->
      <link rel="stylesheet" href="{{ asset('css/app.css') }}">

      <link rel="shortcut icon" href="{{asset('images/logo-gesccol.png')}}" type="image/x-icon">

      {{-- iconos  --}}
      <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
      
      {{-- cdn  tw-components  --}}
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
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
          color: #000 !important;

        }
        .active:hover{
          color: white !important;
        }

        .img-post{
          
        }
      </style>

  <script src="{{ asset('js/app.js') }}" defer></script>

</head>
<body>
    {{-- header --}}
    @include('layouts.partials.header')

     {{-- navigation --}}

     @include('layouts.partials.navigation')

  


    {{-- contenido --}}
    @yield('content')

    {{-- pie de pagina --}}
    @include('layouts.partials.footer')
    

    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
</body>
</html>