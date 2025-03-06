@extends('layouts.app')

@section('title', 'Inicio - Piaggio GT')

@section('extra_head')
    <!-- Estilos exclusivos para la página de Inicio -->
    <link rel="stylesheet" href="{{ asset('main/css/inicio.css') }}">
    <!-- AOS CSS para animaciones -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
@endsection

@section('content')

    <!-- Carousel Principal -->
    <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel" data-bs-interval="4000" data-bs-pause="false" data-aos="fade-in">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                    <img src="{{ asset('main/images/Banner1.png') }}" class="d-block w-100" alt="Modelo 1">
                    <!-- Overlay para oscurecer la imagen y mejorar la legibilidad -->
                    <div class="carousel-overlay"></div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('main/images/Banner2.png') }}" class="d-block w-100" alt="Modelo 2">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('main/images/banner3.jpg') }}" class="d-block w-100" alt="Modelo 3">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('main/images/Banner4.png') }}" class="d-block w-100" alt="Modelo 3">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('main/images/Banner5.png') }}" class="d-block w-100" alt="Modelo 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>

    <!-- Sección de Modelos Populares -->
    <div class="container marketing" data-aos="fade-up">
        <div class="row justify-content-center">
            <div class="col-lg-4 text-center mb-4">
                <img src="{{ asset('main/images/apecity.webp') }}" class="img-fluid hover-lift img-small" alt="Ape City">
                <h2 class="fw-normal mt-3">Ape City</h2>
                <p>Por sus características técnicas, confort, avances tecnológicos, diseño y el respaldo de una gran marca, APE CITY es tu mejor opción para el servicio de mototaxi.</p>
                <p><a class="btn btn-secondary" href="{{ route('vehiculos') }}">Ver detalles &raquo;</a></p>
            </div>
            <div class="col-lg-4 text-center mb-4">
                <img src="{{ asset('main/images/apecitynxt.webp') }}" class="img-fluid hover-lift img-small" alt="Ape City NXT">
                <h2 class="fw-normal mt-3">Ape City NXT</h2>
                <p>La suavidad de manejo y las características de Piaggio hacen del Ape City NXT una opción ideal para ofrecer un servicio de calidad a tus clientes.</p>
                <p><a class="btn btn-secondary" href="{{ route('vehiculos') }}">Ver detalles &raquo;</a></p>
            </div>
        </div>
    </div>

    <!-- Sección de Opiniones -->
    <div class="container text-center my-5" data-aos="fade-up">
        <h1 class="display-5">Opiniones</h1>
        <p class="lead">Conoce las opiniones de nuestros clientes satisfechos</p>
    </div>

    <hr class="featurette-divider" data-aos="fade-up">

    <div class="container" data-aos="fade-up">
        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1">“Ape City cambió mi forma de movilizarme.” <span class="text-body-secondary">- Juan Pérez</span></h2>
                <p class="lead">"Desde que adquirí mi Ape City, mi negocio ha mejorado notablemente. Es económico, confiable y el servicio es insuperable. ¡Totalmente recomendado!"</p>
            </div>
            <div class="col-md-5">
                <img src="{{ asset('main/images/TEST1.jpg') }}" class="img-fluid rounded hover-lift" alt="Ape City">
            </div>
        </div>

        <hr class="featurette-divider" data-aos="fade-up">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading fw-normal lh-1">“El Ape City NXT es mi mejor inversión.” <span class="text-body-secondary">- María López</span></h2>
                <p class="lead">"La eficiencia y comodidad del Ape City NXT me han permitido ofrecer un servicio de calidad a mis clientes. Es un vehículo innovador y seguro."</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img src="{{ asset('main/images/TEST2.jpg') }}" class="img-fluid rounded hover-lift" alt="Ape City NXT">
            </div>
        </div>

        <hr class="featurette-divider" data-aos="fade-up">
    </div>

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true
        });
    </script>

@endsection
