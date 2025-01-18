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
    <body class="font-sans text-gray-900 antialiased">
        <!-- Fondo con imagen temática -->
        <div class="min-h-screen flex flex-col sm:justify-center items-center bg-cover bg-center" style="background-image: url('/imagenes/fondo.jpg');">
            <!-- Tarjeta de contenido -->
            <div class="w-full sm:max-w-md mt-6 px-6 py-8 bg-white/90 backdrop-blur-md shadow-lg rounded-lg">
                <!-- Título opcional -->
                <h2 class="text-center text-2xl font-semibold text-gray-800 dark:text-gray-200 mb-6">Bienvenidos</h2>
                
                <!-- Contenido dinámico -->
                {{ $slot }}

                <!-- Pie de página en la tarjeta -->
                <p class="text-center text-sm text-gray-500 mt-4">
                    ¿No tienes cuenta? 
                    <a href="{{ route('register') }}" class="text-indigo-600 hover:text-indigo-700 font-medium">Regístrate aquí</a>.
                </p>
            </div>
        </div>
    </body>
</html>

