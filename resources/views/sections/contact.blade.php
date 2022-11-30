@extends('layout.base')

@section('title', 'Contacto')
@section('meta-description', 'contacto')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
<link rel="stylesheet" href="{{ asset('css/support.css') }}">
@endsection

@section('body')
    <!-- <section class="cover row flex-column-reverse flex-md-row align-items-center m-0 p-0">
        <div class="cover-description col-md-6 text-center text-md-left">
            <h1 class="page-title text-uppercase mb-md-0 mb-3">Contacto</h1>
            <p>Nuestro equipo estará encantado de escucharte y darte las mejores soluciones para tu negocio</p>
        </div>
        <div class="cover-img col-md-6 p-0">
            <img class="w-100" src="{{ asset('/img/contact/contact-cover.jpg') }}" alt="">
        </div>
    </section> -->
    <section id="contact" class="container-fluid row bg-white px-md-0 pr-md-4 px-4 mx-0">
        <div class="content-maps position-relative d-md-flex justify-content-end d-none col-md-5 px-0">
          <iframe class="position-relative" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.117174271727!2d-106.12335808491748!3d28.626250082420242!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86ea4347b4612803%3A0x99e34d3405dc19c!2sSoluciones%20Informaticas%20SERTEI!5e0!3m2!1ses-419!2smx!4v1587659674672!5m2!1ses-419!2smx" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          <img class="contact-img position-absolute d-none d-lg-block" src="{{ asset('/img/home/contact.jpg') }}" alt="">
        </div>
        <div class="contact-left col-lg-5 col-md-6 offset-md-1 px-xl-5">
            <h2 class="h1 text-primary">¿Quieres contactarnos?</h2>
            <div class="accordion" id="content-andress">
                <div>
                  <div id="a-chihuahua">
                    <a href="#chihuahua" aria-expanded="true" role="button" data-toggle="collapse">Chihuahua, Chih</a>
                  </div>
                  <div id="chihuahua" class="collapse show" aria-labelledby="a-chihuahua" data-parent="#content-andress">
                    <p class="text-adress small-text pl-4"><i class="fas fa-map-marker-alt"></i> Centro Ejecutivo Punto Alto #5500, Complejo Industrial El Saucito C.P 31125, Chihuahua, Chih.</p>
                    <p class="text-phone small-text pl-4"><i class="fas fa-phone"></i><a href="tel:6144321212" class="a-text">614 432 1212</a></p>
                  </div>
                </div>
                <div>
                  <div id="a-juarez">
                    <a href="#juarez" aria-expanded="true" role="button" data-toggle="collapse">Ciudad Jrz.</a>
                  </div>
                  <div id="juarez" class="collapse" aria-labelledby="a-juarez" data-parent="#content-andress">
                    <p class="text-phone small-text pl-4"><i class="fas fa-phone"></i><a href="tel:656-617-18-00" class="a-text">656 617 18 00</a></p>
                  </div>
                </div>
                <div>
                  <div id="a-torreon">
                    <a href="#torreon" aria-expanded="true" role="button" data-toggle="collapse">Torreón</a>
                  </div>
                  <div id="torreon" class="collapse" aria-labelledby="a-torreon" data-parent="#content-andress">
                    <p class="text-adress small-text pl-4"><i class="fas fa-map-marker-alt"></i> Igniter Business, Av. Presidente Carranza #68 Ote., Col. Centro, C.P. 27000</p>
                    <p class="text-phone small-text pl-4"><i class="fas fa-phone"></i><a href="tel:871-315-3699" class="a-text">(871) 315 36 99</a></p>
                  </div>
                </div>
            </div>
            <div class="form position-absolute mt-4 bg-white">
                @include('layout._contact-form')
            </div>
        </div>
    </section>
    <section class="container-fluid p-0">
      <img class="d-none d-sm-block w-100" src="{{ asset('/img/contact/contact-w100.jpg') }}" alt="">
      <img class="d-sm-none w-100" src="{{ asset('/img/contact/contact-w100-movil.jpg') }}" alt="">
    </section>
@endsection

@section('scripts')
  <script src="{{ asset('js/contact.js') }}"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
@endsection