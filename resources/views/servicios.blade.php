@extends('layouts.app')

@section('title', 'Servicios - Piaggio GT')

@section('extra_head')
    <!-- Estilos exclusivos para la página de Servicios -->
    <link rel="stylesheet" href="{{ asset('main/css/servicios.css') }}">
    <!-- AOS CSS para animaciones -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
@endsection

@section('content')

    <!-- Encabezado -->
    <section class="single-page-header" style="background-image: url('https://piaggiomx.com/images/cabeceras/c935ddfe3ff4748fa5593a4b756a8a95.webp'); background-size: cover; background-position: center;">
        <div class="container text-center py-5" data-aos="fade-in">
            <h1 class="display-4 text-white">Servicios</h1>
            <p class="lead text-white">Conoce nuestros servicios.</p>
        </div>
    </section>

    <!-- Sección Garantía -->
    <section class="section my-5 p-0 bg-servicios" id="garantia">
        <div class="container-fluid px-5">
            <div class="row no-gutters align-items-center">
                <!-- Imagen e icono de Garantía -->
                <div class="col-md-6 col-12 text-center position-relative" data-aos="fade-right">
                    <img src="https://piaggiomx.com/images/servicios/53f006921c5315a93de21e926d35db2e.webp" alt="Imagen Garantía" class="img-fluid" id="imagen_garantia">
                    <div class="icono-garantia">
                        <img class="img-fluid" src="https://piaggiomx.com/images/servicios/f5beb03ba29438c323bc2bd3daae0a73.webp" alt="Icono Garantía">
                    </div>
                </div>
                <!-- Contenido de Garantía -->
                <div class="col-md-6 col-12 p-md-5 d-flex flex-column justify-content-center" data-aos="fade-left">
                    <h2 class="titulo-servicios" data-aos="fade-up" data-aos-duration="1000">Garantía</h2>
                    <div class="mt-md-5 text-justify" data-aos="fade-up" data-aos-duration="2000">
                        <p>
                            La garantía de su vehículo PIAGGIO es de 12 meses o 12,000 kilómetros, lo que ocurra primero, contada a partir de la fecha de entrega al cliente. Es fundamental que las revisiones y el mantenimiento indicados en esta póliza se realicen en un centro de servicio autorizado PIAGGIO para hacerla efectiva.
                        </p>
                        <p>
                            No entran en garantía las partes que sufren desgaste por uso normal, tales como: bujías, focos, componentes del encendido, balatas de freno, discos de embrague, cables, llantas, yugo, sistema eléctrico, rines, lona, batería, filtros, espejos, cámara, claxon, etc.
                        </p>
                        <p>
                            Las únicas partes eléctricas con garantía de 30 días o 300 km son el estator y el CDI, siempre que se utilicen conforme a las especificaciones de Moto Galería.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección Talleres Cercanos -->
    <section class="section position-relative talleres-section" id="talleres">
        <!-- Overlay para oscurecer la imagen de fondo -->
        <div class="overlay"></div>
        <div class="container pb-5 position-relative" style="z-index: 2;" data-aos="fade-up">
            <div class="row pb-5">
                <div class="col-md-7 mx-auto text-white text-center">
                    <h1>Talleres Cercanos</h1>
                    <div class="mb-3 descripcion">
                        <p>PIAGGIO Commercial pone a tu disposición el personal más calificado para realizar el mantenimiento que necesita tu vehículo.</p>
                    </div>
                    <div class="d-flex flex-wrap justify-content-center">
                        <a href="https://api.whatsapp.com/send?phone=50240484777" target="_blank" class="btn btn-servicios m-2">
                            Contacta a tu asesor
                        </a>
                        <a href="https://www.google.com/maps/d/edit?mid=1A-CIsaTFx7d9rQ0CRurCyV7OtYnpBMo&usp=sharing" target="_blank" class="btn btn-servicios m-2">
                            Conoce tu centro de servicio más cercano
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800, // Duración de las animaciones
            once: true    // Solo animar una vez
        });
    </script>

@endsection
