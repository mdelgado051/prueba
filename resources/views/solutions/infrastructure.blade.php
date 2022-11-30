@extends('layout.base')
@section('title', 'Infraestructura')
@section('meta-description', 'Infraestructura')
@section('styles')
<link rel="stylesheet" href="{{ asset('css/services.css') }}">
@endsection
@section('body')
<section id="cover" class="container-fluid" style="background-image: url({{ asset('img/services/infrastructure/cover.jpg') }})">
    <article class="container text-white">
        <h1 class="page-title uppercase text-center text-md-left" data-aos="fade-down" data-aos-duration="1150">Plataforma Tecnológica Sólida y Confiable</h1>
        <p class="text-center text-md-left mx-auto mx-md-0" data-aos="fade-down" data-aos-duration="1250">
            Nuestro objetivo es darle a nuestros clientes un resultado de nivel 5.0, conoce a
            detalle cómo lo logramos.
        </p>
    </article>
</section>

<section id="managed-services" class="cintainer-fluid align-items-center bg-white row px-0 m-0">
    <img class="col-md-6 col-12 px-0 my-5 my-md-0" src="{{ asset('img/services/infrastructure/cover2.jpg') }}" alt="" data-aos="fade-right" data-aos-duration="1500">
    <div class="col-lg-5 col-md-6 p-0 pl-lg-5 px-md-3 px-5" data-aos="fade-left" data-aos-duration="1500">
        <p>
            Sabemos que la infraestructura y la innovación tecnológica son motores fundamentales del crecimiento y desarrollo económico de las organizaciones,
            ya que éstas <b>pueden perder hasta un 39% de rendimiento óptimo, al no actualizar sus recursos tecnológicos a  tiempo.</b>
        </p>
        <p>
            Te ayudamos a simplificar procesos, ahorrar costos, actualizar tecnología y aumentar el desempeño de las aplicaciones y procesos exigidos por tu negocio.
            Lo hacemos a través de recursos tecnológicos que soporten y aseguren la disponibilidad, productividad y el rápido acceso a la información y en conjunto
            con nuestros especialistas que te acompaña desde el diseño y definición de la solución hasta la implementación y soporte de la misma.
        </p>
        <ul>
            <li> Centro de datos</li>
            <li> Virtualización</li>
            <li> Poder de cómputo</li>
            <li> Almacenamiento</li>
            <li> Migración y servicios en la nube</li>
        </ul>
    </div>
</section>

<section id="solutions-display" class="content-solutions container-fluid row bg-white mx-0 p-0">
    <article id="solutions-list" class="col-md-4 p-lg-5 p-4">
        <p class="Ebig-text my-5">Descubre nuestras soluciones en Infraestructura</p>
        <div class="solution pl-3 __infraestructura active">
            <a href="#virtualizacion" aria-expanded="true" role="button" data-toggle="collapse" class="__title">Virtualización</a>
            <p>Con el apoyo y asesoría del equipo especialista de Sertei será más sencillo la mejora de procesos dentro de toda tu empresa.</p>
            <a href="#cotizar" class="__contact text-purple" data-target-value="Virtualización">Contacta a un experto</a>
        </div>
        <div class="solution __seguridad pl-3">
            <a href="#hardware" aria-expanded="true" role="button" data-toggle="collapse" class="__title">Hardware</a>
            <p>Tener tus equipos actualizados ayudará a ejecutar hasta un 20% más rápido que con equipos obsoletos.</p>
            <a href="#cotizar" class="__contact text-purple" data-target-value="Hardware">Contacta a un experto</a>
        </div>
        <div class="solution __virtualizacion pl-3">
            <a href="#almacenamiento" aria-expanded="true" role="button" data-toggle="collapse" class="__title">Almacenamiento</a>
            <p>El resguardo de la información se vuelve cada vez más importante en el día a día para seguir con la operación.</p>
            <a href="#cotizar" class="__contact text-purple" data-target-value="Almacenamiento">Contacta a un
                experto</a>
        </div>
        <div class="solution __virtualizacion pl-3">
            <a href="#nube" aria-expanded="true" role="button" data-toggle="collapse" class="__title">Nube</a>
            <p>Con esta modalidad se puede lograr hasta un 21% de ahorro en costos en menos de 1 año.</p>
            <a href="#cotizar" class="__contact text-purple" data-target-value="Nube">Contacta a un
                experto</a>
        </div>
    </article>
    <article class="solutions-summary col-md-8 p-0">
        <div id="virtualizacion" class="solution-collapse collapse show" data-parent="#solutions-display">
            <div class="cover" style="background-image: url({{ asset('./img/services/infrastructure/virtualization.jpg') }})">
            </div>
            <div class="p-5">
                <h2 class="mb-4">Virtualización - <small>Optimización y gestión de recursos tecnológicos</small></h2>
                <p>
                    A medida que las cargas de trabajo continúan aumentando y cambiando, las áreas de TI necesitan encontrar una manera de habilitar la
                    agilidad del negocio de forma más rápida, eficiente y segura.
                </p>
                <p>
                    Según estudios realizados por las principales firmas de investigación de mercados como IDC y Gartner, la Virtualización se ha
                    convertido en una de las tecnologías estratégicas de TI que tiene y seguirá teniendo una importancia cada vez más relevante para
                    las pequeñas y grandes empresas por igual en los próximos años.
                </p>

                <p>
                    Con el apoyo y asesoría del equipo especialista de Sertei será más sencillo la mejora de procesos dentro de toda tu empresa,
                    aportando eficiencia y reducción de costos, ya que lograras una gestión más ágil de tus programas, ayudando a la rapidez de tus tareas.
                </p>
                <div class="d-flex justify-content-between align-items-center mt-5">
                    <p class="h5 p-bold mb-0">Nuestro equipo está listo para impulsar tu negocio</p>
                    <a href="#cotizar" class="btn btn-primary __contact" data-target-value="Virtualización">Contacta
                        a un experto</a>
                </div>
            </div>
        </div>
        <div id="hardware" class="solution-collapse collapse" data-parent="#solutions-display">
            <div class="cover" style="background-image: url({{ asset('./img/services/infrastructure/hardware.jpg') }})">
            </div>
            <div class="p-5">
                <h2 class="mb-4">Hardware - <small>Equipos físicos para alto desempeño</small></h2>
                <p>
                    Entendemos que la actualización de tus recursos tecnológicos físicos a lo largo del tiempo conlleva una gran inversión de capital que
                    puede no estar planeada.
                </p>

                <p>
                    El resultado es una gran cantidad de equipos obsoletos y con bajo rendimiento. Tener tus equipos actualizados ayudará a ejecutar
                    hasta un 20% más rápido que con equipos obsoletos.
                </p>

                <p>
                    Sertei, en compañía de marcas de renombre, logra ofrecerte un plan hecho a la medida que minimiza la inversión inicial y garantiza
                    la estandarización, actualización y adecuada administración de tus recursos físicos de TI.
                </p>

                <div class="d-flex justify-content-between align-items-center mt-5">
                    <p class="h5 p-bold mb-0">Nuestro equipo está listo para impulsar tu negocio</p>
                    <a href="#cotizar" class="btn btn-primary __contact" data-target-value="Hardware">Contacta a un
                        experto</a>
                </div>
            </div>
        </div>
        <div id="almacenamiento" class="solution-collapse collapse" data-parent="#solutions-display">
            <div class="cover" style="background-image: url({{ asset('./img/services/infrastructure/storage.jpg') }})">
            </div>
            <div class="p-5">
                <h2 class="mb-4">Almacenamiento - <small>Resguardo simple, seguro y flexible de los datos</small></h2>
                <p>
                    El resguardo de la información se vuelve cada vez más importante en el día a día para seguir con la operación. 
                </p>

                <p>
                    ¿Qué sucedería si un día se apaga un servidor y nos damos cuenta que al restaurarlo ya no enciende correctamente?
                    Lo primero que se nos vendría a la mente es “¡mis archivos!”. Ésta y varias situaciones como  errores humanos, borrado
                    accidental, uso negligente, virus, etc. pueden suceder, por ello es indispensable realizar un respaldo a fin de aminorar
                    estos problemas.
                </p>

                <p>
                    Te ayudamos con la correcta gestión de tu proceso de respaldo y almacenamiento, lo cual te permite mantener en todo momento
                    la integridad, confidencialidad y disponibilidad de la información a través de soluciones flexibles y fáciles de administrar,
                    garantizando con esto la continuidad de tu negocio.
                </p>

                <div class="d-flex justify-content-between align-items-center mt-5">
                    <p class="h5 p-bold mb-0">Nuestro equipo está listo para impulsar tu negocio</p>
                    <a href="#cotizar" class="btn btn-primary __contact" data-target-value="Almacenamiento">Contacta
                        a un experto</a>
                </div>
            </div>
        </div>

        <div id="nube" class="solution-collapse collapse" data-parent="#solutions-display">
            <div class="cover" style="background-image: url({{ asset('./img/services/infrastructure/cloud.jpg') }})">
            </div>
            <div class="p-5">
                <h2 class="mb-4">Nube - <small>Acceso a la información en tiempo real</small></h2>
                <p>
                    Entendemos que la disponibilidad de toda información desde cualquier ubicación es prioridad para obtener mayores y mejores
                    resultados en cualquier tipo de organización.
                </p>

                <p>
                    Con esta modalidad se puede lograr hasta un 21% de ahorro en costos en menos de 1 año.
                </p>

                <p>
                    Te ayudamos a mejorar la agilidad y la escalabilidad de tu información mientras reduces costos a través de la optimización
                    y la eficacia de los sistemas de cómputo de forma segura y accesible desde cualquier lugar.
                </p>

                <div class="d-flex justify-content-between align-items-center mt-5">
                    <p class="h5 p-bold mb-0">Nuestro equipo está listo para impulsar tu negocio</p>
                    <a href="#cotizar" class="btn btn-primary __contact" data-target-value="Nube">Contacta
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
                <input type="hidden" name="subject" value="Solución Infraestructura">
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
                        <option value="Virtualización">Virtualización</option>
                        <option value="Hardware">Hardware</option>
                        <option value="Almacenamiento">Almacenamiento</option>
                        <option value="Nube">Nube</option>
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