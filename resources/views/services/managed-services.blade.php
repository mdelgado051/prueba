@extends('layout.base')
@section('title', 'Servicios Administrados')
@section('meta-description', 'Servicios Administrados')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/base-services.css') }}">
@endsection
@section('body')
    <section id="cover" class="container-fluid"
             style="background-image: url({{ asset('img/services/managed-services.jpg') }}); background-position: bottom;" >
        <article class="container text-white">
            <h1 class="page-title text-uppercase text-center text-md-left mb-0">Servicios Administrados</h1>
        </article>
    </section>
    <section id="service" class="container row mx-0 my-5">
        <div class="col-md-6 pr-lg-5 px-md-0 px-md-3 pb-5 px-5">
            <p>
                Atravesamos por una era en la que la digitalización y los avances tecnológicos han llevado a las
                empresas a replantear la forma en que realizan sus procesos, de cara a elevar la eficiencia y
                productividad para ganar terreno en un mercado cada vez más competitivo y especializado.
            </p>
            <p>
                Somos una compañía capaz de gestionar el área de TI de otras empresas, asumiendo las implicaciones y
                riesgos que ello conlleva.
            </p>
            <p>
                Al trabajar proactivamente con nuestros clientes, entendemos sus necesidades estratégicas y podemos
                ahorrarle dinero a su negocio a largo plazo. Garantizamos el retorno de la inversión ahorrándole
                tiempo
                y dinero a nuestros clientes, ya que el mantenimiento continuo minimiza el riesgo e impacta
                significativamente sus resultados finales.
            </p>
            <p>
                Al confiar en Sertei como su proveedor de Servicios Administrados, puede enfocar recursos y
                esfuerzos de
                su compañía en potencializar áreas o procesos hacia el crecimiento del negocio.
            </p>
            <p>
                La estrecha cercanía que mantenemos con las marcas y fabricantes nos ayudan a ofrecer un servicio
                eficiente y profesional.
            </p>
            <h6>Beneificios que ofrecemos</h6>
            <ul>
                <li>Ahorro en los costos de operaciones</li>
                <li>Mayor seguridad</li>
                <li>Profesionales altamente capacitados a bajo costo</li>
                <li>Monitoreo constante</li>
            </ul>
        </div>
        <div class="cont-img col-md-6 col-12 offset-md-0 p-0">
            <div>
                <img class="w-100" src="{{ asset('img/home/managed-services.jpg') }}" alt="">
                <a class="btn btn-primary mt-4 btn-block" href="{{ route('contact') }}">
                    Contacta a nuestro equipo y conoce las pólizas que tenemos para ti
                </a>
            </div>
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