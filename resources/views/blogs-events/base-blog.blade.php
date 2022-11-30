@extends('layout.base')
@section('title', $blog->name)
@section('meta-description', $blog->intro)
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/base-blog.css') }}">
@endsection
@section('body')
    <article id="base-blog" class="container-fluid p-0">
        <div class="cover container-fluid"
             style="background-image: url({{ asset($blog->getFirstMediaUrl('blog-cover')) }})">
            <h1 class="page-title text-uppercase text-white text-center">{{ $blog->name }}</h1>
            <h2 class="intro">{{ $blog->intro }}</h2>
        </div>
        <div class="content-blog">
            <div class="h6 meta d-flex justify-content-between align-items-center">
                <span class="author d-flex flex-column align-items-center">
                    <img src="{{ asset('img/iso.png') }}" alt="">
                    Por: Sertei
                </span>
                <span class="date text-muted ml-auto">{{ $blog->created_at->translatedFormat('j F, Y') }}</span>
            </div>
            <div class="text-md-left text-center">

                {!! $blog->content !!}

                <div class="social-media row justify-content-between align-items-center p-2 mt-4 mx-0">
                    <p class="col-lg-9 col-md-8 col-6 text-left mb-0">Social</p>
                    <div class="col-lg-3 col-md-4 col-6 d-flex justify-content-between">
                        <a href="https://www.facebook.com/Sertei/"><i class="fab fa-facebook-square"></i></a>
                        <a href="http://"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/company/2563374/admin/"><i class="fab fa-linkedin-in"></i></a>
                        <a href="http://"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </article>


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