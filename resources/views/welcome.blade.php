<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Reserva Clases de Mascotas</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    
    <style>
        /* Estilos generales */
        body {
            font-family: 'Figtree', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f7f7f7;
        }

        /* Navbar */
        .navbar {
            background-color: #2d3e50;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }

        .navbar a {
            color: white;
            font-size: 1.1rem;
            margin-right: 20px;
            text-decoration: none;
            padding: 8px 16px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .navbar a:hover {
            background-color: #4b5f73;
        }

        .navbar .logo {
            font-size: 1.5rem;
            font-weight: bold;
        }

        /* Header con imagen de fondo */
        .header {
            background-image: url('https://via.placeholder.com/1200x600'); /* Reemplazar con tu imagen */
            background-size: cover;
            background-position: center;
            color: black; /* Cambio a negro */
            padding: 150px 20px 100px;
            text-align: center;
        }

        .header h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .header p {
            font-size: 1.25rem;
            margin-bottom: 40px;
        }

        /* Estilos de enlaces en el header */
        .header a {
            color: white;
            font-size: 1.25rem;
            font-weight: bold;
            margin: 0 15px;
            text-decoration: none;
            border: 2px solid white;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }

        .header a:hover {
            background-color: white;
            color: #333;
        }

        /* Sección principal de la página */
        .main-content {
            padding: 50px 20px;
            text-align: center;
        }

        .main-content h2 {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .main-content p {
            font-size: 1.125rem;
            color: #555;
        }

        /* Sección de clases */
        .classes {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            padding: 50px 20px;
            background-color: #fafafa;
        }

        .class-card {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            width: 300px;
            padding: 20px;
            margin-bottom: 30px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .class-card:hover {
            transform: translateY(-10px);
        }

        .class-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 5px;
        }

        .class-card h3 {
            font-size: 1.5rem;
            margin-top: 15px;
        }

        .class-card p {
            color: #777;
            margin: 10px 0;
        }

        .class-card a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #2d3e50;
            color: white;
            font-weight: bold;
            border-radius: 5px;
            text-decoration: none;
            margin-top: 15px;
            transition: background-color 0.3s;
        }

        .class-card a:hover {
            background-color: #4b5f73;
        }

        /* Footer */
        .footer {
            background-color: #2d3e50;
            color: white;
            text-align: center;
            padding: 20px;
        }

        .footer a {
            color: #ddd;
            text-decoration: none;
            font-size: 1rem;
            padding: 5px 10px;
            transition: color 0.3s;
        }

        .footer a:hover {
            color: white;
        }

        /* Estilos responsivos */
        @media (max-width: 768px) {
            .navbar a {
                font-size: 1rem;
            }

            .header h1 {
                font-size: 2.5rem;
            }

            .header p {
                font-size: 1rem;
            }

            .main-content h2 {
                font-size: 1.5rem;
            }

            .main-content p {
                font-size: 1rem;
            }

            .classes {
                flex-direction: column;
                align-items: center;
            }

            .class-card {
                width: 90%;
                margin-bottom: 20px;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <div class="navbar">
        <div class="logo">Reserva Mascotas</div>
        <div>
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}">Ir al Dashboard</a>
                @else
                    <a href="{{ route('login') }}">Iniciar sesión</a>
                    <a href="{{ route('register') }}">Registrarse</a>
                @endauth
            @endif
        </div>
    </div>

    <!-- Header con imagen de fondo -->
    <div class="header">
        <h1>Clases para tus Mascotas</h1>
        <p>Reserva las mejores clases de entrenamiento para tus amigos peludos.</p>
        <a href="#clases">Ver Clases</a>
    </div>

    <!-- Contenido principal -->
    <div class="main-content">
        <h2>¿Por qué elegirnos?</h2>
        <p>Ofrecemos clases especializadas para perros, gatos y otros animales. Nuestros entrenadores expertos brindan un ambiente amigable y seguro para tu mascota.</p>
    </div>

    <!-- Sección de clases -->
    <div id="clases" class="classes">
        <div class="class-card">
            <img src="https://culturacanina.com/wp-content/uploads/2020/12/FB_IMG_1609448455028-1.jpg" alt="Clase de Perro">
            <h3>Entrenamiento para Perros</h3>
            <p>Ayuda a tu perro a aprender trucos y mejorar su comportamiento.</p>
            <a href="{{ route('register') }}">Registrate y Reserva tu Clase</a>
        </div>
        <div class="class-card">
            <img src="https://mxc.com.mx/wp-content/uploads/2024/08/perros.jpg-3.jpg" alt="Clase de Gato">
            <h3>Entrenamiento para Gatos</h3>
            <p>Mejora la obediencia y el comportamiento de tu gato.</p>
            <a href="{{ route('register') }}">Registrate y Reserva tu Clase</a>
        </div>
        <div class="class-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSQ5cX0mLIjuKTbaX9K6mk1ISF-OQSHOreyHQ&s" alt="Entrenamiento para otros animales">
            <h3>Otros Animales</h3>
            <p>Clases personalizadas para animales exóticos.</p>
            <a href="{{ route('register') }}">Registrate y Reserva tu Clase</a>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>&copy; 2025 Reserva Mascotas. Todos los derechos reservados.</p>
        <a href="#">Política de privacidad</a> | <a href="#">Términos de uso</a>
    </div>
</body>
</html>
