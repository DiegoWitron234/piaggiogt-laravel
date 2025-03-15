@extends('layouts.app')

@section('title', 'Conviértete en distribuidor - Piaggio GT')

@section('content')
    <!-- Cabecera con fondo e imagen -->
    <section class="single-page-header"
             style="background-image: url('https://piaggiomx.com/images/redes.jpg'); background-size: cover;">
        <div class="container py-5 text-center text-white">
            <h1 class="titulo mb-3" data-aos="fade-zoom-in" data-aos-animation="1000" data-aos-anchor-placement="center-center" data-aos-delay="300">
                Conviértete en<br> distribuidor
            </h1>
        </div>
    </section>

    <!-- Subtítulo o “subheader” -->
    <section class="single-page-subheader py-4" style="background-color: #333;">
        <h2 class="text-center text-white m-0">Forma parte de nuestra Red de Distribuidores</h2>
    </section>

    <!-- Sección con el formulario -->
    <section class="section py-5 border-bottom">
        <div class="container">
            <div class="row">
                <!-- Columna con el formulario -->
                <div class="col-md-5">
                    <form action="#" class="form row align-items-baseline" id="form_distribuidor">
                        @csrf
                        <div class="mb-3 col-md-6">
                            <label for="nombre">Nombre(s)</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ej. José">
                            <span class="invalid-feedback"></span>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="apellidos">Apellidos</label>
                            <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Ej. López López">
                            <span class="invalid-feedback"></span>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="estado">Estado</label>
                            <select name="estado" id="estado" class="form-control">
                                <option value="">Selecciona</option>
                                <!-- Opciones de estados... -->
                            </select>
                            <span class="invalid-feedback"></span>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="ciudad">Ciudad</label>
                            <select name="ciudad" id="ciudad" class="form-control">
                                <option value="">Selecciona</option>
                            </select>
                            <span class="invalid-feedback"></span>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="telefono">Teléfono</label>
                            <input type="text" class="form-control" id="telefono" name="telefono" placeholder="00 0000 0000">
                            <span class="invalid-feedback"></span>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="correo">Correo Electrónico</label>
                            <input type="email" class="form-control" id="correo" name="correo" placeholder="ejemplo@correo.com">
                            <span class="invalid-feedback"></span>
                        </div>
                        <!-- Continúa con los demás campos si los necesitas... -->
                        <div class="mb-3 col-md-12 text-center">
                            <button type="submit" class="btn btn-danger">Enviar solicitud</button>
                        </div>
                        <div class="alert d-none col-md-12"></div>
                    </form>
                </div>

                <!-- Columna con el texto de requisitos (opcional) -->
                <div class="col-md-6 offset-md-1">
                    <p>Estimado futuro Distribuidor.</p>
                    <p>Para poder formar parte de nuestra red de distribuidores y gozar de los beneficios que Piaggio otorga, deberás cumplir con los requisitos mínimos:</p>
                    <ul>
                        <li>Compra inicial de 5 unidades de contado de cualquiera de nuestros productos disponibles.</li>
                        <li>$180,000.00 en refacciones</li>
                        <li>Plantilla mínima de personal</li>
                    </ul>
                    <p>Esperamos tu solicitud para brindarte más información y unirte a esta gran familia Piaggio.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
