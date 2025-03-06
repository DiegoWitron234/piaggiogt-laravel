@extends('layouts.app')

@section('title', 'Vehículos - Piaggio GT')

@section('extra_head')
    <!-- Estilos exclusivos para la página de Vehículos (opcional) -->
    <!--<link rel="stylesheet" href="{{ asset('main/css/vehiculos.css') }}">-->
    <!-- AOS CSS para animaciones -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
@endsection

@section('content')
    <div class="text-center my-5" data-aos="fade-in">
        <h1 class="display-4">Vehículos</h1>
        <p class="lead">Todas nuestras motos.</p>
    </div>

    <div class="container my-5">
        @forelse ($motos as $moto)
            <div class="card mb-5 shadow-sm" data-aos="fade-up">
                <!-- Encabezado: Modelo y Año -->
                <div class="card-header text-center bg-secondary text-white">
                    <h2 class="mb-0">{{ $moto->modelo }} ({{ $moto->anio }})</h2>
                </div>
                <div class="card-body">
                    <!-- Fila de datos técnicos -->
                    <section class="py-3 border-bottom" id="encabezados-{{ $loop->iteration }}" data-aos="fade-right">
                        <div class="row text-center">
                            <div class="col-md-3">
                                <h5 class="fw-bold">Motor</h5>
                                <p>{{ $moto->motor }}</p>
                            </div>
                            <div class="col-md-3">
                                <h5 class="fw-bold">Velocidad Máxima</h5>
                                <p>{{ $moto->velocidad }}</p>
                            </div>
                            <div class="col-md-3">
                                <h5 class="fw-bold">Manual</h5>
                                <p>{{ $moto->manual }}</p>
                            </div>
                            <div class="col-md-3">
                                <h5 class="fw-bold">Pasajeros</h5>
                                <p>{{ $moto->pasajeros }}</p>
                            </div>
                        </div>
                    </section>
                    <!-- Detalle: Imagen y Descripción -->
                    <section class="py-3" id="detalles-{{ $loop->iteration }}" data-aos="fade-left">
                        <div class="row align-items-center">
                            <div class="col-md-5">
                                @if($moto->imagen)
                                    <img src="{{ asset('storage/' . $moto->imagen) }}" alt="{{ $moto->modelo }}" class="img-fluid rounded hover-lift">
                                @else
                                    <img src="{{ asset('main/images/placeholder.png') }}" alt="Sin imagen" class="img-fluid rounded hover-lift">
                                @endif
                            </div>
                            <div class="col-md-7">
                                <h4 class="mb-3">Descripción</h4>
                                <p>{{ $moto->descripcion }}</p>
                                <h4 class="mb-3">Precio</h4>
                                <h5>{{ $moto->precio }} Quetzales</h5>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        @empty
            <p class="text-center">No hay motos disponibles en este momento.</p>
        @endforelse
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
