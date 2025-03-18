@extends('layouts.app')

@section('title', 'Distribuidor - Piaggio GT')

@section('extra_head')
    <!-- Estilos personalizados para esta página -->
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        /* Preloader */
        #preloader {
            position: fixed;
            left: 0;
            top: 0;
            z-index: 9999;
            width: 100%;
            height: 100%;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .preloader span {
            width: 10px;
            height: 10px;
            margin: 5px;
            background: #007bff;
            border-radius: 50%;
            display: inline-block;
            animation: bounce 1.5s infinite ease-in-out;
        }
        .preloader span:nth-child(2) { animation-delay: 0.2s; }
        .preloader span:nth-child(3) { animation-delay: 0.4s; }
        .preloader span:nth-child(4) { animation-delay: 0.6s; }
        .preloader span:nth-child(5) { animation-delay: 0.8s; }
        .preloader span:nth-child(6) { animation-delay: 1s; }
        @keyframes bounce {
            0%, 80%, 100% { transform: scale(0); }
            40% { transform: scale(1); }
        }
        /* Navegación */
        .navigation {
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            background-color: #fff;
        }
        .navbar-nav .nav-link {
            color: #050505 !important;
        }
        /* Cabecera de página */
        .single-page-header {
            background-size: cover;
            background-position: center;
            padding: 100px 0;
            color: #fff;
            text-align: center;
            position: relative;
        }
        .single-page-header::after {
            content: "";
            background: rgba(0, 0, 0, 0.5);
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
        }
        .single-page-header h1 {
            position: relative;
            z-index: 1;
            font-size: 3rem;
        }
        /* Subcabecera */
        .single-page-subheader {
            background: #007bff;
            padding: 20px 0;
            text-align: center;
        }
        .single-page-subheader h2 {
            color: #fff;
            margin: 0;
        }
        /* Formulario */
        form {
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        form label {
            font-weight: bold;
        }
        .invalid-feedback {
            color: red;
            font-size: 0.875rem;
        }
        /* Footer */
        #footer {
            background: #343a40;
            color: #fff;
            padding: 40px 0;
        }
        #footer h3, #footer h5 {
            color: #fff;
        }
        #footer a {
            color: #adb5bd;
            text-decoration: none;
        }
        #footer a:hover {
            color: #fff;
        }
        .footer-bottom {
            text-align: center;
            padding: 10px 0;
            border-top: 1px solid #495057;
            margin-top: 20px;
        }
        /* Modal */
        .modal-header, .modal-footer {
            border: none;
        }
        /* Botón flotante */
        .menu-line {
            position: fixed;
            right: 20px;
            bottom: 20px;
            z-index: 1000;
        }
        .btn-app {
            background: #007bff;
            padding: 10px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .btn-app a {
            color: #fff;
            font-size: 1.5rem;
        }
    </style>
@endsection

@section('content')
    <!-- Preloader -->
    <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>



    <!-- Cabecera de sección con imagen de fondo -->
    <section class="single-page-header" style="background-image: url(https://piaggiomx.com/images/cabeceras/c935ddfe3ff4748fa5593a4b756a8a95.webp); background-size: 100%; background-repeat: no-repeat; position: relative; height: 280px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="titulo" data-aos="fade-zoom-in" data-aos-duration="1000" data-aos-anchor-placement="center-center" data-aos-delay="300">
                        Conviértete en <br> distribuidor
                    </h1>
                </div>
            </div>
        </div>
    </section>



    <!-- Subcabecera -->
    <section class="single-page-subheader py-5">
        <div class="container">
            <h2 class="text-center">Forma parte de nuestra Red de Distribuidores</h2>
        </div>
    </section>

    <!-- Sección principal con formulario y texto -->
    <section class="section py-5 border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <form class="form row align-items-baseline" id="form_distribuidor">
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
                                <!-- Opciones de estados -->
                                <option value="Aguascalientes">Aguascalientes</option>
                                <option value="Baja California">Baja California</option>
                                <option value="Baja California Sur">Baja California Sur</option>
                                <option value="Campeche">Campeche</option>
                                <option value="Chiapas">Chiapas</option>
                                <option value="Chihuahua">Chihuahua</option>
                                <option value="Ciudad de México">Ciudad de México</option>
                                <option value="Coahuila de Zaragoza">Coahuila de Zaragoza</option>
                                <option value="Colima">Colima</option>
                                <option value="Durango">Durango</option>
                                <option value="Guanajuato">Guanajuato</option>
                                <option value="Guerrero">Guerrero</option>
                                <option value="Hidalgo">Hidalgo</option>
                                <option value="Jalisco">Jalisco</option>
                                <option value="México">México</option>
                                <option value="Michoacán de Ocampo">Michoacán de Ocampo</option>
                                <option value="Morelos">Morelos</option>
                                <option value="Nayarit">Nayarit</option>
                                <option value="Nuevo León">Nuevo León</option>
                                <option value="Oaxaca">Oaxaca</option>
                                <option value="Puebla">Puebla</option>
                                <option value="Querétaro">Querétaro</option>
                                <option value="Quintana Roo">Quintana Roo</option>
                                <option value="San Luis Potosí">San Luis Potosí</option>
                                <option value="Sinaloa">Sinaloa</option>
                                <option value="Sonora">Sonora</option>
                                <option value="Tabasco">Tabasco</option>
                                <option value="Tamaulipas">Tamaulipas</option>
                                <option value="Tlaxcala">Tlaxcala</option>
                                <option value="Veracruz de Ignacio de la Llave">Veracruz de Ignacio de la Llave</option>
                                <option value="Yucatán">Yucatán</option>
                                <option value="Zacatecas">Zacatecas</option>
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
                        <div class="mb-3 col-md-6">
                            <label for="ciudad_interes">Ciudad de interés</label>
                            <input type="text" class="form-control" id="ciudad_interes" name="ciudad_interes">
                            <span class="invalid-feedback"></span>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="entero">¿Cómo se enteró de nosotros?</label>
                            <select name="entero" id="entero" class="form-control">
                                <option value="Otro distribuidor">Otro distribuidor</option>
                                <option value="Expo Franquicia">Expo Franquicia</option>
                                <option value="Publicidad">Publicidad</option>
                                <option value="Internet">Internet</option>
                                <option value="Otro">Otro</option>
                            </select>
                            <span class="invalid-feedback"></span>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="tiene_negocio">¿Tiene o ha tenido negocios propios?</label>
                            <select name="tiene_negocio" id="tiene_negocio" class="form-control">
                                <option value="1">Sí</option>
                                <option value="0">No</option>
                            </select>
                            <span class="invalid-feedback"></span>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="negocio">Indique en qué negocio</label>
                            <input type="text" class="form-control" id="negocio" name="negocio" placeholder="Escriba cual">
                            <span class="invalid-feedback"></span>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="local">¿Tiene algún local para la agencia?</label>
                            <select class="form-control" id="local" name="local">
                                <option value="">Selecciona</option>
                                <option value="1">Sí</option>
                                <option value="0">No</option>
                            </select>
                            <span class="invalid-feedback"></span>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="capital">¿Cuál es el capital disponible para invertir en la distribuidora?</label>
                            <select class="form-control" id="capital" name="capital">
                                <option value="">Selecciona</option>
                                <option value="1">Un millón</option>
                                <option value="2">Más de un millón</option>
                            </select>
                            <span class="invalid-feedback"></span>
                        </div>
                        <div class="col-md-12 text-center d-flex justify-content-center mb-3">
                            <div class="g-recaptcha" data-sitekey="6LfaCP8mAAAAALt8Glku6IQzu3SAhRZ0v1ABMfkU" data-size="normal" data-theme="light" id="recaptcha-element"></div>
                        </div>
                        <div class="mb-3 col-md-12 text-center">
                            <button type="submit" class="btn btn-danger">Enviar solicitud</button>
                        </div>
                        <div class="alert d-none col-md-12"></div>
                    </form>
                </div>
                <div class="col-md-6 offset-md-1">
                    <p>Estimado futuro Distribuidor.</p>
                    <p>Para poder formar parte de nuestra red de distribuidores y gozar de los beneficios que Piaggio le otorga deberás cumplir con los requisitos mínimos:</p>
                    <p>Primera compra para ser un distribuidor Piaggio.</p>
                    <p>- 5 unidades de contado de cualquiera de nuestros productos disponibles.</p>
                    <p>- $180,000.00 en Repuestos</p>
                    <p>- Plantilla mínima de personal</p>
                    <p>Esperamos tu solicitud para brindarte más información y unirte a esta Gran Familia Piaggio.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalTitulo" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitulo"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Contenido del modal -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Botón de menú flotante -->
    <div class="container">
        <div class="menu-line">
            <div class="btn-app">
                <a class="fa fa-handshake" href="https://www.piaggiomx.com/quiero-ser-distribuidor"></a>
            </div>
        </div>
    </div>

    <!-- Scripts necesarios -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        window.onload = function() {
            AOS.init();
            // Oculta el preloader al cargar la página
            $('#preloader').fadeOut();
        }

        // Cambio de estado para cargar ciudades vía AJAX
        $("#estado").on("change", function() {
            $.ajax({
                type: "POST",
                url: "{{ url('municipio') }}",
                data: {
                    _token: $("meta[name='csrf-token']").attr('content'),
                    estado: $("#estado").val()
                }
            }).done(function(response) {
                $("#ciudad").html("<option value=''>Selecciona</option>");
                $.each(response.municipios, function(index, value) {
                    $("#ciudad").append("<option value='" + value.municipio + "'>" + value.municipio + "</option>");
                });
            });
        });

        // Envío del formulario vía AJAX
        $(".form").on("submit", function(ev) {
            ev.preventDefault();
            var $this = $(this);
            var btnsubmit = $this.find("button[type='submit']");
            var data = new FormData(document.getElementById($this.attr('id')));
            $.ajax({
                beforeSend: function() {
                    $this.find('.is-invalid').removeClass('is-invalid');
                    btnsubmit.prop('disabled', true);
                    btnsubmit.addClass('btn-progress');
                },
                url: $this.attr('action'),
                type: "POST",
                data: data,
                processData: false,
                contentType: false
            }).done(function(response) {
                setTimeout(() => {
                    btnsubmit.prop('disabled', false);
                    btnsubmit.removeClass('btn-progress');
                }, 3000);
                $(".alert").removeClass("d-none").addClass("alert-success").text("Se ha enviado el correo, espera nuestra respuesta");
            }).fail(function(response) {
                btnsubmit.prop('disabled', false);
                btnsubmit.removeClass('btn-progress');
                if (response.status == 422) {
                    $(".alert").removeClass("d-none").addClass("alert-danger").text("Hay un error con los campos, revise por favor.");
                    $this.find('.is-invalid').removeClass('is-invalid');
                    $.each(response.responseJSON.errors, function(index, value) {
                        index = index.replace(/([\.]+)/g, '_');
                        $this.find("[name=" + index + "]").addClass('is-invalid').parent().find('.invalid-feedback').html(value);
                    });
                }
            });
        });
    </script>
@endsection
