@extends('layout.base')
@section('title', 'Blog')
@section('meta-description', 'Blog')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
    <!-- Swiper -->
    <link rel="stylesheet" href="{{ asset('lib/swiper/swiper-bundle.min.css') }}">
@endsection
@section('body')
    <section id="cover" class="container-fluid" style="background-image: url({{ asset('img/blog/cover.jpg') }})">
        <article class="container">
            <h1 class="text-uppercase text-white text-md-left text-center">
                Blog y Eventos
            </h1>
        </article>
    </section>
    <section id="eventos">
        @if(count($events))
            <h2 class="mb-4">Eventos recientes</h2>
        @endif
        @if(empty($events) || !count($events))
            <h2>No hay eventos recientes</h2>
        @endif
        <div class="swiper-events swiper-container">
            <div class="swiper-wrapper pb-4">
                {{-- Events --}}
                @foreach($events as $event)
                    <div class="swiper-slide">
                        <div class="event-img rounded text-white p-3"
                             style="background-image: url({{ $event->getFirstMediaUrl('event-gallery') }})">
                            <p class="blog-date thin-text">{{ $event->date->format('d-m-Y') }}</p>
                            <h3 class="h4">{{ $event->name }}</h3>
                        </div>
                        <div class="event-cont p-3 small-text">
                            <p class="small-text">
                                {{ $event->intro }}
                            </p>
                            <a class="btn btn-pill btn-primary py-1 small-text" href="{{ route('events.post', $event->slug) }}">Ver más</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section id="blog">
        @if(isset($events) && count($events))
            <h2 class="mb-md-4 mb-5 text-md-left text-center">Blog</h2>
        @endif

        @if(empty($posts) || !count($posts))
                <h2 class="mb-md-4 mb-5 text-md-left text-center">No hay artículos recientes</h2>
        @endif

        @foreach($posts as $key => $post)
            <article
                    class="row flex-column-reverse align-items-center m-0 {{ $key % 2 == 0 ? 'flex-md-row' : 'flex-md-row-reverse' }}">
                <div class="entry-summary col-md-6 my-md-0 my-4">
                    <h3 class="text-md-left text-center mx-md-0 mx-auto mb-3">{{ $post->name }}</h3>
                    <p class="text-md-left text-center">
                        {{$post->intro}}
                    </p>
                    <a class="btn btn-pill btn-complementary py-1 small-text"
                       href="{{ route('blog.article', $post->slug) }}">Leer artículo</a>
                </div>
                <div class="images img-dots-pattern col-md-6 col-11 offset-md-0 offset-1 px-0">
                    <img class="img-fluid" src="{{ asset($post->getFirstMediaUrl('blog-cover')) }}" alt="">
                </div>
            </article>
        @endforeach

        {{--<article class="row flex-md-row flex-column-reverse align-items-center m-0">--}}
        {{--<div class="entry-summary col-md-6 my-md-0 my-4">--}}
        {{--<h3 class="text-md-left text-center mx-md-0 mx-auto mb-3">Titulo de evento</h3>--}}
        {{--<p class="text-md-left text-center">--}}
        {{--En el centro de datos se centralizan las operaciones y el equipo de TI de una--}}
        {{--organización, aquí se recolecta, almacena, procesa, distribuye y provee acceso--}}
        {{--a grandes cantidades de datos. Los centros de datos albergan los sistemas más--}}
        {{--críticos y son vitales para la continuidad de las operaciones diarias. Tu empresa--}}
        {{--seguirá creciendo y el centro de datos debe tener la capacidad de crecer--}}
        {{--continuamente, es decir, debe ser escalable y flexible.--}}
        {{--</p>--}}
        {{--<a class="btn btn-pill btn-complementary py-1 small-text" href="http://">Button</a>--}}
        {{--</div>--}}
        {{--<div class="images img-dots-pattern col-md-6 col-11 offset-md-0 offset-1 px-0">--}}
        {{--<img class="" src="{{ asset('/img/blog/event1.jpg') }}" alt="">--}}
        {{--</div>--}}
        {{--</article>--}}
        {{--<article class="row flex-md-row-reverse flex-column-reverse align-items-center my-5 mx-0">--}}
        {{--<div class="entry-summary col-md-6 my-md-0 my-4">--}}
        {{--<h3 class="text-md-left text-center mx-md-0 mx-auto mb-3">Titulo de evento</h3>--}}
        {{--<p class="text-md-left text-center">--}}
        {{--En el centro de datos se centralizan las operaciones y el equipo de TI de una--}}
        {{--organización, aquí se recolecta, almacena, procesa, distribuye y provee acceso--}}
        {{--a grandes cantidades de datos. Los centros de datos albergan los sistemas más--}}
        {{--críticos y son vitales para la continuidad de las operaciones diarias. Tu empresa--}}
        {{--seguirá creciendo y el centro de datos debe tener la capacidad de crecer--}}
        {{--continuamente, es decir, debe ser escalable y flexible.--}}
        {{--</p>--}}
        {{--<a class="btn btn-pill btn-complementary py-1 small-text" href="http://">Button</a>--}}
        {{--</div>--}}
        {{--<div class="images col-md-6 col-11 px-0">--}}
        {{--<img class="" src="{{ asset('/img/blog/event2.jpg') }}" alt="">--}}
        {{--</div>--}}
        {{--</article>--}}
        {{--<article class="row flex-md-row flex-column-reverse align-items-center m-0">--}}
        {{--<div class="entry-summary col-md-6 my-md-0 my-4">--}}
        {{--<h3 class="text-md-left text-center mx-md-0 mx-auto mb-3">Titulo de evento</h3>--}}
        {{--<p class="text-md-left text-center">--}}
        {{--En el centro de datos se centralizan las operaciones y el equipo de TI de una--}}
        {{--organización, aquí se recolecta, almacena, procesa, distribuye y provee acceso--}}
        {{--a grandes cantidades de datos. Los centros de datos albergan los sistemas más--}}
        {{--críticos y son vitales para la continuidad de las operaciones diarias. Tu empresa--}}
        {{--seguirá creciendo y el centro de datos debe tener la capacidad de crecer--}}
        {{--continuamente, es decir, debe ser escalable y flexible.--}}
        {{--</p>--}}
        {{--<a class="btn btn-pill btn-complementary py-1 small-text" href="http://">Button</a>--}}
        {{--</div>--}}
        {{--<div class="images col-md-6 col-11 offset-md-0 offset-1 px-0">--}}
        {{--<img class="" src="{{ asset('/img/blog/event3.jpg') }}" alt="">--}}
        {{--</div>--}}
        {{--</article>--}}
    </section>

    <script src="{{ asset('lib/swiper/swiper-bundle.min.js') }}"></script>
    <script>
        var swiper = new Swiper('.swiper-events', {
            slidesPerView: 3,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    </script>
@endsection