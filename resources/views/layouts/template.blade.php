<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}

      <!-- Styles -->
      <link rel="stylesheet" href="{{ mix('css/app.css') }}">
 
</head>
<body>
    {{-- header --}}
   @include('layouts.partials.header')

    {{-- contenido --}}
    @yield('content')

    {{-- pie de pagina --}}


     
</body>
</html>