@extends('layout.base')
@section('title', 'Hardware(HaaS)')
@section('meta-description', 'Hardware(HaaS)')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/base-services.css') }}">
@endsection
@section('body')
<section id="cover" class="container-fluid" style="background-image: url({{ asset('img/services/hardware/cover.jpg') }})">
    <article class="container text-white">
        <h1 class="page-title text-uppercase text-center text-md-left mb-0">Hardware</h1>
        <p class="text-center text-md-left Ebig-text mx-auto mx-md-0">
            Hardware as a Service (HaaS)
        </p>
    </article>
</section>
<section id="service" class="container row align-items-center mx-0 my-5">
    <div class="col-md-6 pr-lg-5 px-md-0 px-md-3 pb-5 px-5">
        <h2>Hardware como Servicio</h2>
        <p>
            Consiste en la posibilidad de adquirir hardware de manera más simple, tradicionalmente 
            significa que una empresa usa hardware de un proveedor externo. En Sertei nos interesa 
            que estés a la vanguardia, es por eso que hacemos que la renovación de tu equipo de 
            cómputo se vuelva más fácil y flexible. Este modelo permite proporcionar grandes ventajas 
            a las empresas que trabajan con el Internet de las cosas (IoT). 
        </p>
        <ul>
            <li>Puedes arrendar software siempre y cuando tu proyecto se componga por al menos un 70% de Hardware.</li>
            <li>No importa la marca que elijas, ya que SERTEI Financing será la encargada de brindarte una línea de crédito.</li>
            <li>Los equipos tienen una obsolescencia del hardware cada vez menor.</li>
            <li>El arrendamiento te ayuda a reducir el costo de propiedad intelectual.</li>
            <li>Es 100% deducible de impuestos.</li>
            <li>Puedes tener tecnología de última generación sin grandes desembolsos</li>
            <li>Puedes pagar de manera cómoda de acuerdo con tus necesidades</li>
        </ul>
    </div>
    <div class="cont-img col-md-6 col-11 offset-1 offset-md-0 p-0 my-5 my-0">
        <img class="w-100" src="{{ asset('img/services/hardware/service.jpg') }}" alt="">
        <a class="btn btn-primary mt-4" href="{{ route('contact') }}">Cotizar</a>
    </div>
</section>
<section id="services" class="container-fluid w-100">
    <article class="container px-4">
        <h2 class="text-purple text-center text-md-left mb-md-5 mb-4">
            Otros servicios
        </h2>
        <div class="row justify-content-between m-md-4 m-3">
            <a href="{{ route('storage') }}" class="xaas p-4 my-3">
                <img class="pr-2" src="{{ asset('img/icons/icon-storage.png') }}" alt=" icon Storage">
                <p class="ml-2 p-bold a-text">Almacenamiento (STaaS)</p>
                <p class="link-arrow"><i class="fas fa-chevron-right"></i></p>
            </a>
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
        </div>
    </article>
</section>  
@endsection