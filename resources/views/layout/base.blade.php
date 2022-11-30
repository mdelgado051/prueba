<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sertei - @yield('title')</title>

    <meta name="description" content="@yield('meta-description')">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="{{ asset('fontawesome/css/all.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Muli:wght@400;700&display=swap">

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('icon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('icon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('icon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('icon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('icon/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-159088543-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-159088543-1');
    </script>
    @yield('styles')
</head>
<body>
<header>
    @include('layout._nav')
</header>

<main>
    @yield('body')
</main>

@include('layout._footer')

<script
        src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


@yield('scripts')
<script>
    AOS.init({
        once: true,
        easing: 'ease-in-out',
        offset: 10,
        anchorPlacement: 'center-bottom',
    });

    $(document).ready(function () {
        initNav();

        $(window).resize(function() {
            initNav();
        });
    });

    function initNav() {
        if($(document).width() >= 768) {
            $('ul.navbar-nav li.dropdown').click(function() {
                let location = $(this).find('a').prop('href');
                let lastChar = location[location.length - 1];

                if (lastChar === '#') {
                    return;
                }

                window.location = location;
            });

            $('ul.navbar-nav li.dropdown').hover(function () {
                $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(300);
            }, function () {
                $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(300);
            });
        }
    }
</script>
</body>
</html>