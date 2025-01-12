<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased bg-white">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-cover bg-center" style="background-image: url('https://content.elmueble.com/medio/2023/11/09/lobero-irlandes_8f8766df_231109143259_1994x1325.jpg');">
            <!-- Filtro oscuro para el fondo -->
            <div class="absolute inset-0 bg-black opacity-50"></div>
            
            <div class="relative z-10">
                <a href="/">
                   Iniciar Sesión
                </a>
            </div>

            <div class="relative z-10 w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg border border-gray-200">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
