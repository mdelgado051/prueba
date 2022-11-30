@extends('layout.base')
@section('title', 'Nosotros')
@section('meta-description', 'Nosotros')
@section('styles')
<link rel="stylesheet" href="{{ asset('css/us.css') }}">
<!-- Swiper -->
<link rel="stylesheet" href="{{ asset('lib/swiper/swiper-bundle.min.css') }}">
@endsection
@section('body')
<section class="cover container-fluid" style="background-image: url({{ asset('img/us/cover.jpg') }})">
    <article class="container text-white text-center">
        <h1 class="text-uppercase mb-3">
            Quiénes somos
        </h1>
        <p>
            Trabajamos en conjunto contigo para el crecimiento y desarrollo de tu empresa por medio de herramientas tecnológicas,
            enfocándonos en conocer tu situación actual, nos comprometemos en minimizar riesgos, asegurando un resultado óptimo.
        </p>
        <p>
            Todo esto gracias al máximo desempeño de nuestro equipo 360° y a la practicidad y variación de nuestros servicios
            personalizados para el giro de tu empresa.
        </p>
    </article>
</section>
{{-- Show this section when the video is ready --}}
{{--<section class="container us-video px-md-0 px-4">--}}
{{-- vide0 --}}
{{--<img class="w-100" src="{{ asset('./img/us/video.jpg') }}" alt="">--}}
{{--</section>--}}
<section class="my-5"></section>
<section class="container px-md-0 px-4">
    <article class="row align-items-center">
        <div class="col-12 col-md-8 offset-md-2 my-5">
            <h2 class="text-center mb-3">Nuestro Servicio es 5.0
                <br>
                <small>¡Nuestros clientes son y serán siempre lo más importante!</small>
            </h2>
            <p class="text-center">
                Trabajamos día a día para que nuestros clientes nos recomienden debido a su alto grado de satisfacción, por esto,
                nos hemos propuesto crear procesos estandarizados de seguimiento y acompañamiento que les brinde la mejor experiencia de compra,
                solo con el objetivo de entregarles el servicio que se merecen.
            </p>
        </div>
    </article>
    <article id="mision" class="row align-items-center" data-aos="fade-down" data-aos-duration="1500">
        <div class="col-lg-5 col-md-7 offset-lg-1">
            <h2>Misión</h2>
            <p>
                Colaborar con nuestros clientes para ayudarlos a cumplir sus objetivos, generando valor 360 grados: proveedores, colaboradores y con la comunidad.
            </p>
        </div>
        <img class="col-md-5 px-lg-4 pr-0" src="{{ asset('./img/us/mision.png') }}" alt="">
    </article>
    <article id="vision" class="row flex-column-reverse flex-md-row mt-5"  data-aos="fade-down" data-aos-duration="1500">
        <img class="col-md-5 offset-lg-1 px-lg-5 px-md-4 pr-0" src="{{ asset('./img/us/vision.png') }}" alt="">
        <div class="col-lg-5 col-md-7 mt-xl-5 mt-lg-4">
            <h2>Propuesta de Valor</h2>
            <p>
                Colaboramos con nuestros clientes para alcanzar sus objetivos a través de las Tecnologías de la Información, les proveemos soluciones que brinden
                un beneficio real a sus necesidades y problemas, ayudando con esto al crecimiento e innovación de su negocio.
            </p>
        </div>
    </article>
</section>
<section id="values" class="values container-fluid p-0 m-0">
    <article class="container row px-2">
        <h2 class="w-100 text-center mb-5">Valores y Principios</h2>
        <div class="col-lg-3 col-md-4 col-6 my-4">
            <img class="d-block mx-auto" src="{{ asset('./img/us/icon-comunication.png') }}" alt="icono comunicación">
            <h3 class="my-3 text-center">Respeto</h3>
        </div>
        <div class="col-lg-3 col-md-4 col-6 my-4">
            <img class="d-block mx-auto" src="{{ asset('./img/us/icon-nobility.png') }}" alt="icono lealtad">
            <h3 class="my-3 text-center">Transparencia</h3>
        </div>
        <div class="col-lg-3 col-md-4 col-6 my-4">
            <img class="d-block mx-auto" src="{{ asset('./img/us/icon-empowerment.png') }}" alt="icono integridad">
            <h3 class="my-3 text-center">Compromiso</h3>
        </div>
        <div class="col-lg-3 col-md-4 col-6 my-4">
            <img class="d-block mx-auto" src="{{ asset('./img/us/icon-loyalty.png') }}" alt="icono empoderamiento">
            <h3 class="my-3 text-center">Lealtad</h3>
        </div>
        <div class="col-lg-3 col-md-4 col-6 my-4 offset-lg-3 offset-md-2">
            <img class="d-block mx-auto" src="{{ asset('./img/us/icon-Integrity.png') }}" alt="icono nobleza">
            <h3 class="my-3 text-center">Integridad</h3>
        </div>
        <div class="col-lg-3 col-md-4 col-6 my-4">
            <img class="d-block mx-auto" src="{{ asset('./img/us/icon-equipment.png') }}" alt="icono tenacidad">
            <h3 class="my-3 text-center">Empatía</h3>
        </div>
    </article>
    <div class="w-100">
        <img class="d-none d-sm-block w-100" src="{{ asset('./img/us/values.jpg') }}" alt="">
        <img class="d-sm-none d w-100" src="{{ asset('./img/us/values-movil.jpg') }}" alt="">
    </div>
</section>
@endsection