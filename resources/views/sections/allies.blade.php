@extends('layout.base')
@section('title', 'Aliados estratégicos')
@section('meta-description', 'Aliados estratégicos')
@section('styles')
<link rel="stylesheet" href="{{ asset('css/allies.css') }}">
@endsection
@section('body')
<section id="cover" class="container-fluid position-relative">
    <article class="container text-white">
        <h1 class="page-title text-uppercase text-center text-md-left mb-0">Aliados Estratégicos</h1>
        <!-- <p class="text-center text-md-left mx-auto mx-md-0">
            ¡Renovar tu tecnología nunca había sido tan fácil!
        </p> -->
        <div class="cont-form position-absolute bg-white p-4">
            <h6 class="mb-3">Completa el siguiente formulario y un asesor se contactará contigo:</h6>
            @include('layout._contact-form-company')
        </div>
    </article>
</section>
<section id="service" class="container-fluid">
    <article class="container row align-items-center mx-0 my-5">
        <div class="service-inf col-md-6 pr-lg-5 px-md-0 px-md-3 pb-5 px-4">

            <p>
                En Sertei estamos comprometidos en generar valor 360° grados, por ello añadimos una forma de hacer que tu negocio de consultoría,
                servicios y venta de Tecnologías de la Información crezca.
            </p>
            <p>
                Te brindamos una oferta de valor donde puedas maximizar tus ganancias, competitividad y rentabilidad, así como mejorar tus niveles
                de servicio al cliente, alcance, capacidad técnica y comercial.
            </p>

            <h3 class="my-3">Nuestra oferta de valor</h3>
            <ul>
                <li> Utilidades y comisiones por cada transacción. </li>
                <li> Alianza con los mejores jugadores de la industria: Marcas y Mayoristas. </li>
                <li> Recursos para la generación de demanda y promoción de productos o servicios. </li>
                <li> Estándares de satisfacción y servicio al cliente. </li>
                <li> Servicios de Arrendamiento y Financiamiento. </li>
                <li> Capacitación y desarrollo (Técnico, comercial, de negocios, mercadológico) </li>
                <li> Recursos técnicos y preventa para la generación </li>
            </ul>
        </div>
        <div class="cont-image col-lg-6 col-md-6 px-md-2 my-md-5 p-0 px-4 my-0">
            <img class="img-fluid rounded" src="{{ asset('img/allies/offer.jpg') }}" alt="">
        </div>
    </article>
</section>
@endsection
@section('scripts')
<script src="{{ asset('js/contact.js') }}"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

<script>
    $(document).ready(function() {
        $('.__contact').on('click', function(ev) {
            ev.preventDefault();
            $('html, body').animate({
                scrollTop: 0
            }, 500, function() {});
        });
    });
</script>
@endsection