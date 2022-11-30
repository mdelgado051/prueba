@extends('layout.base')
@section('title', 'Almacenamiento(STaaS)')
@section('meta-description', 'Almacenamiento(STaaS)')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/base-services.css') }}">
@endsection
@section('body')
    <section id="cover" class="container-fluid"
             style="background-image: url({{ asset('img/services/storage/cover.jpg') }})">
        <article class="container text-white">
            <h1 class="page-title text-uppercase text-center text-md-left mb-0">Almacenamiento</h1>
            <p class="text-center text-md-left Ebig-text mx-auto mx-md-0">
                Storage as a Service (STaaS)
            </p>
        </article>
    </section>
    <section id="service" class="container row align-items-center mx-0 my-5">
        <div class="col-md-6 pr-lg-5 px-md-0 px-md-3 pb-5 px-5">
            <h2>Almacenamiento como servicio</h2>
            <p>
                Este modelo consiste en alquilar infraestructura de almacenamiento para tu empresa,
                proporcionando una experiencia de nube pública. El Almacenamiento como Servicio
                (STaas) ofrece una infraestructura de almacenamiento segura, gestionable y flexible,
                con gran tolerancia a fallos ya que implementa redundancia y distribuye datos, motiva
                el ahorro de costos en personal técnico y hardware y sobre todo agiliza el almacenamiento físico.
            </p>
            <ul>
                <li>Optimiza tu plataforma de almacenamiento</li>
                <li>Simplifica tu administración de la plataforma TI</li>
                <li>Garantiza la continuidad de tu negocio</li>
                <li>Almacenas tus copias de seguridad en más de un almacenamiento (NAS, TAPE, CLOUD)</li>
                <li>Invierte en un buen sistema de almacenamiento</li>
                <li>Respaldos virtuales</li>
            </ul>
        </div>
        <div class="cont-img col-md-6 col-11 offset-1 offset-md-0 p-0 my-5 my-0">
            <img class="w-100" src="{{ asset('img/services/storage/service.jpg') }}" alt="">
            <a class="btn btn-primary mt-4" href="{{ route('contact') }}">Cotizar</a>
        </div>
    </section>
    <section id="services" class="container-fluid w-100">
        <article class="container px-4">
            <h2 class="text-purple text-center text-md-left mb-md-5 mb-4">
                Otros servicios
            </h2>
            <div class="row justify-content-between m-md-4 m-3">
                <a href="{{ route('disaster-recovery') }}" class="xaas p-4 my-3">
                    <img class="pr-2" src="{{ asset('img/icons/icon-recovery.png') }}" alt="icon recovery">
                    <p class="ml-2 p-bold a-text">DRaaS</p>
                    <p class="link-arrow"><i class="fas fa-chevron-right"></i></p>
                </a>
                <a href="{{ route('security') }}" class="xaas p-4 my-3 mx-lg-4 mx-md-4">
                    <img class="pr-2" src="{{ asset('img/icons/icon-security.png') }}" alt="icon security">
                    <p class="ml-2 p-bold a-text">Seguridad (SECaas)</p>
                    <p class="link-arrow"><i class="fas fa-chevron-right"></i></p>
                </a>
                <a href="{{ route('hardware') }}" class="xaas p-4 my-3 mx-lg-4 mx-md-4">
                    <img class="pr-2" src="{{ asset('img/icons/icon-hardware.png') }}" alt="icon hardware">
                    <p class="ml-2 p-bold a-text">Hardware (HaaS)</p>
                    <p class="link-arrow"><i class="fas fa-chevron-right"></i></p>
                </a>
            </div>
        </article>
    </section>
@endsection