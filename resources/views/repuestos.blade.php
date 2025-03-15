@extends('layouts.app')

@section('title', 'Repuestos - Piaggio GT')

@section('extra_head')
    <!-- Estilos exclusivos para la página de Repuestos (si los necesitas) -->
@endsection

@section('content')
    <div class="container my-5 d-flex justify-content-center">
        <img src="{{ asset('main/images/imagenrepuestos.png') }}" alt="Imagen de muestra" class="img-fluid" />
    </div>
@endsection
