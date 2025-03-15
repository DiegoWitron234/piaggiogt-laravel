@extends('layouts.app')

@section('title', 'Inicio - Piaggio GT')

@section('extra_head')
    <!-- Estilos exclusivos para la página de Inicio -->
    <link rel="stylesheet" href="{{ asset('main/css/inicio.css') }}">
    <!-- AOS CSS para animaciones -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
@endsection

@section('content')


    <!-- Consulta a la BD -->
    @php
        // Obtiene todos los banners. Puedes ajustar la consulta (orden, cantidad, etc.)
        $banners = \App\Models\Banner::orderBy('created_at', 'asc')->get();
    @endphp

    <!-- Carrusel -->
    <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel" data-bs-interval="4000" data-bs-pause="false" data-aos="fade-in">
        <div class="carousel-indicators">
            @foreach ($banners as $banner)
                <button type="button"
                        data-bs-target="#myCarousel"
                        data-bs-slide-to="{{ $loop->index }}"
                        class="{{ $loop->first ? 'active' : '' }}"
                        aria-current="{{ $loop->first ? 'true' : '' }}"
                        aria-label="Slide {{ $loop->index + 1 }}"></button>
            @endforeach
        </div>
        <div class="carousel-inner">
            @foreach ($banners as $banner)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                    <img src="{{ asset('banners/' . $banner->imagen) }}" class="d-block w-100" alt="{{ $banner->titulo }}">
                    <!-- Overlay para oscurecer la imagen, si se requiere -->
                    <div class="carousel-overlay"></div>
                </div>
            @endforeach
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
    <div class="container text-center my-2" data-aos="fade-up">
        <h1 class="display-5">Modelos populares</h1>
        <p class="lead mb-5">Mira nuestros modelos más populares entre nuestros clientes</p>
    </div>

    <div class="container marketing" data-aos="fade-up">
        <div class="row justify-content-center">

            <!-- Bloque del Ape City -->
            <div class="col-lg-4 text-center mb-4">
                <!-- Contenedor que agrupa la imagen principal y los “botones” de color -->
                <div class="color-switcher">
                    <!-- Imagen principal (por defecto mostramos la verde, por ejemplo) -->
                    <img id="apeCityMainImage"
                         src="{{ asset('main/images/ape-city/apecityrojo.webp') }}"
                         class="img-fluid hover-lift img-small"
                         alt="Ape City">

                    <!-- Opciones de color -->
                    <div class="color-options d-flex justify-content-center mt-3">
                        <!-- Cada div representa un color. data-img guarda la ruta de la imagen a mostrar al hacer clic -->
                        <div class="color-circle mx-1"
                             data-img="{{ asset('main/images/ape-city/apecityverde.webp') }}"
                             style="width: 25px; height: 25px; border-radius: 50%; background-color: #006800; cursor: pointer;">
                        </div>

                        <div class="color-circle mx-1"
                             data-img="{{ asset('main/images/ape-city/apecityazuloscuro.webp') }}"
                             style="width: 25px; height: 25px; border-radius: 50%; background-color: #0000b8; cursor: pointer;">
                        </div>

                        <div class="color-circle mx-1"
                             data-img="{{ asset('main/images/ape-city/apecityceleste.webp') }}"
                             style="width: 25px; height: 25px; border-radius: 50%; background-color: #20979f; cursor: pointer;">
                        </div>

                        <div class="color-circle mx-1"
                             data-img="{{ asset('main/images/ape-city/apecitynegro.webp') }}"
                             style="width: 25px; height: 25px; border-radius: 50%; background-color: #000000; cursor: pointer;">
                        </div>

                        <div class="color-circle mx-1"
                             data-img="{{ asset('main/images/ape-city/apecityblanco.webp') }}"
                             style="width: 25px; height: 25px; border-radius: 50%; background-color: #eeeeee; cursor: pointer;">
                        </div>

                        <div class="color-circle mx-1"
                             data-img="{{ asset('main/images/ape-city/apecityceleste.webp') }}"
                             style="width: 25px; height: 25px; border-radius: 50%; background-color: #0a78d7; cursor: pointer;">
                        </div>

                        <div class="color-circle mx-1"
                             data-img="{{ asset('main/images/ape-city/apecityamarillo.webp') }}"
                             style="width: 25px; height: 25px; border-radius: 50%; background-color: #f99e04; cursor: pointer;">
                        </div>

                        <div class="color-circle mx-1"
                             data-img="{{ asset('main/images/ape-city/apecityrojo.webp') }}"
                             style="width: 25px; height: 25px; border-radius: 50%; background-color: #ca0110; cursor: pointer;">
                        </div>
                    </div>
                </div>

                <h2 class="fw-normal mt-3">Ape City</h2>
                <p>Por sus características técnicas, confort, avances tecnológicos, diseño y el respaldo de una gran marca, APE CITY es tu mejor opción para el servicio de mototaxi.</p>
                <p><a class="btn btn-secondary" href="{{ route('vehiculos') }}">Ver detalles &raquo;</a></p>
            </div>

            <!-- Bloque del Ape City NXT+ -->
            <div class="col-lg-4 text-center mb-4">
                <div class="color-switcher">
                    <img id="apeCityNxtMainImage"
                         src="{{ asset('main/images/ape-city-nxt/nxtverde.webp') }}"
                         class="img-fluid hover-lift img-small"
                         alt="Ape City NXT+">

                    <div class="color-options d-flex justify-content-center mt-3">
                        <div class="color-circle mx-1"
                             data-img="{{ asset('main/images/ape-city-nxt/nxtverde.webp') }}"
                             style="width: 25px; height: 25px; border-radius: 50%; background-color: #006800; cursor: pointer;">
                        </div>

                        <div class="color-circle mx-1"
                             data-img="{{ asset('main/images/ape-city-nxt/nxtazuloscuro.webp') }}"
                             style="width: 25px; height: 25px; border-radius: 50%; background-color: #0000b8; cursor: pointer;">
                        </div>

                        <div class="color-circle mx-1"
                             data-img="{{ asset('main/images/ape-city-nxt/nxtceleste.webp') }}"
                             style="width: 25px; height: 25px; border-radius: 50%; background-color: #20979f; cursor: pointer;">
                        </div>

                        <div class="color-circle mx-1"
                             data-img="{{ asset('main/images/ape-city-nxt/nxtnegro.webp') }}"
                             style="width: 25px; height: 25px; border-radius: 50%; background-color: #000000; cursor: pointer;">
                        </div>

                        <div class="color-circle mx-1"
                             data-img="{{ asset('main/images/ape-city-nxt/nxtblanco.webp') }}"
                             style="width: 25px; height: 25px; border-radius: 50%; background-color: #eeeeee; cursor: pointer;">
                        </div>

                        <div class="color-circle mx-1"
                             data-img="{{ asset('main/images/ape-city-nxt/nxtceleste.webp') }}"
                             style="width: 25px; height: 25px; border-radius: 50%; background-color: #0a78d7; cursor: pointer;">
                        </div>

                        <div class="color-circle mx-1"
                             data-img="{{ asset('main/images/ape-city-nxt/nxtamarillo.webp') }}"
                             style="width: 25px; height: 25px; border-radius: 50%; background-color: #f99e04; cursor: pointer;">
                        </div>

                        <div class="color-circle mx-1"
                             data-img="{{ asset('main/images/ape-city-nxt/nxtrojo.webp') }}"
                             style="width: 25px; height: 25px; border-radius: 50%; background-color: #ca0110; cursor: pointer;">
                        </div>
                    </div>
                </div>

                <h2 class="fw-normal mt-3">Ape City NXT+</h2>
                <p>La suavidad de manejo y las características de Piaggio hacen del Ape City NXT+ una opción ideal para ofrecer un servicio de calidad a tus clientes.</p>
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
        <div class="row featurette align-items-start" data-aos="fade-up">
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
                <h2 class="featurette-heading fw-normal lh-1">“El Ape City NXT+ es mi mejor inversión.” <span class="text-body-secondary">- María López</span></h2>
                <p class="lead">"La eficiencia y comodidad del Ape City NXT+ me han permitido ofrecer un servicio de calidad a mis clientes. Es un vehículo innovador y seguro."</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img src="{{ asset('main/images/TEST2.jpg') }}" class="img-fluid rounded hover-lift" alt="Ape City NXT+">
            </div>
        </div>

        <hr class="featurette-divider" data-aos="fade-up">
    </div>

    <!-- Icono flotante de WhatsApp -->
    <section class="div-flotante">
        <a href="https://wa.me/50240484777?text=Hola, deseo información." target="_blank" class="icono-flotante">
            <img src="{{ asset('main/images/redes-iconos/whatsapp.png') }}" loading="lazy" alt="WhatsApp" class="icono-flotante-img">
        </a>
    </section>

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="{{ asset('/main/js/inicio.js')}}"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true
        });
    </script>

@endsection
