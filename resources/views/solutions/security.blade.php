@extends('layout.base')
@section('title', 'Infraestructura')
@section('meta-description', 'Infraestructura')
@section('styles')
<link rel="stylesheet" href="{{ asset('css/services.css') }}">
@endsection
@section('body')
<section id="cover" class="container-fluid" style="background-image: url({{ asset('img/services/security/cover.jpg') }})">
    <article class="container text-white">
        <h1 class="page-title uppercase text-center text-md-left" data-aos="fade-down" data-aos-duration="1150">Prevención y Detección de Amenazas</h1>
        <p class="text-center text-md-left mx-auto mx-md-0" data-aos="fade-down" data-aos-duration="1250">
            Nuestro objetivo es darle a nuestros clientes un resultado de nivel 5.0, conoce a
            detalle cómo lo logramos.
        </p>
    </article>
</section>

<section id="managed-services" class="cintainer-fluid align-items-center bg-white row px-0 m-0">
    <img class="col-md-6 col-12 px-0 my-5 my-md-0" src="{{ asset('img/services/security/service2.jpg') }}" alt="" data-aos="fade-right" data-aos-duration="1500">
    <div class="col-lg-5 col-md-6 p-0 pl-lg-5 px-md-3 px-5" data-aos="fade-left" data-aos-duration="1500">
        <p>
            Sabemos que la garantía de que tus datos críticos, correo electrónico, aplicativos y continuidad de tu negocio se encuentren
            protegidos ante cualquier amenaza, es más importante que nunca.
        </p>

        <p>
            8 de cada 10 ejecutivos en el mundo realizan actividad que pone en riesgo la información de su organización, creciendo los ataques
            contra empresas hasta ser un 81% del total . 
        </p>

        <p>
            A través de expertos certificados podemos garantizar la privacidad de la información, mejorar tiempos de respuesta ante desastres y
            gestionar los riesgos informáticos de tu organización, cumpliendo las mejores prácticas de los líderes de la industria e integrando
            diferentes soluciones y servicios.
        </p>

        <ul>
            <li> Simulación y detección de amenazas</li>
            <li> Control de accesos a la red corporativa</li>
            <li> Protección de datos</li>
            <li> Seguridad de los dispositivos</li>
            <li> Continuidad de negocio</li>
        </ul>
    </div>
</section>

<section id="solutions-display" class="content-solutions container-fluid row bg-white mx-0 p-0">
    <article id="solutions-list" class="col-md-4 p-lg-5 p-4">
        <p class="Ebig-text my-5">Descubre nuestras soluciones en Seguridad</p>
        <div class="solution pl-3 __infraestructura active">
            <a href="#recuperacion-ante-desastres" aria-expanded="true" role="button" data-toggle="collapse" class="__title">Recuperación ante desastres</a>
            <p>¿Sabías que México es uno de los países con más ataques cibernéticos por hora?</p>
            <a href="#cotizar" class="__contact text-purple" data-target-value="Recuperación ante desastres">Contacta a un experto</a>
        </div>
        <div class="solution __seguridad pl-3">
            <a href="#proteccion-de-datos" aria-expanded="true" role="button" data-toggle="collapse" class="__title">Protección de datos</a>
            <p>Tener tus equipos actualizados ayudará a ejecutar hasta un 20% más rápido que con equipos obsoletos.</p>
            <a href="#cotizar" class="__contact text-purple" data-target-value="Protección de datos">Contacta a un experto</a>
        </div>
    </article>
    <article class="solutions-summary col-md-8 p-0">
        <div id="recuperacion-ante-desastres" class="solution-collapse collapse show" data-parent="#solutions-display">
            <div class="cover" style="background-image: url({{ asset('./img/services/security/disaster-recovery.jpg') }})"></div>
            <div class="p-5">
                <h2 class="mb-4">Recuperación ante desastres - <small>Reducción de riesgos de pérdida de información</small></h2>
                <p>
                    Debido a nuestra experiencia, sabemos que la interrupción de tu operación representa una significativa perdida monetaria.
                </p>

                <p>
                    ¿Sabías que México es uno de los países con más ataques cibernéticos por hora?
                </p>

                <p>
                    Te ayudamos a prevenir este tipo de incidentes, de la mano contigo elaboramos un plan personalizado con fundamento en las mejores
                    prácticas de la industria para estar preparados y saber reaccionar ante cualquier contingencia.
                </p>

                <div class="d-flex justify-content-between align-items-center mt-5">
                    <p class="h5 p-bold mb-0">Nuestro equipo está listo para impulsar tu negocio</p>
                    <a href="#cotizar" class="btn btn-primary __contact" data-target-value="Recuperación ante desastres">Contacta
                        a un experto</a>
                </div>
            </div>
        </div>
        <div id="proteccion-de-datos" class="solution-collapse collapse" data-parent="#solutions-display">
            <div class="cover" style="background-image: url({{ asset('./img/services/security/data-protection.jpg') }})"></div>
            <div class="p-5">
                <h2 class="mb-4">Protección de datos - <small>Ingeniería que garantiza el resguardo de tu información</small></h2>

                <p>
                    Hoy en día, las organizaciones entienden que los datos son muy importantes para la continuidad del negocio y la propia
                    existencia de la organización. Proteger esos datos y asegurar que estén disponibles 7/24/365 es una tarea crítica.
                </p>

                <p>
                    Una empresa que vea cómo un incidente interrumpe alguno de sus servicios, tendrá unas consecuencias negativas financieras,
                    de reputación e incluso de pérdida de clientes.
                </p>

                <p>
                    Nos encargamos de asesorarte y acompañarte en la implementación de medidas preventivas y recuperaciones rápidas, flexibles
                    y confiables que evitan la pérdida de tus datos y proporcionan recuperación de alta velocidad.
                </p>

                <div class="d-flex justify-content-between align-items-center mt-5">
                    <p class="h5 p-bold mb-0">Nuestro equipo está listo para impulsar tu negocio</p>
                    <a href="#cotizar" class="btn btn-primary __contact" data-target-value="Protección de datos">Contacta a un
                        experto</a>
                </div>
            </div>
        </div>
    </article>
</section>
<section class="contact container-fluid row m-0 p-0" id="cotizar">
    <article class="col-xl-7 col-lg-8 col-10 mx-auto">
        <h3 class="text-center text-purple mb-5">Completa el siguiente formulario y un especialista se contactará
            contigo en menos de 24 hrs.</h3>
        <div class="bg-white mx-auto px-4 py-4">
            <form class="contactLeadForm" action="{{ route('contact.lead') }}" method="POST">
                @csrf
                <input type="hidden" name="subject" value="Solución Seguridad">
                <div class="form-group">
                    <input class="form-control" id="name" name="first-name" type="text" placeholder="Nombre:" required>
                </div>
                <div class="form-group">
                    <input class="form-control" id="name" name="last-name" type="text" placeholder="Apellido:" required>
                </div>
                <div class="form-group">
                    <input class="form-control" id="email" name="email" type="email" placeholder="Email:" required>
                </div>
                <div class="form-group">
                    <input class="form-control" id="name" name="company" type="text" placeholder="Empresa:" required>
                </div>
                <div class="form-group">
                    <select name="products" id="productsSelect" class="form-control" required>
                        <option>Selecciona una solución</option>
                        <option value="Recuperación ante desastres">Recuperación ante desastres</option>
                        <option value="Protección de datos">Protección de datos</option>
                    </select>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="comment" id="msg" rows="4" cols="30" rows="1" placeholder="Mensaje (opcional):"></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-pill mt-3 mb-2">Enviar</button>
            </form>
        </div>
    </article>
</section>

@endsection

@section('scripts')
<script src="{{ asset('js/contact.js') }}"></script>
<script>
    $(document).ready(function() {
        var solutions = $('.solution');
        var solutionsTitles = solutions.find('.__title');

        if (location.hash != null && location.hash != "") {
            $('html, body').animate({
                scrollTop: $("#solutions-display").offset().top
            }, 500);

            var $collapse = $(location.hash + '.collapse');
            var section = location.hash.substr(1, location.hash.length - 1);

            solutions.removeClass('active');
            $('.solution.__' + section).addClass('active');
            $('.collapse').removeClass('show');
            $collapse.collapse('show');
        }

        solutionsTitles.on('click', function(ev) {
            ev.preventDefault();
            solutions.removeClass('active');
            $(this).parent('.solution').addClass('active');
        });

        // Quote area
        $('.__contact').on('click', function(ev) {
            ev.preventDefault();

            var $target = $("#cotizar");
            var $productsSelect = $("#productsSelect");
            $productsSelect.val($(this).data('target-value'));

            $('html, body').animate({
                scrollTop: ($target.offset().top)
            }, 500, function() {
                // Callback after animation
                // Must change focus!
                $target.focus();
                if ($target.is(":focus")) { // Checking if the target was focused
                    return false;
                } else {
                    $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                    $target.focus(); // Set focus again
                }
            });
        });
    });
</script>
@endsection