@extends('layout.base')

@section('title', 'Soluciones IT')
@section('meta-description', 'Tecnología con Valor')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/solutions-it.css') }}">
    <!-- Swiper -->
    <link rel="stylesheet" href="{{ asset('lib/swiper/swiper-bundle.min.css') }}">
@endsection

@section('body')
    <section class="cover row flex-column-reverse flex-md-row align-items-center m-0 p-0">
        <div class="cover-description col-md-6 text-center text-md-left">
            <h1 class="page-title text-uppercase mb-md-5 mb-3">Soluciones it</h1>
            <p></p>
        </div>
        <div class="cover-img col-md-6 p-0">
            <img class="w-100" src="{{ asset('/img/solutions/cover-it.jpg') }}" alt="">
        </div>
    </section>
    <section id="solutions-display" class="content-solutions container-fluid row bg-white mx-0 p-0">
        <article id="solutions-list" class="col-md-4 p-lg-5 p-4">
            <p class="Ebig-text my-5">Descubre todas las soluciones que hemos diseñado para ti</p>
            <div class="solution pl-3 __infraestructura active">
                <a href="#infraestructura" aria-expanded="true" role="button" data-toggle="collapse"
                   class="__title">Infraestructura</a>
                <p>Nos encargamos de brindarte innovación con la tecnología más avanzada</p>
                <a href="#cotizar" class="__contact text-purple" data-target-value="Infraestructura">Contacta a un
                    experto</a>
            </div>
            <div class="solution __seguridad pl-3">
                <a href="#seguridad" aria-expanded="true" role="button" data-toggle="collapse"
                   class="__title">Seguridad</a>
                <p>Nos aseguramos de que los recursos del sistema de información de tu empresa se utilicen de la forma
                    que has decidido</p>
                <a href="#cotizar" class="__contact text-purple" data-target-value="Seguridad">Contacta a un experto</a>
            </div>
            <div class="solution __virtualizacion pl-3">
                <a href="#virtualizacion" aria-expanded="true" role="button" data-toggle="collapse"
                   class="__title">Virtualización</a>
                <p>Estamos especializados para proveer una visión más completa de todo el ambiente virtual</p>
                <a href="#cotizar" class="__contact text-purple" data-target-value="Virtualización">Contacta a un
                    experto</a>
            </div>
            <div class="solution __almacenamiento pl-3">
                <a href="#almacenamiento" aria-expanded="true" role="button" data-toggle="collapse"
                   class="__title">Almacenamiento</a>
                <p>Nos encargamos de administrar el rápido crecimiento de los datos no estructurados de tu empresa con
                    soluciones flexibles</p>
                <a href="#cotizar" class="__contact text-purple" data-target-value="Almacenamiento">Contacta a un
                    experto</a>
            </div>
            <div class="solution __nube pl-3">
                <a href="#nube" aria-expanded="true" role="button" data-toggle="collapse"
                   class="__title">Nube</a>
                <p>Te ayudamos a proporcionar la posibilidad de elección, la eficiencia y la flexibilidad de tu
                    organización</p>
                <a href="#cotizar" class="__contact text-purple" data-target-value="Nube">Contacta a un experto</a>
            </div>
            <div class="solution __proteccion-de-datos pl-3">
                <a href="#proteccion-de-datos" aria-expanded="true" role="button" data-toggle="collapse"
                   class="__title">Protección de datos</a>
                <p>Nos encargamos de asesorar, guiar e implementar medidas preventivas y recuperaciones rápidas</p>
                <a href="#cotizar" class="__contact text-purple" data-target-value="Protección de datos">Contacta a un
                    experto</a>
            </div>
            <div class="solution __equipo-de-computo pl-3">
                <a href="#equipo-de-computo" aria-expanded="true" role="button" data-toggle="collapse"
                   class="__title">Equipo de Cómputo</a>
                <p>Asesoramos y brindamos el equipo de cómputo que se adapte a tus necesidades</p>
                <a href="#cotizar" class="__contact text-purple" data-target-value="Equipo de Cómputo">Contacta a un
                    experto</a>
            </div>
            <div class="solution __licenciamiento pl-3">
                <a href="#licenciamiento" aria-expanded="true" role="button" data-toggle="collapse"
                   class="__title">Licenciamiento</a>
                <p>Asesoramos a tu organización para sacar el máximo provecho de sus inversiones en software</p>
                <a href="#cotizar" class="__contact text-purple" data-target-value="Licenciamiento">Contacta a un
                    experto</a>
            </div>
        </article>
        <article class="solutions-summary col-md-8 p-0">
            <div id="infraestructura" class="solution-collapse collapse show" data-parent="#solutions-display">
                <img class="w-100" src="{{ asset('./img/solutions/infrastructure-it.jpg') }}" alt="">
                <div class="p-5">
                    <h2 class="mb-4">Infraestructura</h2>
                    <p>
                        En el centro de datos se centralizan las operaciones y el equipo de TI de una organización,
                        aquí se recolecta, almacena, procesa, distribuye y provee acceso a grandes cantidades de
                        datos. Los centros de datos albergan los sistemas más críticos y son vitales para la
                        continuidad de las operaciones diarias. Tu empresa seguirá creciendo y el centro de datos debe
                        tener la capacidad de crecer continuamente, es decir, debe ser escalable y flexible.
                    </p>
                    <p class="h5 p-bold mt-4">¿Qué hacemos por ti?</p>
                    <p>
                        Nos encargamos de brindarte innovación con la tecnología más avanzada para flexibilizar,
                        optimizar,
                        y garantizar la disponibilidad exigida por el negocio en el proceso de transformación e
                        implementación del centro de datos, contribuyendo en el máximo retorno de inversión de la
                        consolidación de TI, asegurando la ejecución de las mejores prácticas de integración de
                        productos.
                    </p>
                    <div class="d-flex justify-content-between align-items-center mt-5">
                        <p class="h5 p-bold mb-0">Nuestro equipo está listo para impulsar tu negocio</p>
                        <a href="#cotizar" class="btn btn-primary __contact" data-target-value="Infraestructura">Contacta
                            a un experto</a>
                    </div>
                </div>
            </div>
            <div id="seguridad" class="solution-collapse collapse" data-parent="#solutions-display">
                <img class="w-100" src="{{ asset('./img/solutions/infrastructure-it.jpg') }}" alt="">
                <div class="p-5">
                    <h2 class="mb-4">Seguridad</h2>
                    <p>
                        Las empresas manejan a diario gran cantidad de información y parte de esta información es más
                        sensible, ya que es estratégica para el negocio, contiene datos personales de clientes,
                        proveedores o empleados, tiene valor como propiedad intelectual, etc. por este motivo, es
                        imprescindible una adecuada gestión y protección de la información que se maneja, tanto para
                        asegurar la actividad del negocio como para cumplir con los requisitos legales que apliquen
                    </p>
                    <p>
                        La seguridad informática es un conjunto de herramientas, procedimientos y estrategias que
                        tienen como objetivo garantizar la integridad, disponibilidad y confidencialidad de la
                        información de tu empresa para asegurar la continuidad del negocio y minimizar daños
                        comerciales.
                    </p>
                    <p class="h5 p-bold mt-4">¿Qué hacemos por ti?</p>
                    <p>
                        Nos aseguramos de que los recursos del sistema de información de tu empresa se utilicen de la
                        forma que has decidido, implementando estrategias de seguridad efectiva que se caracterizan por
                        ser integrales y fundamentadas sobre tu arquitectura de TI. Esta estrategia es manejable,
                        adaptable, flexible y proactiva para que garantice la seguridad desde el centro de datos hasta
                        el usuario final
                    </p>
                    <div class="d-flex justify-content-between align-items-center mt-5">
                        <p class="h5 p-bold mb-0">Nuestro equipo está listo para impulsar tu negocio</p>
                        <a href="#cotizar" class="btn btn-primary __contact" data-target-value="Seguridad">Contacta a un
                            experto</a>
                    </div>
                </div>
            </div>
            <div id="virtualizacion" class="solution-collapse collapse" data-parent="#solutions-display">
                <img class="w-100" src="{{ asset('./img/solutions/infrastructure-it.jpg') }}" alt="">
                <div class="p-5">
                    <h2 class="mb-4">Virtualización</h2>
                    <p>
                        El avance de las tecnologías de virtualización permiten la optimización de los recursos
                        tecnológicos e informáticos de tu empresa y lograr un mejor aprovechamiento de estos. Aumentan
                        la flexibilidad y posibilitan la movilidad gracias a la alta disponibilidad, puesto que permiten
                        la provisión de recursos de software y hardware de manera no dependiente (lo que supone una
                        gestión
                        mucho más eficiente de los recursos).
                    </p>
                    <p class="h5 p-bold mt-4">¿Qué hacemos por ti?</p>
                    <p>
                        Estamos especializados para proveer una visión más completa de todo el ambiente virtual, desde
                        rendimiento hasta análisis de factores que pudieran generar problemas posteriores siendo capaces
                        de predecir, alertar y automatizar tareas de virtualización.
                    </p>
                    <div class="d-flex justify-content-between align-items-center mt-5">
                        <p class="h5 p-bold mb-0">Nuestro equipo está listo para impulsar tu negocio</p>
                        <a href="#cotizar" class="btn btn-primary __contact" data-target-value="Virtualización">Contacta
                            a un experto</a>
                    </div>
                </div>
            </div>
            <div id="almacenamiento" class="solution-collapse collapse" data-parent="#solutions-display">
                <img class="w-100" src="{{ asset('./img/solutions/infrastructure-it.jpg') }}" alt="">
                <div class="p-5">
                    <h2 class="mb-4">Almacenamiento</h2>
                    <p>
                        La creciente dependencia de la mayoría de las organizaciones de sus sistemas de información pone
                        de manifiesto la necesidad de contar con medios y técnicas que permitan almacenar la información
                        de la manera más adecuada. No todos los archivos que guardamos tienen la misma importancia ni
                        necesitamos acceder a ellos con la misma rapidez.
                    </p>
                    <p>
                        Una correcta gestión de este proceso permite mantener en todo momento la integridad,
                        confidencialidad y disponibilidad de la información.
                    </p>
                    <p class="h5 p-bold mt-4">¿Qué hacemos por ti?</p>
                    <p>
                        Nos encargamos de administrar el rápido crecimiento de los datos no estructurados de tu empresa
                        con
                        soluciones flexibles y fáciles de administrar, consolidando de manera eficiente una amplia
                        variedad
                        de cargas de trabajo de almacenamiento a cualquier escala, a la vez que mejoramos el rendimiento
                        de
                        las cargas de trabajo más exigentes.
                    </p>
                    <div class="d-flex justify-content-between align-items-center mt-5">
                        <p class="h5 p-bold mb-0">Nuestro equipo está listo para impulsar tu negocio</p>
                        <a href="#cotizar" class="btn btn-primary __contact" data-target-value="Almacenamiento">Contacta
                            a un experto</a>
                    </div>
                </div>
            </div>
            <div id="nube" class="solution-collapse collapse" data-parent="#solutions-display">
                <img class="w-100" src="{{ asset('./img/solutions/infrastructure-it.jpg') }}" alt="">
                <div class="p-5">
                    <h2 class="mb-4">Nube</h2>
                    <p>
                        Cloud o “la Nube” es una tecnología de punta que se usa para hospedar y salvaguardar un sinfín
                        de
                        recursos, (programas, información, aplicaciones, etc.) permitiendo su acceso a través de
                        cualquier
                        dispositivo. Esta tecnología te ofrece potencial para mejorar la agilidad, la escalabilidad y
                        disponibilidad y además, te proporciona reducción de costos a través de la optimización y
                        eficacia
                        de los sistemas de cómputo.
                    </p>
                    <p class="h5 p-bold mt-4">¿Qué hacemos por ti?</p>
                    <p>
                        Te ayudamos a proporcionar la posibilidad de elección, la eficiencia y la flexibilidad que son
                        necesarias para dar respuesta a los cambios y el rápido crecimiento de tu organización de forma
                        segura y accesible desde cualquier lugar.
                    </p>
                    <div class="d-flex justify-content-between align-items-center mt-5">
                        <p class="h5 p-bold mb-0">Nuestro equipo está listo para impulsar tu negocio</p>
                        <a href="#cotizar" class="btn btn-primary __contact" data-target-value="Nube">Contacta a un
                            experto</a>
                    </div>
                </div>
            </div>
            <div id="proteccion-de-datos" class="solution-collapse collapse" data-parent="#solutions-display">
                <img class="w-100" src="{{ asset('./img/solutions/infrastructure-it.jpg') }}" alt="">
                <div class="p-5">
                    <h2 class="mb-4">Protección de datos</h2>
                    <p>
                        Hoy en día, las organizaciones entienden que los datos son muy importantes para la continuidad
                        del negocio y la propia existencia de la organización. Proteger esos datos y asegurar que estén
                        disponibles 7/24/365 es una tarea crítica.
                    </p>
                    <p class="h5 p-bold mt-4">¿Qué hacemos por ti?</p>
                    <p>
                        Conocemos los desafíos que supone mantener el negocio en marcha en todo momento, y los abordamos
                        con soluciones que evitan la pérdida de datos y proporcionan recuperación de alta velocidad,
                        protección verificada, reaprovechamiento de datos y visibilidad completa.
                    </p>
                    <p>
                        Nos encargamos de asesorar, guiar e implementar medidas preventivas y recuperaciones rápidas,
                        flexibles y confiables de las aplicaciones creando copias periódicas y proactivas de los activos
                        más importantes de las empresas: los datos.
                    </p>
                    <div class="d-flex justify-content-between align-items-center mt-5">
                        <p class="h5 p-bold mb-0">Nuestro equipo está listo para impulsar tu negocio</p>
                        <a href="#cotizar" class="btn btn-primary __contact" data-target-value="Protección de datos">Contacta
                            a un experto</a>
                    </div>
                </div>
            </div>
            <div id="equipo-de-computo" class="solution-collapse collapse" data-parent="#solutions-display">
                <img class="w-100" src="{{ asset('./img/solutions/infrastructure-it.jpg') }}" alt="">
                <div class="p-5">
                    <h2 class="mb-4">Equipo de computo</h2>
                    <p>
                        Con la finalidad de simplificar la vida de los usuarios contamos con una gran gama de equipos de
                        cómputo de las marcas líderes en el mercado que te permiten adquirir lo último en tecnología.
                    </p>
                    <p class="h5 p-bold mt-4">¿Qué hacemos por ti?</p>
                    <p>
                        Asesoramos y brindamos el equipo de cómputo que se adapte a tus necesidades, con las
                        especificaciones técnicas y configuraciones especiales que nos solicites.
                    </p>
                    <div class="d-flex justify-content-between align-items-center mt-5">
                        <p class="h5 p-bold mb-0">Nuestro equipo está listo para impulsar tu negocio</p>
                        <a href="#cotizar" class="btn btn-primary __contact" data-target-value="Equipo de Cómputo">Contacta
                            a un experto</a>
                    </div>
                </div>
            </div>
            <div id="licenciamiento" class="solution-collapse collapse" data-parent="#solutions-display">
                <img class="w-100" src="{{ asset('./img/solutions/infrastructure-it.jpg') }}" alt="">
                <div class="p-5">
                    <h2 class="mb-4">Licenciamiento</h2>
                    <p>
                        Tenemos el conocimiento y la experiencia para asesorarle y entregarle la licencia adecuada a
                        su entorno de productividad. Adquiere con nosotros el licenciamiento necesario para antivirus,
                        sistemas operativos, office, virtualización, software de diseño, software para respaldo y
                        cualquier otro software.
                    </p>
                    <p class="h5 p-bold mt-4">¿Qué hacemos por ti?</p>
                    <p>
                        Asesoramos a tu organización para sacar el máximo provecho de sus inversiones en software,
                        ofreciendo una variedad de niveles de licencias de acuerdo con la necesidad para que de una
                        forma
                        flexible se fijen los costos.
                    </p>
                    <div class="d-flex justify-content-between align-items-center mt-5">
                        <p class="h5 p-bold mb-0">Nuestro equipo está listo para impulsar tu negocio</p>
                        <a href="#cotizar" class="btn btn-primary __contact" data-target-value="Licenciamiento">Contacta
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
                    <input type="hidden" name="LeadFormName" value="Soluciones IT">
                    <div class="form-group">
                        <input class="form-control" id="name" name="LeadFirstName" type="text"
                               placeholder="Nombre:" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="name" name="LeadLastName" type="text"
                               placeholder="Apellido:" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="email" name="LeadEmail" type="email" placeholder="Email:"
                               required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="name" name="LeadName" type="text" placeholder="Empresa:"
                               required>
                    </div>
                    <div class="form-group">
                        <select name="LeadProducts" id="productsSelect" class="form-control" required>
                            <option>Selecciona una solución</option>
                            <option value="Infraestructura">Infraestructura</option>
                            <option value="Seguridad">Seguridad</option>
                            <option value="Virtualización">Virtualización</option>
                            <option value="Almacenamiento">Almacenamiento</option>
                            <option value="Nube">Nube</option>
                            <option value="Protección de datos">Protección de datos</option>
                            <option value="Equipo de Cómputo">Equipo de Cómputo</option>
                            <option value="Licenciamiento">Licenciamiento</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="LeadComment" id="msg" cols="30" rows="1"
                                  placeholder="Mensaje (opcional):"></textarea>
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
        $(document).ready(function () {
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

            solutionsTitles.on('click', function (ev) {
                ev.preventDefault();
                solutions.removeClass('active');
                $(this).parent('.solution').addClass('active');
            });

            // Quote area
            $('.__contact').on('click', function (ev) {
                ev.preventDefault();

                var $target = $("#cotizar");
                var $productsSelect = $("#productsSelect");
                $productsSelect.val($(this).data('target-value'));

                $('html, body').animate({
                    scrollTop: ($target.offset().top)
                }, 500, function () {
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
