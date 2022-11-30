@extends('layout.base')
@section('title', 'Servicios')
@section('meta-description', 'servicios completos')
@section('styles')
<link rel="stylesheet" href="{{ asset('css/services.css') }}">
@endsection
@section('body')
<section id="cover" class="container-fluid" style="background-image: url({{ asset('img/services/cover.jpg') }})">
    <article class="container text-white">
        <h1 class="page-title uppercase text-center text-md-left" data-aos="fade-down" data-aos-duration="1150">Gestión de Procesos y Servicios de TI</h1>
        <p class="text-center text-md-left mx-auto mx-md-0" data-aos="fade-down" data-aos-duration="1250">
            Nuestro objetivo es darle a nuestros clientes un resultado de nivel 5.0, conoce a
            detalle cómo lo logramos.
        </p>
    </article>
</section>

<section id="managed-services" class="cintainer-fluid align-items-center bg-white row px-0 m-0">
    <img class="col-md-6 col-11 px-0 my-5 my-md-0" src="{{ asset('img/services/managed-services.jpg') }}" alt="" data-aos="fade-right" data-aos-duration="1500">
    <div class="col-lg-5 col-md-6 p-0 pl-lg-5 px-md-3 px-5" data-aos="fade-left" data-aos-duration="1500">
        <p>
            Más del 50% de los departamentos de TI se ven rebasados en conocimiento y experiencia por la taza de actualización que sufre cada dos años la tecnología,
            restando a las organizaciones competitividad en el mercado.
        </p>
        <p>
            La experiencia y constante actualización de nuestro equipo de especialistas permite el acceso a las ultimas tendencias del mercado tecnológico, a su
            implementación, mantenimiento y soporte. Gestionando procesos, activos y proyectos tecnológicos, que abarcan desde la operación diaria hasta los 
            servicios de mayor impacto.
        </p>
        <ul>
            <li>Servicios Profesionales</li>
            <li>Outsourcing</li>
            <li>Soporte Técnico</li>
        </ul>
    </div>
</section>

<section id="solutions-display" class="content-solutions container-fluid row bg-white mx-0 p-0">
    <article id="solutions-list" class="col-md-4 p-lg-5 p-4">
        <p class="Ebig-text my-5">Descubre nuestras líneas de negocio y escoge la que mejor se adecúe a tu organización</p>
        <div class="solution pl-3 __infraestructura active">
            <a href="#servicios-profesionales" aria-expanded="true" role="button" data-toggle="collapse" class="__title">Servicios Profesionales</a>
            <p>Somos una compañía capaz de entender, detectar, diseñar, implementar y soportar proyectos</p>
            <a href="#cotizar" class="__contact text-purple" data-target-value="Servicios Profesionales">Contacta a un experto</a>
        </div>
        <div class="solution __seguridad pl-3">
            <a href="#outsourcing" aria-expanded="true" role="button" data-toggle="collapse" class="__title">Outsourcing</a>
            <p>La nueva tendencia está orillando a las empresas a tener menos activos fijos</p>
            <a href="#cotizar" class="__contact text-purple" data-target-value="Outsourcing">Contacta a un experto</a>
        </div>
        <div class="solution __virtualizacion pl-3">
            <a href="#soporte-tecnico" aria-expanded="true" role="button" data-toggle="collapse" class="__title">Soporte Técnico</a>
            <p>Más del 70% del tiempo del personal de TI se desperdicia en tareas para mantener y soportar la operación</p>
            <a href="#cotizar" class="__contact text-purple" data-target-value="Soporte Técnico">Contacta a un
                experto</a>
        </div>
    </article>
    <article class="solutions-summary col-md-8 p-0">
        <div id="servicios-profesionales" class="solution-collapse collapse show" data-parent="#solutions-display">
            <img class="w-100" src="{{ asset('./img/solutions/professional-services.jpg') }}" alt="">
            <div class="p-5">
                <h2 class="mb-4">Servicios Profesionales</h2>
                <p>
                    Atravesamos por una era en la que la digitalización y los avances tecnológicos han llevado a las empresas
                    a replantear la forma en que realizan sus procesos, de cara a elevar la eficiencia y productividad para
                    ganar terreno en un mercado cada vez más competitivo y especializado.
                </p>
                <p>
                    Somos una compañía capaz de entender, detectar, diseñar, implementar y soportar proyectos llave en mano
                    bajo estándares de calidad en la entrega de servicios, administración de proyectos y procesos líderes
                    en la industria.
                </p>
                <ul class="list-disc">
                    <li>Arquitectura y diseño de proyectos a la medida</li>
                    <li>Configuración y puesta a punto</li>
                    <li>Monitoreo y mantenimiento</li>
                    <li>Mejores practicas </li>
                    <li>Capacitación y habilitamiento</li>
                    <li>Pólizas de servicio.</li>
                </ul>
                <div class="d-flex justify-content-between align-items-center mt-5">
                    <p class="h5 p-bold mb-0">Nuestro equipo está listo para impulsar tu negocio</p>
                    <a href="#cotizar" class="btn btn-primary __contact" data-target-value="Servicios Profesionales">Contacta
                        a un experto</a>
                </div>
            </div>
        </div>
        <div id="outsourcing" class="solution-collapse collapse" data-parent="#solutions-display">
            <img class="w-100" src="{{ asset('./img/solutions/outsourcing.jpg') }}" alt="">
            <div class="p-5">
                <h2 class="mb-4">Outsourcing</h2>
                <p>
                    La nueva tendencia está orillando a las empresas a tener menos activos fijos y más flujo para hacer cada día más con menos,
                    pero sin perder su competitividad.
                </p>

                <p>
                    Para ello, te damos la opción de delegar procesos y servicios de un área tan importante como TI en manos de expertos,
                    ya que esta área requiere de profundos conocimientos, experiencia y alta capacidad de reacción.
                </p>

                <ul class="list-disc">
                    <li> Personal de soporte técnico</li>
                    <li> Procesos de TI</li>
                    <li> Hardware y Software</li>
                    <li> Asesoramiento tecnológico (virtual CIO)</li>
                </ul>

                <div class="d-flex justify-content-between align-items-center mt-5">
                    <p class="h5 p-bold mb-0">Nuestro equipo está listo para impulsar tu negocio</p>
                    <a href="#cotizar" class="btn btn-primary __contact" data-target-value="Outsourcing">Contacta a un
                        experto</a>
                </div>
            </div>
        </div>
        <div id="soporte-tecnico" class="solution-collapse collapse" data-parent="#solutions-display">
            <img class="w-100" src="{{ asset('./img/solutions/tech-support.jpg') }}" alt="">
            <div class="p-5">
                <h2 class="mb-4">Soporte Técnico</h2>
                <p>
                    Más del 70% del tiempo del personal de TI se desperdicia en tareas para mantener y soportar la operación, cuando lo que la
                    organización necesita, es su capacidad para innovar y posicionarse como líderes de su ramo.
                </p>

                <p>
                    Para nosotros lo más importante es maximizar el aprovechamiento de los recursos tecnológicos y brindarte soporte, orientación
                    y mantenimiento, entendiendo a la perfección tus metas y objetivos para integrar tendencias tecnológicas en los procesos de tu
                    negocio, al mismo tiempo que se realiza el monitoreo proactivo de seguridad y salud de la empresa para asegurar la disponibilidad
                    de las aplicaciones y servicios necesarios para la operación tu organización.
                </p>

                <ul class="list-disc">
                    <li> Mesa de ayuda</li>
                    <li> Gestión y mantenimiento de garantías y suscripciones</li>
                    <li> Break & Fix</li>
                </ul>

                <div class="d-flex justify-content-between align-items-center mt-5">
                    <p class="h5 p-bold mb-0">Nuestro equipo está listo para impulsar tu negocio</p>
                    <a href="#cotizar" class="btn btn-primary __contact" data-target-value="Soporte Técnico">Contacta
                        a un experto</a>
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
                <input type="hidden" name="subject" value="Servicios">
                <div class="form-group">
                    <input class="form-control" id="first-name" name="first-name" type="text" placeholder="Nombre:" required>
                </div>
                <div class="form-group">
                    <input class="form-control" id="last-name" name="last-name" type="text" placeholder="Apellido:" required>
                </div>
                <div class="form-group">
                    <input class="form-control" id="email" name="email" type="email" placeholder="Email:" required>
                </div>
                <div class="form-group">
                    <input class="form-control" id="name" name="company" type="text" placeholder="Empresa:" required>
                </div>
                <div class="form-group">
                    <select name="products" id="products" class="form-control" required>
                        <option>Selecciona una solución</option>
                        <option value="Servicios Profesionales">Servicios Profesionales</option>
                        <option value="Outsourcing">Outsourcing</option>
                        <option value="Soporte Técnico">Soporte Técnico</option>
                    </select>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="comment" id="comment" rows="4" cols="30" rows="1" placeholder="Mensaje (opcional):"></textarea>
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