<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Vendor CSS Files -->
    <link href="{{ URL::to('build/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::to('build/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ URL::to('build/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ URL::to('build/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ URL::to('build/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ URL::to('build/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::to('build/assets/css/style_app.css') }}">

    <!-- Custom Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Vendor JS Files -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ URL::to('build/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL::to('build/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ URL::to('build/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ URL::to('build/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ URL::to('build/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ URL::to('build/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ URL::to('build/assets/js/index.js') }}"></script>
    {{-- message toastr --}}
    <link rel="stylesheet" href="{{ URL::to('build/assets/css/toastr.min.css') }}">
    <script src="{{ URL::to('build/assets/js/toastr_jquery.min.js') }}"></script>
    <script src="{{ URL::to('build/assets/js/toastr.min.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/galleria/1.6.1/galleria.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="page-index">
    <!-- Blok untuk navbar yang ingin diabaikan saat di-extend -->

    <div id="loadedPageMain">
        @include('components.loaded.page')
    </div>

    <div id="content" style="display: none">
        @hasSection('partials.navbar')
        @else
            @include('partials.navbar')
        @endif

        @yield('container')
        @include('partials.footer')
    </div>



    @stack('scripts')

</body>

</html>
