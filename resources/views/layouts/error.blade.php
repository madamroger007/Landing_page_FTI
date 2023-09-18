<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Error</title>
    <link rel="shortcut icon" href="{{ URL::to('assets/img/favicon.png') }}">
    <link rel="stylesheet" href="{{ URL::to('build/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('build/assets/vendor/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ URL::to('build/assets/vendor/icons/flags/flags.css') }}">
    <link rel="stylesheet" href="{{ URL::to('build/assets/vendor/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('build/assets/vendor/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('build/assets/vendor/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('build/assets/css/style.css') }}">
</head>

<body class="error-page">

    {{-- content error --}}
    @yield('content')

    <script src="{{ URL::to('build/assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ URL::to('build/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL::to('build/assets/js/feather.min.js') }}"></script>
    <script src="{{ URL::to('build/assets/vendor/select2/js/select2.min.js') }}"></script>
    <script src="{{ URL::to('build/assets/js/script.js') }}"></script>
</body>

</html>
