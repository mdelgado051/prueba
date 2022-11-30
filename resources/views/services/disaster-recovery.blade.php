@extends('layout.base')
@section('title', 'Recuperación ante Desastres (DRaaS)')
@section('meta-description', 'Recuperación ante Desastres (DRaaS)')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/base-services.css') }}">
@endsection
@section('body')
    <section id="cover" class="container-fluid"
             style="background-image: url({{ asset('img/services/disaster-recovery/cover.jpg') }})">
        <article class="container text-white">
            <h1 class="page-title text-uppercase text-center text-md-left mb-0">Recuperación ante Desastres</h1>
            <p class="text-center text-md-left Ebig-text mx-auto mx-md-0">
                Disaster Recovery as a Service (DRaaS)
            </p>
        </article>
    </section>
    <section id="service" class="container row align-items-center mx-0 my-5">
        <div class="col-md-6 pr-lg-5 px-md-0 px-md-3 pb-5 px-5">
            <h2>Recuperación ante Desastres como servicio</h2>
            <p>
                Este modelo proporciona servicios orientados a garantizarle a tu negocio seguridad a
                eventos excepcionales, dándole una planificación de continuidad, creando copias de
                seguridad en la nube, teniendo data centers alternativos en caso de fallas y la
                replica de datos. Es importante realizar respaldos virtuales, hoy no basta con tener
                todos tus respaldos en un solo sitio o sitios, la mejor práctica es tener al menos
                una copia semanal en servicios de la nube, esto te asegurara la continuidad del negocio
                en cualquier lugar donde quieras recuperar tu operación.
            </p>
            <ul>
                <li>Aseguras tu información de alguna contingencia.</li>
                <li>Te da la posibilidad de almacenar tus copias de seguridad en más de un almacenamiento (NAS, TAPE,
                    CLOUD)
                </li>
                <li>Mantienes tus copias de seguridad actualizadas (completo, incrementales, diferenciales).</li>
                <li>Inviertes en un buen sistema de almacenamiento, evaluando el tipo de información protegida.</li>
                <li>Prioriza tu información.</li>
            </ul>
        </div>
        <div class="cont-img col-md-6 col-11 offset-1 offset-md-0 p-0 my-5 my-0">
            <img class="w-100" src="{{ asset('img/services/disaster-recovery/service.jpg') }}" alt="">
            <a class="btn btn-primary mt-4" href="{{ route('contact') }}">Cotizar</a>
        </div>
    </section>
    <section id="services" class="container-fluid w-100">
        <article class="container px-4">
            <h2 class="text-purple text-center text-md-left mb-md-5 mb-4">
                Otros servicios
            </h2>
            <div class="row justify-content-between m-md-4 m-3">
                <a href="{{ route('infrastructure') }}" class="xaas p-4 my-3">
                    <img class="pr-2" src="{{ asset('img/icons/icon-infrastructure.png') }}" alt="icon infrastructure">
                    <p class="ml-2 p-bold a-text">Infraestructura (IaaS)</p>
                    <p class="link-arrow"><i class="fas fa-chevron-right"></i></p>
                </a>
                <a href="{{ route('hardware') }}" class="xaas p-4 my-3 mx-lg-4 mx-md-4">
                    <img class="pr-2" src="{{ asset('img/icons/icon-hardware.png') }}" alt="icon hardware">
                    <p class="ml-2 p-bold a-text">Hardware (HaaS)</p>
                    <p class="link-arrow"><i class="fas fa-chevron-right"></i></p>
                </a>
                <a href="{{ route('storage') }}" class="xaas p-4 my-3">
                    <img class="pr-2" src="{{ asset('img/icons/icon-storage.png') }}" alt=" icon Storage">
                    <p class="ml-2 p-bold a-text">Almacenamiento (STaaS)</p>
                    <p class="link-arrow"><i class="fas fa-chevron-right"></i></p>
                </a>
            </div>
        </article>
    </section>
@endsection