@extends('layouts.app')

@section('title', 'Repuestos - Piaggio GT')

@section('extra_head')
    <!-- Estilos exclusivos para la página de Repuestos -->
@endsection

@section('content')
    <div class="container text-center py-5" data-aos="fade-in">
        <p class="lead text-danger">Imagen de muestra.</p>
    </div>
    <div class="container  d-flex justify-content-center">
        <img src="{{ asset('main/images/imagenrepuestos.png') }}" alt="Imagen de muestra" class="img-fluid" />
    </div>
@endsection
