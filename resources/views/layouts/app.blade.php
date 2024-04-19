<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Cymer Devnampo</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="{{ asset('cymer/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('cymer/assets/img/apple-touch-icon.png ') }}" rel="apple-touch-icon">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link href="{{ asset('cymer/assets/vendor/aos/aos.css ') }}" rel="stylesheet">
    <link href="{{ asset('cymer/assets/vendor/bootstrap/css/bootstrap.min.css ') }}" rel="stylesheet">
    <link href="{{ asset('cymer/assets/vendor/bootstrap-icons/bootstrap-icons.css ') }}" rel="stylesheet">
    <link href="{{ asset('cymer/assets/vendor/boxicons/css/boxicons.min.css ') }}" rel="stylesheet">
    <link href="{{ asset('cymer/assets/vendor/glightbox/css/glightbox.min.css ') }}" rel="stylesheet">
    <link href="{{ asset('cymer/assets/vendor/swiper/swiper-bundle.min.css ') }}" rel="stylesheet">
    <link href="{{ asset('cymer/assets/css/style.css ') }}" rel="stylesheet">
    @stack('css')


</head>

<body>
    @include('layouts.sidebar')
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <div class="hero-container" data-aos="fade-in">
            <h1>Cymer Jacob Denampo</h1>
            <p>I'm <span class="typed"
                    data-typed-items="Software Engineer, Web Developer, WordPress Developer, Technical Support, Graphic Designer and a Video Editor"></span>
            </p>
        </div>
    </section>

    <main id="main">
        @yield('content')
    </main>
    @include('layouts.footer')
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    @stack('js')

</body>

</html>

<script src="{{ asset('cymer/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('cymer/assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('cymer/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('cymer/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('cymer/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('cymer/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('cymer/assets/vendor/typed.js/typed.umd.js') }}"></script>
<script src="{{ asset('cymer/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
<script src="{{ asset('cymer/assets/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('cymer/assets/js/main.js') }}"></script>
