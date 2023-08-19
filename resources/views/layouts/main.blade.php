<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <!-- Vendor CSS Files -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../vendor/aos/aos.css" rel="stylesheet">
    <link href="../vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="../vendor/remixicon/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../vendor/aos/aos.js"></script>
    <script src="../vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../vendor/php-email-form/validate.js"></script>
    <script src="../js/index.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/galleria/1.6.1/galleria.min.js"></script>
</head>

<body class="page-index">
     <!-- Blok untuk navbar yang ingin diabaikan saat di-extend -->
    @hasSection('partials.navbar')
    @else
    @include('partials.navbar')
    @endif
    @yield('container')
    @include('partials.footer')
    @include('partials.loaded')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 @stack('scripts')
    @if (Session::has('success'))
    {{-- <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div> --}}
    
    <script>
        toastr.options = {
            "progressBar" : true,
            "closeButton" : true,
        }
        toastr.success("{{ session()->get('success') }}",'Seccess!', {timeOut:12000});
    </script>
    
@endif

@if (Session::has('loginError'))
    {{-- <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div> --}}
   
    <script>
        toastr.options = {
            "progressBar" : true,
            "closeButton" : true,
        }
        toastr.error("{{ session()->get('loginError') }}",'loginError!', {timeOut:1200});
    </script>

@endif
   
  
</body>

</html>
