@extends('layouts.app')

@section('title', 'Empresa - Piaggio GT')

@section('extra_head')
    <!-- Estilos exclusivos para la página de Empresa -->
    <link rel="stylesheet" href="{{ asset('main/css/empresa.css') }}">
    <!-- AOS CSS para animaciones -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
@endsection

@section('content')
    <!-- Encabezado -->
    <section class="single-page-header" style="background-image: url('https://piaggiomx.com/images/cabeceras/c935ddfe3ff4748fa5593a4b756a8a95.webp'); background-size: cover;">
        <div class="container text-center py-5" data-aos="fade-in">
            <h1 class="display-4 text-white">Empresa</h1>
            <p class="lead text-white">Conoce nuestra historia, misión, visión y valores como empresa.</p>
        </div>
    </section>

    <!-- Historia con efecto "Leer más" -->
    <section class="section" id="historia">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-6" data-aos="fade-right">
                    <h2 class="text-primary mb-4">Historia</h2>
                    <div id="historia-contenedor" class="historia-contenedor">
                        <p>
                            Fundada por <strong>Rinaldo Piaggio</strong> en 1884, Piaggio &amp; C inicialmente fabricaba locomotoras y vagones de tren, posteriormente en la Primera y Segunda Guerra Mundial la compañía se centró en la fabricación de aviones.
                            <br><br>
                            Al final de la guerra, Enrico Piaggio, hijo del fundador, decidió abandonar el sector aeronáutico con el fin de afrontar la urgente necesidad italiana de un medio de transporte moderno y económico.
                            <br><br>
                            La idea era diseñar un vehículo barato para las masas.
                            <br><br>
                            Después del lanzamiento exitoso de la Vespa scooter en 1946, el ingeniero aeronáutico Corradino D’Ascanio fue elegido para diseñar un vehículo que colmara la laguna en el sector de los utilitarios de la posguerra: un motocarro de pequeña cilindrada, con consumo de combustible bajo, precio accesible y fácil de conducir y maniobrar, con la fuerza necesaria para transportar productos en el campo. De esta forma nace en 1948 la gama de vehículos comerciales Ape.
                            <br><br>
                            Con una historia de más de 70 años, Ape ha ido evolucionando conservando su propia e inconfundible personalidad, superando los beneficios funcionales típicos del producto para convertirse en un ícono de las costumbres y la cultura italiana.
                            <br><br>
                            Ape no tiene rivales en cuanto a tamaño, maniobrabilidad, economicidad y robustez. La gama, amplia y variada, incluye modelos capaces de satisfacer diversas necesidades profesionales, así como el ocio de los clientes que buscan un vehículo personal y diferente para moverse.
                            <br><br>
                            Los vehículos de carga son ya un clásico de la cultura italiana. Sin embargo, el éxito de Ape supera ampliamente los confines del viejo continente, y hoy es un auténtico éxito mundial. En Latinoamérica, como en otras partes del mundo, el Ape se utiliza para satisfacer las necesidades de transporte de mercancías y pasajeros.
                        </p>
                    </div>
                    <button id="btn-leer-mas" class="btn btn-link">Leer más</button>
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <img src="https://piaggiomx.com/images/historia/d88b18e093d81de20b09bf5fad802a4c.webp" alt="Historia de la empresa" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </section>

    <!-- Quiénes Somos -->
    <section class="section" id="quienes-somos" data-aos="fade-up">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h2 class="text-primary mb-4">Quiénes somos</h2>
                    <p>
                        Moto Galería es una empresa fundada el 11 de Agosto de 2006 por un grupo familiar de Chiapas dedicada a la comercialización de moto carros. En el año 2019 se crean lazos con la marca Piaggio y a raíz de esta unión Moto Galería se convierte en importadora y exportadora de moto carros de pasajeros, pick ups y refacciones. Desde entonces, Moto Galería en conjunto con Piaggio se ha expandido a lugares como Colombia, Guatemala, Perú y Estados Unidos.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Misión y Visión -->
    <section class="section bg-light" id="mision" data-aos="fade-up">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-primary">Misión</h2>
                    <p class="lead">
                        Ser una empresa que brinde mejores oportunidades de empleo, autoempleo o de negocio a las personas, a través de nuestros mototaxis con el mejor servicio postventa y refacciones.
                    </p>
                </div>
                <div class="col-md-6">
                    <h2 class="text-primary">Visión</h2>
                    <p class="lead">
                        Ser parte de la historia de éxito de las familias a nivel nacional y ser vista como una marca que ofrece la mejor opción para tener ingresos para sí mismo.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Valores -->
    <section class="section" id="valores" data-aos="fade-up">
        <div class="container py-5">
            <h2 class="text-center text-primary mb-5">Nuestros Valores</h2>
            <div class="row">
                <div class="col-md-4 text-center" data-aos="zoom-in">
                    <img src="https://piaggiomx.com/images/valores/d9e03b64926cf2df14781f0e8ebb714c.webp" alt="Compromiso" class="img-fluid mb-2 shadow">
                    <h4>Compromiso</h4>
                    <p>Estamos seguros de que nuestras colaboraciones se basan en la responsabilidad mutua.</p>
                </div>
                <div class="col-md-4 text-center" data-aos="zoom-in" data-aos-delay="100">
                    <img src="https://piaggiomx.com/images/valores/d9a056228a18d9b2b514f4c9ff04a503.webp" alt="Honestidad" class="img-fluid mb-2 shadow">
                    <h4>Honestidad</h4>
                    <p>Fomentamos la armonía y confianza con nuestras prácticas comerciales.</p>
                </div>
                <div class="col-md-4 text-center" data-aos="zoom-in" data-aos-delay="200">
                    <img src="https://piaggiomx.com/images/valores/d2401e6f47b84b840a6df67ead8ecc19.webp" alt="Pasión" class="img-fluid mb-2 shadow">
                    <h4>Pasión</h4>
                    <p>Nos dedicamos a mejorar la calidad de vida de las personas con nuestra oferta.</p>
                </div>
                <div class="col-md-4 text-center" data-aos="zoom-in" data-aos-delay="300">
                    <img src="https://piaggiomx.com/images/valores/37127e448bfef5eef0d2f5679318580e.webp" alt="Solidaridad" class="img-fluid mb-2 shadow">
                    <h4>Solidaridad</h4>
                    <p>Un sentimiento de apoyo especialmente cuando haya una situación de vulnerabilidad.</p>
                </div>
                <div class="col-md-4 text-center" data-aos="zoom-in" data-aos-delay="400">
                    <img src="https://piaggiomx.com/images/valores/3bff2595b3a1ae986a7d58d9cb234de3.webp" alt="Competitividad" class="img-fluid mb-2 shadow">
                    <h4>Competitividad</h4>
                    <p>Siempre buscamos estar a la vanguardia, ofreciendo los mejores estándares de calidad.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
@endsection
