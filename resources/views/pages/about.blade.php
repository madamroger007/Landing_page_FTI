@extends('layouts.main')

@section('container')
    <!-- Page Content-->
    {{-- <x-loading-indicator/>   --}}
    @include('partials.breadcrumbs')

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4" data-aos="fade-up">
                <div class="col-lg-4">
                    <img src="../img/profile/aboutsesi.jpeg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-8">
                    <div class="content ps-lg-5">
                        <h3>Keaktifan Mahasiswa</h3>
                        <p>
                            Setiap melaksanakan acara di lingkungan universitas, kami selalu berlatih untuK:
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle-fill"></i> Bekerja sama antar team.</li>
                            <li><i class="bi bi-check-circle-fill"></i> Belajar berpikir kritis.</li>
                            <li><i class="bi bi-check-circle-fill"></i> Mengasah algoritma untuk menyelesaikan masalah</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->


    @include('partials.swiper')
    @include('partials.service')
    @include('partials.hero')
@endsection
