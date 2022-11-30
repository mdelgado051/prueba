@extends('layout.base')
@section('title', $event->name)
@section('meta-description', $event->intro)
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/base-event.css') }}">
    <!-- Swiper -->
    <link rel="stylesheet" href="{{ asset('lib/swiper/swiper-bundle.min.css') }}">
@endsection
@section('body')
    <section id="base-event" class="container">
        <div class="row">
            <article class="cont-img col-md-6">
                <!-- Swiper -->
                <div class="swiper-container pb-md-5">
                    <div class="swiper-wrapper">
                        @foreach($event->media as $media)
                            <div class="swiper-slide">
                                <img class="img-fluid" src="{{ asset($media->getFullUrl()) }}" alt="">
                            </div>
                        @endforeach
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </article>
            <article class="cont-inf col-md-6 mt-md-0 my-5">
                <div class="text-md-left text-center">
                    <h1 class="page-title m-md-0 mx-auto">{{ $event->name }}</h1>
                    <p class="text-grey">
                        {{ $event->date->format('d-m-Y') }}
                    </p>
                </div>
                <hr class="my-md-5 ml-md-0 my-4 mx-auto">
                <div class="text-md-left text-center">
                    {!! $event->content !!}
                </div>
            </article>
        </div>
    </section>


    <script src="{{ asset('lib/swiper/swiper-bundle.min.js') }}"></script>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
@endsection