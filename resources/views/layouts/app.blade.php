<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Piaggio GT - Innovación en movilidad')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Archivo de estilos personalizado -->
    <link rel="stylesheet" href="{{ asset('main/css/styles.css') }}">

    <!-- Estilos personalizados para el carousel (si los usas) -->
    <link href="{{ asset('main/css/carousel.css') }}" rel="stylesheet">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('main/images/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('main/images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('main/images/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('extra_head')
</head>
<body>

<!-- SVG con definiciones (oculto) -->
<svg xmlns="http://www.w3.org/2000/svg" class="d-none">
    <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
    </symbol>
    <!-- ...otros símbolos... -->
</svg>

<!-- Header / Barra de navegación / Navbar-->
<header class="bg-light border-bottom fixed-top">
    <nav class="navbar navbar-expand-lg navbar-light container">
        <a class="navbar-brand" href="{{ route('inicio') }}">
            <img src="{{ asset('main/images/logo1.png') }}" alt="Logo Piaggio GT" style="height:50px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <!--
                <li class="nav-item me-4">
                    <a class="nav-link {{ Route::currentRouteName() == 'inicio' ? 'active' : '' }}"
                       href="{{ route('inicio') }}">Inicio</a>
                </li>
                -->
                <li class="nav-item me-4">
                    <a class="nav-link {{ Route::currentRouteName() == 'empresa' ? 'active' : '' }}"
                       href="{{ route('empresa') }}">Empresa</a>
                </li>
                <li class="nav-item me-4">
                    <a class="nav-link {{ Route::currentRouteName() == 'vehiculos' ? 'active' : '' }}"
                       href="{{ route('vehiculos') }}">Vehículos</a>
                </li>
                <li class="nav-item me-4">
                    <a class="nav-link {{ Route::currentRouteName() == 'servicios' ? 'active' : '' }}"
                       href="{{ route('servicios') }}">Servicios</a>
                </li>
                <!--
                <li class="nav-item me-4">
                    <a class="nav-link {{ Route::currentRouteName() == 'repuestos' ? 'active' : '' }}"
                       href="{{ route('repuestos') }}">Repuestos</a>
                </li>
                -->
                <li class="nav-item me-4">
                    <a class="nav-link {{ Route::currentRouteName() == 'distribuidores' ? 'active' : '' }}"
                       href="{{ route('distribuidores') }}">Ser Distribuidor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'contacto' ? 'active' : '' }}"
                       href="{{ route('contacto') }}">Contacto</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<!-- Contenido principal -->
<main>
    @yield('content')
</main>

<!-- Mensajes flash (éxito o error) -->
<div class="container mt-3">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    @if(session('message'))
        <div class="container mt-3">
            <div class="alert alert-info">
                {{ session('message') }}
            </div>
        </div>
    @endif
</div>

<!-- Footer -->
<footer class="py-4 bg-light border-top">
    <p class="float-end"><a href="#">Volver al principio</a></p>
    <div class="container text-center">
        <p class="mb-0">&copy; 2025 Piaggio GT. Todos los derechos reservados.</p>
        <div class="mt-2 d-flex justify-content-center">
            <a href="https://www.facebook.com/" target="_blank" class="mx-2">
                <img src="{{ asset('main/images/redes-iconos/FBW.png') }}" alt="Facebook" style="height:30px;">
            </a>
            <a href="https://www.instagram.com/" target="_blank" class="mx-2">
                <img src="{{ asset('main/images/redes-iconos/INW.png') }}" alt="Instagram" style="height:30px;">
            </a>
            <a href="https://www.tiktok.com/" target="_blank" class="mx-2">
                <img src="{{ asset('main/images/redes-iconos/TTKW.png') }}" alt="TikTok" style="height:30px;">
            </a>
            <a href="https://www.youtube.com/" target="_blank" class="mx-2">
                <img src="{{ asset('main/images/redes-iconos/YTW.png') }}" alt="YouTube" style="height:30px;">
            </a>
        </div>
    </div>
</footer>

<!-- Bootstrap JS Bundle (incluye Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

<!-- Archivo de JavaScript personalizado -->
<script defer src="{{ asset('main/js/script.js') }}"></script>

</body>
</html>
