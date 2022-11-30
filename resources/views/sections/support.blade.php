@extends('layout.base')

@section('title', 'Soporte')
@section('meta-description', 'Soporte')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/support.css') }}">
@endsection

@section('body')
<section class="cover row flex-column-reverse flex-md-row align-items-center m-0 p-0">
    <div class="cover-description col-md-6 text-center text-md-left">
        <h1 class="page-title mb-md-0 mb-3">Hola ¿cómo podemos ayudarte?</h1>
        <p class="mt-3">Nuestro equipo estará encantado de escucharte y darte las mejores soluciones para tu negocio</p>


        <div class="row mx-md-0 mx-3">
            <div class="col-lg-2 col-md-3 col-4 px-lg-2 my-3"><img class="img-fluid" src="{{ asset('img/home/certification/certification-1.png') }}"></div>
            <div class="col-lg-2 col-md-3 col-4 px-lg-2 my-3"><img class="img-fluid" src="{{ asset('img/home/certification/certification-2.png') }}"></div>
            <div class="col-lg-2 col-md-3 col-4 px-lg-2 my-3"><img class="img-fluid" src="{{ asset('img/home/certification/certification-3.png') }}"></div>
            <div class="col-lg-2 col-md-3 col-4 px-lg-2 my-3"><img class="img-fluid" src="{{ asset('img/home/certification/certification-4.png') }}"></div>
            <div class="col-lg-2 col-md-3 col-4 px-lg-2 my-3"><img class="img-fluid" src="{{ asset('img/home/certification/certification-5.png') }}"></div>
            <div class="col-lg-2 col-md-3 col-4 px-lg-2 my-3"><img class="img-fluid" src="{{ asset('img/home/certification/certification-6.png') }}"></div>
            <div class="col-lg-2 col-md-3 col-4 px-lg-2 my-3"><img class="img-fluid" src="{{ asset('img/home/certification/certification-7.png') }}"></div>
            <div class="col-lg-2 col-md-3 col-4 px-lg-2 my-3"><img class="img-fluid" src="{{ asset('img/home/certification/certification-8.png') }}"></div>
            <div class="col-lg-2 col-md-3 col-4 px-lg-2 my-3"><img class="img-fluid" src="{{ asset('img/home/certification/certification-9.png') }}"></div>
            <div class="col-lg-2 col-md-3 col-4 px-lg-2 my-3"><img class="img-fluid" src="{{ asset('img/home/certification/certification-10.png') }}"></div>
            <div class="col-lg-4 col-md-3 col-4 px-lg-2 my-3 d-flex align-items-center"><img class="img-fluid" src="{{ asset('img/home/certification/certification-11.png') }}"></div>
        </div>
    </div>
    <div class="cover-img col-md-6 p-0">
        <img src="{{ asset('/img/contact/support-cover.jpg') }}" alt="">
    </div>
</section>
<section class="support position-relative container-fluid">
    <img class="position-absolute" src="{{ asset('./img/icons/decoration.png') }}" alt="">
    <article class="container position-relative row px-md-0 px-3">
        <div class="col-12">
            <p class="h4 text-center">
                A través de esta plataforma buscamos proporcionarte servicio de soporte y asistencia para gestionar
                y resolver incidencias de TI de una forma eficaz, sencilla y segura.
            </p>
        </div>
        <div class="div-form col-xl-4 col-md-5 col-12 offset-md-4 bg-white p-4 my-5 my-0">
            <form action="{{ route('contact.lead') }}" class="d-flex flex-wrap justify-content-between contactLeadForm"  method="POST">
                <input name="form-type" type="hidden" value="support">
                <input id="first-name" name="first-name" type="text" class="p-2" placeholder="Nombre:" required>
                <input id="last-name" name="last-name" type="text" class="p-2 mt-3" placeholder="Apellido:" required>
                <input id="email" name="email" type="text" class="p-2 mt-3" placeholder="Email:" required>
                <input id="company" name="company" type="text" class="p-2 mt-3" placeholder="Empresa:" required>
                <input id="subject" name="subject" type="text" class="p-2 mt-3" placeholder="Asunto:" required>
                <textarea class="py-2 mt-3" name="comment" id="comment" rows="4" placeholder="Mensaje:" required></textarea>

                <button class="btn btn-pill btn-primary py-1 mt-4" type="submit">Enviar</button>
            </form>
        </div>
        <img class="position-absolute" src="{{ asset('./img/contact/decoration.png') }}" alt="">
    </article>
</section>
@endsection

@section('scripts')
  <script src="{{ asset('js/contact.js') }}"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
@endsection