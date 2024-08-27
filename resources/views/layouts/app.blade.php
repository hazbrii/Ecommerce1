<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Khatoun || @yield('title')</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/logo/logo-light.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/flaticon/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/sal.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/base.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.min.css') }}">
    


    

</head>


    <body>

        @include('components.header')
        @yield('content')
        @include('components.footer');
        <script src="{{ asset('assets/js/vendor/modernizr.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/jquery.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/slick.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/js.cookie.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/jquery.ui.touch-punch.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/jquery.countdown.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/sal.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/counterup.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/waypoints.min.js') }}"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>

    </body>

</html>