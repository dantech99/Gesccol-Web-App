<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="shortcut icon" href="images/logo-gesccol.png" type="image/x-icon">
        <link rel="shortcut icon" href="{{asset("images/favicon.ico")}}" type="image/x-icon">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
       


        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>

        <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

        {{-- cdn  tw-components  --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
        <script src="https://cdn.tailwindcss.com"></script>

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
      </style>

  <script src="{{ asset('js/app.js') }}" defer></script>
  

    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

          {{-- header --}}
            @include('layouts.partials.header')

            {{-- navigation --}}

            @include('layouts.partials.navigation')

                    

            
            <main>
                {{ $slot }}
            </main>
      

            {{-- pie de pagina --}}
            @include('layouts.partials.footer')
                

  
        @livewireScripts

        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>

       
    </body>
</html>
