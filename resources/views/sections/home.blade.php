@extends('layout.base')

@section('title', 'Inicio')
@section('meta-description', 'Tecnología con Valor')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
<!-- Swiper -->
<link rel="stylesheet" href="{{ asset('lib/swiper/swiper-bundle.min.css') }}">
@endsection

@section('body')

<!-- Cover -->
<section id="cover" class="container-fluid">
    <div class="row flex-column-reverse flex-lg-row">
        <div class="col-lg-5 cover-info d-flex justify-items-center align-items-center">
            <div>
                <h1 class="page-title mb-md-3 mb-4">¿Buscas herramientas que te permitan transformar, fortalecer e innovar?</h1>
                <p>
                    ¡Estás en el sitio correcto!
                    Trabajamos en conjunto contigo para el crecimiento
                    y desarrollo de tu empresa por medio de herramientas tecnológicas, enfocándonos
                    en conocer tu situación actual, nos comprometemos en minimizar riesgos, asegurando un resultado óptimo.
                </p>
                <a href="{{ route('services') }}" role="button" class="btn btn-pill btn-block btn-primary">
                    Descubre cómo podemos ayudarte
                </a>

                <div class="social-links">
                    <ul>
                        <li><a target="_blank" href="https://www.facebook.com/Sertei/"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a target="_blank" href="https://www.instagram.com/serteisoluciones/"><i class="fab fa-instagram"></i></a></li>
                        <li><a target="_blank" href="https://www.linkedin.com/company/2563374"><i class="fab fa-linkedin-in"></i></a></li>
                        {{--<li><a target="_blank" href="#"><i class="fab fa-youtube"></i></a></li>--}}
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-7 p-0 cover-picture" style="background-image: url({{ asset('img/home/cover.jpg') }})">
            <!-- Should place a video -->
            <!-- <video src=""></video> -->
        </div>
    </div>
</section>

<!-- About us -->
<section id="about" class="container-fluid full-section-block mx-0">
    <div class="row full-row">
        <div class="col-12 col-lg-5 col-md-6 about-info d-flex justify-items-center align-items-center">
            <div data-aos="fade-zoom-in" data-aos-duration="1000">
                <h2 class="mb-4">¿Qué hacemos?</h2>
                <p class="mb-4">
                    Nos integramos con tu organización para la mejora continua. Contamos con más de 16 años de experiencia en diversos sectores del mercado, por lo que conocer la situación de nuestros clientes es nustra prioridad.
                    Con base en nuestra experiencia y el compromiso de todo nuestro equipo de trabajo, garantizamos la satisfacción y la minimización de cualquier riesgo en la planeación, ejecución y desarrollo de tus proyectos.
                    <br><br>
                    Logremos en conjunto superar cada etapa que se presente, trabajando en el crecimiento y desarrollo de tus objetivos por medio de herramientas y soluciones tecnológicas enfocadas.
                </p>

                <a href="{{ route('us') }}" class="btn btn-pill btn-light-outline" role="button">Conócenos mejor</a>
            </div>
        </div>

        <div class="col-12 col-lg-7 col-md-6 about-carrousel-box d-flex justify-content-center align-items-center px-0">
            <div class="swiper-container about-carrousel" data-aos="fade-zoom-in" data-aos-duration="1000">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background-image: url({{ asset('img/home/about-1.jpg') }})"></div>
                </div>
                <div class="swiper-pagination"></div>

                <!-- <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div> -->

            </div>
        </div>
    </div>
</section>

<!-- XaaS (Services) -->
<section id="xaas" class="container-fluid full-section-block">
    <div class="container p-0" data-aos="fade-zoom-in" data-aos-easing="linear" data-aos-duration="1000">
        <div class="row xaas-header">
            <div class="col">
                <h2>Nuestras líneas de negocio</h2>
            </div>

            <div class="d-none d-md-block col-auto know-more-col">
                <!-- <a class="p text-low" href="{{ route('solutions-it') }}">Conoce todas nuestras soluciones</a> -->
            </div>
        </div>

        <ul class="nav nav-justified services-list" id="servicesTabs" role="tablist">
            <li><a href="#infraestructura" id="infraestructura-tab" data-toggle="tab" role="tab" aria-controls="home" aria-selected="true" class="col-md-4 col-lg-2 service active col-5">
                    <h3 class="h6 text-center">Infraestructura</h3>
                    <img src="{{ asset('img/home/iaas-icon.png') }}" alt="Infraestructura">
                </a></li>

            <li><a href="#seguridad" id="seguridad-tab" data-toggle="tab" role="tab" aria-controls="seguridad" aria-selected="false" class="col-md-4 col-lg-2 col-6 service px-md-2 px-4">
                    <h3 class="h6 text-center">Seguridad </h3>
                    <img src="{{ asset('img/home/secaas-icon.png') }}" alt="Seguridad">
                </a></li>
            <li><a href="#managed-services" class="col-md-4 col-lg-2 col-6 service px-md-2 px-4">
                    <h3 class="h6 text-center">Servicios </h3>
                    <img src="{{ asset('img/home/iaas-icon.png') }}" alt="Seguridad">
                </a></li>
        </ul>
    </div>

    <div class="tab-content" id="servicesContent">
        <div id="infraestructura" class="tab-pane fade show active" role="tabpanel" aria-labelledby="infraestructura-tab">
            <div class="row service-detail">
                <div class="col-12 col-md-6 offset-lg-1" data-aos="fade-zoom-in" data-aos-duration="1000">
                    <img class="img-fluid rounded" src="{{ asset('img/home/hardware-dell.jpg') }}">
                </div>

                <div class="col-12 col-lg-4 col-md-6 service-detail-info d-flex align-items-center justify-content-center" data-aos="fade-zoom-in" data-aos-duration="1000">
                    <div>
                        <h4 class="h3 mb-3">Plataforma Tecnológica Sólida y Confiable</h4>
                        <p>
                            Sabemos que la infraestructura y la innovación tecnológica son motores fundamentales del crecimiento y desarrollo económico de las organizaciones,
                            ya que éstas pueden perder hasta un 39% de rendimiento óptimo, al no actualizar sus recursos tecnológicos a  tiempo.
                        </p>
                        <h6>¿Cómo podemos ayudarte?</h6>
                        <ul class="list-disc">
                            <li> Centro de datos</li>
                            <li> Virtualización</li>
                            <li> Poder de cómputo</li>
                            <li> Almacenamiento</li>
                            <li> Migración y servicios en la nube</li>
                        </ul>
                        <div class="ctas mt-4">
                            <a href="{{ route('infrastructure') }}" class="btn btn-pill btn-complementary" role="button">Descubre más</a>
                            <a href="{{ route('contact') }}" class="btn btn-pill btn-primary" role="button">Cotiza</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="seguridad" class="tab-pane fade" role="tabpanel" aria-labelledby="seguridad-tab">
            <div class="row service-detail align-items-center">
                <div class="col-12 col-md-6 offset-lg-1">
                    <img class="img-fluid" src="{{ asset('img/home/security.jpg') }}">
                </div>

                <div class="col-12 col-lg-4 col-md-6 service-detail-info d-flex align-items-center justify-content-center">
                    <div>
                        <h4 class="h3 mb-3">Prevención y Detección de Amenazas</h4>
                        <p>
                            Sabemos que la garantía de que tus datos críticos, correo electrónico, aplicativos y continuidad
                            de tu negocio se encuentren protegidos ante cualquier amenaza, es más importante que nunca.
                        </p>
                        <p class="mb-3">
                            8 de cada 10 ejecutivos en el mundo realizan actividad que pone en riesgo la información de su organización,
                            creciendo los ataques contra empresas hasta ser un 81% del total . 
                        </p>
                        <h6>¿Cómo podemos ayudarte?</h6>
                        <ul class="list-disc">
                            <li> Simulación y detección de amenazas</li>
                            <li> Control de accesos a la red corporativa</li>
                            <li> Protección de datos</li>
                            <li> Seguridad de los dispositivos</li>
                            <li> Continuidad de negocio</li>
                        </ul>
                        <div class="ctas mt-4">
                            <a href="{{ route('security') }}" class="btn btn-pill btn-complementary" role="button">Descubre
                                más</a>
                            <a href="{{ route('contact') }}" class="btn btn-pill btn-primary" role="button">Cotiza</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Managed Services -->
<section id="managed-services" class="container-fluid">
    <div class="row">
        <div class="data-card" data-aos="fade-zoom-in" data-aos-duration="1000">
            <div class="mb-md-3 d-flex flex-column-reverse">
                <h2>Gestión de Procesos y Servicios TI</h2>
                <p class="m-0 text-low small-text">Impulsemos tu negocio</p>
            </div>
            <h3 class="h4 mb-3 text-primary">¿De qué forma podemos ayudarte?</h3>
            <p>
                Más del 50% de los departamentos de TI se ven rebasados en conocimiento y experiencia por la tasa de actualización
                que sufre cada dos años la tecnología, restando a las organizaciones competitividad en el mercado.
            </p>
            <ul class="list-disc">
                <li> Servicios Profesionales</li>
                <li> Outsourcing</li>
                <li> Soporte Técnico</li>
            </ul>

            <a href="{{ route('services') }}" class="btn btn-primary">Conoce más</a>
        </div>

        <div class="col-12 col-lg-8 offset-lg-4 offset-xl-5 p-0" data-aos="fade-zoom-in" data-aos-duration="1000">
            <img class="img-fluid" src="{{ asset('img/home/managed-services.jpg') }}" alt="¿Qué son los servicios administrados?">
        </div>
    </div>
</section>

<!-- Financing -->
<section id="financing" class="container row align-items-center px-0">
    <div class="cont-img-financing col-md-6 pt-5 pr-5 pl-0 mb-5" data-aos="fade-zoom-in" data-aos-duration="1000">
        <img class="financing-img" src="{{ asset('img/home/financing.png') }}" alt="">
        <img class="financing-img-bg" src="{{ asset('img/home/financing-bg.png') }}" alt="">
    </div>
    <div class="col-md-6 p-md-0 px-4" style="overflow: hidden;">
        <div data-aos="fade-zoom-in" data-aos-duration="1000">
            <h2>Sertei Financing</h2>
            <p>
                Nuestra nueva división te apoya a conseguir que tus proyectos de tecnología sean posibles en el
                menor
                tiempo sin comprometer la estabilidad financiera de tu empresa.
            </p>
        </div>
        <div data-aos="fade-zoom-in" data-aos-duration="1000">
            <h4 class="mt-lg-5 mt-md-4">¿Qué te ofrecemos?</h4>
            <ul>
                <li>Liberar tu presupuesto</li>
                <li>Maximizar tus oportunidades</li>
                <li>Reducir tus costos</li>
                <li>Personalizar tu proyecto de TI</li>
                <li>Brindarte soporte profesional</li>
                <li>Mejor precio</li>
            </ul>
        </div>
    </div>
</section>


<section id="brands" class="position-relative container row" style="z-index: 10">
    {{-- brands-certification --}}
    <article class="col-12">
        <div class="brands" data-aos="fade-zoom-in" data-aos-duration="1000">
            <h3 class="text-primary">Nuestras Alianzas</h3>
            <div class="row">

                <div id="swiperBrands" class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="{{ asset('img/home/brands/logo-dell.png') }}" alt="Dell Thechonogies"></div>
                        <div class="swiper-slide"><img src="{{ asset('img/home/brands/logo-microsoft.png') }}" alt="Microsoft"></div>
                        <div class="swiper-slide"><img src="{{ asset('img/home/brands/logo-sophos.png') }}" alt="Sophos"></div>
                        <div class="swiper-slide"><img src="{{ asset('img/home/brands/logo-fortinet.png') }}" alt="Fortinet"></div>
                        <div class="swiper-slide"><img src="{{ asset('img/home/brands/logo-HPE.png') }}" alt="HPE"></div>
                        <div class="swiper-slide"><img src="{{ asset('img/home/brands/logo-symantec.png') }}" alt="Symantec"></div>
                        <div class="swiper-slide"><img src="{{ asset('img/home/brands/logo-arcserve.png') }}" alt="Arcserve"></div>
                        <div class="swiper-slide"><img src="{{ asset('img/home/brands/logo-veeam.png') }}" alt="Veeam"></div>
                        <div class="swiper-slide"><img src="{{ asset('img/home/brands/logo-pb_sws.png') }}" alt="Amazon Web Services"></div>
                        <div class="swiper-slide"><img src="{{ asset('img/home/brands/logo-eset.png') }}" alt="Eset"></div>
                        <div class="swiper-slide"><img src="{{ asset('img/home/brands/logo-lenovo.png') }}" alt="Lenovo"></div>
                        <div class="swiper-slide"><img src="{{ asset('img/home/brands/logo-vmware.png') }}" alt="VMware"></div>
                        <div class="swiper-slide"><img src="{{ asset('img/home/brands/logo-cisco.png') }}" alt="Cisco"></div>
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </article>

    <!-- <article class="col-md-6" data-aos="fade-zoom-in" data-aos-duration="1000">
        <div class="certification" data-aos="fade-zoom-in" data-aos-duration="1000">
            <h3 class="text-primary">Certificaciones</h3>
            <div class="row mx-md-0 pr-lg-5 mx-3 pr-2">
                <img class="col-lg-2 col-md-3 col-4 px-lg-2 my-3" src="{{ asset('img/home/certification/certification-1.png') }}" alt="certificación sophos">
                <img class="col-lg-2 col-md-3 col-4 px-lg-2 my-3" src="{{ asset('img/home/certification/certification-2.png') }}" alt="certificación sophos">
                <img class="col-lg-2 col-md-3 col-4 px-lg-2 my-3" src="{{ asset('img/home/certification/certification-3.png') }}" alt="certificación sophos">
                <img class="col-lg-2 col-md-3 col-4 px-lg-2 my-3" src="{{ asset('img/home/certification/certification-4.png') }}" alt="certificación cisco CCNA">
                <img class="col-lg-2 col-md-3 col-4 px-lg-2 my-3" src="{{ asset('img/home/certification/certification-5.png') }}" alt="certificación cisco CCENT">
                <img class="col-lg-2 col-md-3 col-4 px-lg-2 my-3" src="{{ asset('img/home/certification/certification-6.png') }}" alt="certificación HCSA">
                <img class="col-lg-2 col-md-3 col-4 px-lg-2 my-3" src="{{ asset('img/home/certification/certification-7.png') }}" alt="certificación associate">
                <img class="col-lg-2 col-md-3 col-4 px-lg-2 my-3" src="{{ asset('img/home/certification/certification-8.png') }}" alt="certificación acacufy">
                <img class="col-lg-2 col-md-3 col-4 px-lg-2 my-3" src="{{ asset('img/home/certification/certification-9.png') }}" alt="certificación tecnoligias de monterrey">
                <img class="col-lg-2 col-md-3 col-4 px-lg-2 my-3" src="{{ asset('img/home/certification/certification-10.png') }}" alt="certificación vrnware">
            </div>
        </div>
    </article> -->

    {{-- clients --}}
    {{--<article class="clients col-md-6" data-aos="fade-zoom-in" data-aos-duration="1000">--}}
    {{--<h5 class="text-primary">¿Cómo ayudamos a nuestros clientes?</h5>--}}
    {{--<p>--}}
    {{--But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born--}}
    {{--and I will--}}
    {{--give you a complete accoun--}}
    {{--</p>--}}
    {{--<div class="row align-items-center mt-4 mb-2">--}}
    {{--<img class="col-md-3 col-4 px-3" src="{{ asset('img/home/clients/coparmex.png') }}" alt="logo coparmex">--}}
    {{--<div class="col-lg-8 col-md-9 col-8">--}}
    {{--<p class="text-primary big-text mb-0">Intermex</p>--}}
    {{--<p class="thin-text text-grey mb-2">2015 - 2020</p>--}}
    {{--<p class="small-text mb-0">Solución integral de arquitectura tecnológica</p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<p>--}}
    {{--“But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was--}}
    {{--born and I will give you a complete account of the system, and expound the actual teachings of the--}}
    {{--great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or--}}
    {{--avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue--}}
    {{--pleasure rationally encounter consequences that are extremely painful. Nor again is there".--}}
    {{--</p>--}}
    {{--<img class="my-4 w-100" src="{{ asset('./img/home/video.jpg') }}" alt="">--}}
    {{-- <video src=""></video> --}}
    {{--<div class="row align-items-center">--}}
    {{--<img class="col-md-3 col-4 px-3" src="{{ asset('img/home/clients/banco.png') }}" alt="logo banco">--}}
    {{--<div class="col-lg-8 col-md-9 col-8">--}}
    {{--<p class="text-primary big-text mb-0">Bankaool</p>--}}
    {{--<p class="thin-text text-grey mb-2">2017 - 2018</p>--}}
    {{--<p class="small-text mb-0">Implementación de infraestructura digital</p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="row align-items-center">--}}
    {{--<img class="col-md-3 col-4 px-3" src="{{ asset('img/home/clients/wistorn.png') }}" alt="logo wistorn">--}}
    {{--<div class="col-lg-8 col-md-9 col-8">--}}
    {{--<p class="text-primary big-text mb-0">Wistron</p>--}}
    {{--<p class="thin-text text-grey mb-2">2015 - 2019</p>--}}
    {{--<p class="small-text mb-0">Soluciones de seguridad digital</p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</article>--}}
</section>

{{-- testimony --}}
<section id="testimony" class="container-fluid row mt-md-0 mt-5 mx-0">
    <div class="col-12">
        <h2 class="text-center mt-4 mb-5">Nuestros clientes</h2>
    </div>
    <article class="col-md-4 offset-md-1 col-12 clients-list">
        <div class="row">
            <div class="col-6 col-md-3"><img class="img-fluid" src="{{ asset('img/home/clients/0.png') }}"></div>
            <div class="col-6 col-md-3"><img class="img-fluid" src="{{ asset('img/home/clients/1.png') }}"></div>
            <div class="col-6 col-md-3"><img class="img-fluid" src="{{ asset('img/home/clients/2.png') }}"></div>
            <div class="col-6 col-md-3"><img class="img-fluid" src="{{ asset('img/home/clients/3.png') }}"></div>
            <div class="col-6 col-md-3"><img class="img-fluid" src="{{ asset('img/home/clients/4.png') }}"></div>
            <div class="col-6 col-md-3"><img class="img-fluid" src="{{ asset('img/home/clients/5.png') }}"></div>
            <div class="col-6 col-md-3"><img class="img-fluid" src="{{ asset('img/home/clients/6.png') }}"></div>
            <div class="col-6 col-md-3"><img class="img-fluid" src="{{ asset('img/home/clients/7.png') }}"></div>
        </div>
    </article>
    <article class="col-md-5 offset-md-1 col-12">
        <div id="swiper-testimony" class="swiper-container" data-aos="fade-zoom-in" data-aos-duration="1000">
            <div class="swiper-wrapper">

                <div class="swiper-slide text-center text-md-left">
                    <div class="row align-items-center mb-3">
                        <div class="col-md-8 col-12">
                            <p class="text-primary Ebig-text p-bold mb-0">Anthony Vargas</p>
                            <p class="thin-text text-grey mb-0">Bourns De Mexico</p>
                        </div>
                    </div>
                    <p class="text-testimony px-md-4 py-md-0 py-4">
                        Han trabajado muy bien y resuelto todas nuestras dudas.
                    </p>
                    <p class="date-testimony small-text text-grey">01/11/2020</p>
                </div>

                <div class="swiper-slide text-center text-md-left">
                    <div class="row align-items-center mb-3">
                        <div class="col-md-8 col-12">
                            <p class="text-primary Ebig-text p-bold mb-0">Erik Solis</p>
                            <p class="thin-text text-grey mb-0">TSSI</p>
                        </div>
                    </div>
                    <p class="text-testimony px-md-4 py-md-0 py-4">
                        Excelente actitud del equipo.
                    </p>
                    <p class="date-testimony small-text text-grey">01/11/2020</p>
                </div>

                <div class="swiper-slide text-center text-md-left">
                    <div class="row align-items-center mb-3">
                        <div class="col-md-8 col-12">
                            <p class="text-primary Ebig-text p-bold mb-0">Rodolfo  Reséndiz</p>
                            <p class="thin-text text-grey mb-0">Artec Motors</p>
                        </div>
                    </div>
                    <p class="text-testimony px-md-4 py-md-0 py-4">
                        Sertei es nuestra primera opción por ser mejores en precio.
                    </p>
                    <p class="date-testimony small-text text-grey">01/11/2020</p>
                </div>

                <div class="swiper-slide text-center text-md-left">
                    <div class="row align-items-center mb-3">
                        <div class="col-md-8 col-12">
                            <p class="text-primary Ebig-text p-bold mb-0">Jesús  Rodríguez</p>
                            <p class="thin-text text-grey mb-0">Climas Konfort</p>
                        </div>
                    </div>
                    <p class="text-testimony px-md-4 py-md-0 py-4">
                        Es una empresa que ofrece muy buen servicio.
                    </p>
                    <p class="date-testimony small-text text-grey">01/11/2020</p>
                </div>

                <div class="swiper-slide text-center text-md-left">
                    <div class="row align-items-center mb-3">
                        <div class="col-md-8 col-12">
                            <p class="text-primary Ebig-text p-bold mb-0">Ana Alanis</p>
                            <p class="thin-text text-grey mb-0">Tatung Mexico</p>
                        </div>
                    </div>
                    <p class="text-testimony px-md-4 py-md-0 py-4">
                        Me gusta la atención por parte de los ejecutivos de cuenta.
                    </p>
                    <p class="date-testimony small-text text-grey">01/11/2020</p>
                </div>

                <div class="swiper-slide text-center text-md-left">
                    <div class="row align-items-center mb-3">
                        <div class="col-md-8 col-12">
                            <p class="text-primary Ebig-text p-bold mb-0">Jorge Ríos</p>
                            <p class="thin-text text-grey mb-0">Ríos & Ríos</p>
                        </div>
                    </div>
                    <p class="text-testimony px-md-4 py-md-0 py-4">
                        En Chihuahua hay muy pocos expertos en ciberseguridad y Sertei sabe muy bien lo que hace.
                    </p>
                    <p class="date-testimony small-text text-grey">01/11/2020</p>
                </div>

                <div class="swiper-slide text-center text-md-left">
                    <div class="row align-items-center mb-3">
                        <div class="col-md-8 col-12">
                            <p class="text-primary Ebig-text p-bold mb-0">Francisco Mora</p>
                            <p class="thin-text text-grey mb-0">Tubería Laguna</p>
                        </div>
                    </div>
                    <p class="text-testimony px-md-4 py-md-0 py-4">
                        Ojalá sigan con la parte de prevención y tendencias como hasta ahora.
                    </p>
                    <p class="date-testimony small-text text-grey">01/11/2020</p>
                </div>

            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </article>
</section>

{{-- Content Events --}}
@if (isset($events) && count($events))
<section id="events">
    <div class="row align-items-center w-100 mb-4">
        <h2 class="col-md-9 col-8 h1 text-primary">Eventos</h2>
        <a class="col-lg-1 col-md-2 col-4 btn btn-primary-outline" href="{{ route('blog') }}#eventos">Ver más</a>
    </div>
    <div class="swiper-events swiper-container">
        <div class="swiper-wrapper pb-4">
            {{-- Event 1 --}}
            @foreach($events as $event)
            <div class="swiper-slide">
                <div class="event-img rounded text-white p-3" style="background-image: url({{ asset($event->getFirstMediaUrl('event-gallery')) }})">
                    <h6 class="h4">{{ $event->name }}</h6>
                    <p class="blog-date thin-text">Sertei - {{ $event->date->format('d / m / y') }}</p>
                </div>
                <div class="event-cont p-3 pt-4 small-text">
                    <img class="position-absolute" src="{{ asset('img/home/arrow-dark.png') }}" alt="">
                    <p class="small-text">
                        {{ $event->intro }}
                    </p>
                    <div>
                        <a class="btn btn-pill btn-primary small-text" href="{{ route('events.post', $event->slug) }}">Ver evento</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

{{-- Contact --}}
<section id="contact" class="bg-white">
    <article class="container row">
        <div class="contact-left col-md-6">
            <h2 class="h1 text-primary">¿Quieres contactarnos?</h2>
            <div class="accordion" id="content-andress">
                <div>
                    <div id="a-chihuahua">
                        <a href="#chihuahua" aria-expanded="true" role="button" data-toggle="collapse">Chihuahua,
                            Chih</a>
                    </div>
                    <div id="chihuahua" class="collapse show" aria-labelledby="a-chihuahua" data-parent="#content-andress">
                        <p class="text-adress small-text pl-4"><i class="fas fa-map-marker-alt"></i> Centro Ejecutivo Punto Alto #5500, Complejo Industrial El Saucito C.P 31125, Chihuahua, Chih.</p>
                        <p class="text-phone small-text pl-4"><i class="fas fa-phone"></i><a href="tel:6144321212" class="a-text">614 432
                                1212</a></p>
                    </div>
                </div>
                <div>
                    <div id="a-juarez">
                        <a href="#juarez" aria-expanded="true" role="button" data-toggle="collapse">Ciudad Jrz.</a>
                    </div>
                    <div id="juarez" class="collapse" aria-labelledby="a-juarez" data-parent="#content-andress">
                        <p class="text-phone small-text pl-4"><i class="fas fa-phone"></i><a href="tel:6566171800" class="a-text">656 617 18 00</a></p>
                    </div>
                </div>
                <div>
                    <div id="a-torreon">
                        <a href="#torreon" aria-expanded="true" role="button" data-toggle="collapse">Torreón</a>
                    </div>
                    <div id="torreon" class="collapse" aria-labelledby="a-torreon" data-parent="#content-andress">
                        <p class="text-adress small-text pl-4"><i class="fas fa-map-marker-alt"></i> Igniter
                            Business, Av. Presidente Carranza #68 Ote., Col. Centro, C.P. 27000</p>
                        <p class="text-phone small-text pl-4"><i class="fas fa-phone"></i><a href="tel:871-315-3699" class="a-text">(871)
                                315 36 99</a></p>
                    </div>
                </div>
            </div>
            <div class="mt-5">
                @include('layout._contact-form')
            </div>
        </div>
        <div class="d-md-block d-none col-md-6 content-maps position-relative">
            <iframe class="position-relative" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.117174271727!2d-106.12335808491748!3d28.626250082420242!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86ea4347b4612803%3A0x99e34d3405dc19c!2sSoluciones%20Informaticas%20SERTEI!5e0!3m2!1ses-419!2smx!4v1587659674672!5m2!1ses-419!2smx" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            <img class="contact-img position-absolute d-none d-lg-block" src="{{ asset('/img/home/contact.jpg') }}" alt="">
        </div>
    </article>
</section>

{{-- Improvement comments --}}
<section id="improvement-comments" class="row d-md-block d-none mx-0">
    <div class="col-6 offset-3">
        <p class="h2 text-center text-purple p-bold">Ayúdanos a mejorar</p>
        <p class="text-center">¿Tienes algún comentario? háznoslo saber.</p>
        <form class="contactLeadForm" action="{{ route('contact.lead') }}" method="POST">
            @csrf
            <input name="first-name" type="hidden" value="Anónimo">
            <input name="last-name" type="hidden" value="Anónimo">
            <input name="email" type="hidden" value="noreply@sertei.com">
            <input name="company" type="hidden" value="Anónimo">
            <input type="hidden" name="subject" value="Sugerencia">
            <div class="form-group">
                <textarea class="form-control" name="comment" id="commentary" rows="1" placeholder="Escribe tu mensaje" required></textarea>
                <button class="btn btn-pill btn-primary-outline mt-4" type="submit">Enviar</button>
            </div>
        </form>
    </div>
</section>

@endsection

@section('scripts')
<script src="{{ asset('js/contact.js') }}"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<script src="{{ asset('lib/swiper/swiper-bundle.min.js') }}"></script>
<script>
    var swiper = new Swiper('#swiper-testimony', {
        spaceBetween: 25,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

    var swiper = new Swiper('#swiperBrands', {
        slidesPerView: 6,
        spaceBetween: 30,
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        autoplay: {
            delay: 3000,
        },
        breakpoints: {
            320: {
                slidesPerView: 2,
                spaceBetween: 10,
            },
            480: {
                slidesPerView: 3,
                spaceBetween: 20
            },
            720: {
                slidesPerView: 6,
                spaceBetween: 30,
            }
        }
    });
</script>

{{-- swiper blog --}}
<script>
    var swiper = new Swiper('.swiper-blog', {
        slidesPerView: 1.2,
        spaceBetween: 20,
        breakpoints: {
            // when window width is >= 768px
            768: {
                slidesPerView: 2.5,
            },
            992: {
                slidesPerView: 3,
                spaceBetween: 30
            },
            1200: {
                slidesPerView: 3.5,
                spaceBetween: 40
            }
        }
    });
</script>
<script>
    var swiper = new Swiper('.swiper-events', {
        slidesPerView: 1.2,
        spaceBetween: 20,
        breakpoints: {
            768: {
                slidesPerView: 2.5,
                spaceBetween: 20
            },
            992: {
                slidesPerView: 2.5,
                spaceBetween: 40
            }
        }
    });
</script>
@endsection