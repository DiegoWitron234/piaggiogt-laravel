@extends('layouts.app')

@section('title', 'Contacto Corporativo - Piaggio GT')

@section('extra_head')
    <!-- Estilos exclusivos para la página de Contacto -->
    <link rel="stylesheet" href="{{ asset('main/css/contacto.css') }}">
@endsection

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="contacto-header mb-4">
                <h1 class="display-4">Contacto Corporativo</h1>
                <p class="lead">Póngase en contacto con nosotros para consultas corporativas.</p>
            </div>

            <div class="row">
                <!-- Información de contacto -->
                <div class="col-md-6 mb-4 contacto-info">
                    <h3>Información de Contacto</h3>
                    <p><strong>Dirección:</strong> Av. Central Oriente No.1487-B, entre 13 y 14 Oriente, Col. Centro, Tuxtla Gutiérrez, Chiapas. C.P.29000</p>
                    <p><strong>Teléfono:</strong> 40484777</p>
                    <p><strong>Email:</strong> <a href="mailto:ventas@piaggiogt.com">ventas@piaggiogt.com</a></p>
                    <p><strong>Horarios de Atención:</strong> Lunes a Viernes de 9:00 AM a 6:00 PM<br>Sábados de 9:00 AM a 2:00 PM</p>
                </div>
                <!-- Formulario de contacto -->
                <div class="col-md-6 contacto-form">
                    <h3>Formulario de Contacto</h3>
                    <form method="post" action="{{ route('contacto.send') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre Completo</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Tu nombre completo" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email" name="correo" placeholder="correo@ejemplo.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="mensaje" class="form-label">Mensaje</label>
                            <textarea class="form-control" id="mensaje" name="mensaje" rows="5" placeholder="Su mensaje está aquí..." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar Consulta</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
