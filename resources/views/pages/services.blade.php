@extends('layouts.app')

@section('container')
    @include('partials.breadcrumbs')

    <!-- ======= Our Services Section ======= -->
    <section id="services-list" class="services-list">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Bidang Teknis</h2>

            </div>

            <div class="row gy-5">

                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon flex-shrink-0"><i class="ri-gradienter-line" style="color: #ffa76e;"></i></div>
                    <div>
                        <h4 class="title"><a href="https://roadmap.sh/full-stack" target="_blank" class="stretched-link">Web Development</a></h4>
                        <p class="description">Pengembangan web (web development) adalah proses pembuatan dan pemeliharaan
                            situs web atau aplikasi web di World Wide Web. Ini melibatkan berbagai aspek, termasuk desain
                            tampilan, pengembangan front-end dan back-end, database, serta optimisasi kinerja dan keamanan.
                        </p>
                    </div>
                </div>
                <!-- End Service Item -->

                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon flex-shrink-0"><i class="ri-paint-brush-line" style="color: #e361ff;"></i></div>
                    <div>
                        <h4 class="title"><a href="https://dribbble.com/resources/self-taught-graphic-design" class="stretched-link" target="_blank" >Graphic Design</a></h4>
                        <p class="description">Desain grafis (graphic design) adalah seni dan praktik menciptakan visual
                            yang komunikatif dan estetis menggunakan elemen-elemen seperti teks, gambar, warna, bentuk, dan
                            grafik. </p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon flex-shrink-0"><i class="bi bi-columns" style="color: #5578ff;"></i></div>
                    <div>
                        <h4 class="title"><a href="https://roadmap.uxuiopen.com/" class="stretched-link" target="_blank">UI/UX Design</a></h4>
                        <p class="description">UI (User Interface) Design dan UX (User Experience) Design adalah dua aspek
                            yang sangat penting dalam pengembangan aplikasi, situs web, dan produk digital.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="400">
                    <div class="icon flex-shrink-0"><i class="ri-base-station-line" style="color: #ff5828;"></i></div>
                    <div>
                        <h4 class="title"><a href="https://github.com/eovchar/neteng-roadmap" class="stretched-link" target="_blank">Network Enginering</a></h4>
                        <p class="description">Network engineering adalah cabang dalam bidang teknologi informasi yang berkaitan dengan perancangan, pengembangan, implementasi, manajemen, dan pemeliharaan infrastruktur jaringan komputer.
                        </p>
                    </div>
                </div><!-- End Service Item -->

            </div>

        </div>
    </section><!-- End Our Services Section -->

    <!-- ======= Services Cards Section ======= -->
    <section id="services-cards" class="services-cards">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4">

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg" style="background-image: url(build/assets/img/pages/service/relasi.jpg);"></div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title">Relasi</h4>
                                    <p>Membangun hubungan solidaritas yang kuat dan memperluas jaringan sosial.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg" style="background-image: url(build/assets/img/pages/service/wawasan.jpg);"></div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title">Wawasan</h4>
                                    <p>Anggota dapat saling belajar satu sama lain, berkembang dalam minat atau bidang tertentu, dan memperluas wawasan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg" style="background-image: url(build/assets/img/pages/service/sertifikat.png);"></div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title">Sertifikat</h4>
                                    <p>Setiap anggota mendapatkan sertifikat sebagai bukti bahwa mengikuti organisasi ini.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg" style="background-image: url(build/assets/img/pages/service/penghasilan.jpg);"></div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title">Penghasilan</h4>
                                    <p>Setiap anggota mendapatkan penghasilan dalam membuat projekan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->

            </div>

        </div>
    </section><!-- End Services Cards Section -->
@endsection
