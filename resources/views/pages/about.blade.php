@extends('layouts.app')

@section('container')
    <!-- Page Content-->
    {{-- <x-loading-indicator/>   --}}
    @include('partials.breadcrumbs')

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            {{-- item 1 --}}
            <div class="row gy-4 mb-14" data-aos="fade-up">
                <div class="col-lg-4">
                    <img src="build/assets/img/pages/about/kegiatan materi.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-8">
                    <div class="content ps-lg-5">
                        <h3>Materi</h3>
                        <p>
                            Di forum ini kami menyediakan sesi materi yang mencakup beberapa kegiatan yaitu:
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle-fill"></i> Presentasi materi dari mentor.</li>
                            <li><i class="bi bi-check-circle-fill"></i> Berdiskusi.</li>
                            <li><i class="bi bi-check-circle-fill"></i> Bertukar informasi antara mentor dan siswa</li>
                        </ul>
                    </div>
                </div>
            </div>

            {{-- item 2 --}}

            <div class="row mb-14 flex-wrap-reverse" data-aos="fade-up">

                <div class="col-lg-8">
                    <div class="content ps-lg-5 ">
                        <h3>Praktek</h3>
                        <p>
                            Melakukan kegiatan pembelajaran secara praktek antara lain:
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle-fill"></i> Mentor melakukan sesi praktik dan di ikuti oleh siswa</li>
                            <li><i class="bi bi-check-circle-fill"></i> Problem solve.</li>
                            <li><i class="bi bi-check-circle-fill"></i> Sharing problem dan informasi</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 mb-3">
                    <img src="build/assets/img/pages/about/kegiatan praktek.jpg" class="img-fluid" alt="">
                </div>
            </div>

             {{-- item 3 --}}
             <div class="row gy-4 mb-14" data-aos="fade-up">
                <div class="col-lg-4">
                    <img src="build/assets/img/pages/about/kegiatan tim.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-8">
                    <div class="content ps-lg-5">
                        <h3>Tim</h3>
                        <p>
                            Di forum ini kami akan mendorong siswa bekerja secara tim antara lain:
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle-fill"></i> Mengerjakan projek secara tim.</li>
                            <li><i class="bi bi-check-circle-fill"></i> Memecahkan permasalahan secara tim.</li>
                            <li><i class="bi bi-check-circle-fill"></i> Sharing problem dan informasi antar tim</li>
                        </ul>
                    </div>
                </div>
            </div>

            {{-- item 4 --}}

            <div class="row mb-14 flex-wrap-reverse" data-aos="fade-up">

                <div class="col-lg-8">
                    <div class="content ps-lg-5 ">
                        <h3>Presentasi dan Dokumentasi</h3>
                        <p>
                           Di forum ini kami akan mendorong setiap siswa untuk presentasi dan membuat dokumentasi antara lain:
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle-fill"></i> Presentasi dan membuat dokumentasi hasil projek</li>
                            <li><i class="bi bi-check-circle-fill"></i> Untuk Presentasi dan dokumentasi diarahkan oleh mentor.</li>
                            <li><i class="bi bi-check-circle-fill"></i> Melatih kepercayaan diri</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 mb-3">
                    <img src="build/assets/img/pages/about/kegiatan presentasi.jpg" class="img-fluid" alt="">
                </div>
            </div>

            {{-- item 5 --}}
            <div class="row gy-4 mb-14" data-aos="fade-up">
                <div class="col-lg-4">
                    <img src="build/assets/img/pages/about/kegiatan bisnis.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-8">
                    <div class="content ps-lg-5">
                        <h3>Berbisnis dan berkarir</h3>
                        <p>
                            Di forum ini kami mendorong siswa untuk berbisnis dan berkarir diantaranya:
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle-fill"></i> Berbisnis melalui projek.</li>
                            <li><i class="bi bi-check-circle-fill"></i> Merintis karir melalui relasi.</li>
                            <li><i class="bi bi-check-circle-fill"></i> Mendapatkan hasil dari projek yang dibuat</li>
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
