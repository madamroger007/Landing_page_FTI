@extends('layouts.main')

@section('container')
    @include('partials.breadcrumbs')

    <main id="main" data-aos="fade" data-aos-delay="1500">

        <section id="gallery" class="gallery">
            <div class="container-fluid">
                <div class="row gy-4 justify-content-center">
                    <!-- Start Gallery Item -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="gallery-item h-100">
                            <img src="../img/why-us-bg.jpg" class="img-fluid" alt="">
                            <div class="gallery-links d-flex align-items-center justify-content-center">
                                <a href="../img/why-us-bg.jpg" title="Gallery 1" class="glightbox preview-link"><i
                                        class="bi bi-arrows-angle-expand"></i></a>
                                <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Gallery Item -->
                    
                </div>
            </div>
        </section>
    </main>
@endsection
