@extends('layouts.main')

@section('container')
    <div>
        <!-- ======= Hero Section ======= -->
        <section id="hero" class="hero d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4">
                        <h2 data-aos="fade-up">Teknik Informatika</h2>
                        <blockquote data-aos="fade-up" data-aos-delay="100">
                            <p> "Mahasiswa terbaik adalah mereka yang membawa perubahan positif bagi sekitarnya." </p>
                        </blockquote>
                        <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                            <a href="/about" class="btn-get-started">Get Started</a>
                            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ"
                                class="glightbox btn-watch-video d-flex align-items-center"><i
                                    class="bi bi-play-circle"></i><span>Watch Video</span></a>
                        </div>

                    </div>
                </div>
            </div>
        </section><!-- End Hero Section -->

        <main id="main">

            @include('partials.swiper')

            @include('partials.service')

            @include('partials.hero')

            <!-- ======= Features Section ======= -->
            <section id="features" class="features">

                <div class="container" data-aos="fade-up">
                    <div class="row">
                        <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
                            <h3>Bidang Kemampuan</h3>

                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <div class="icon-list d-flex">
                                        <i class="ri-store-line" style="color: #ffbb2c;"></i>
                                        <span>Bisnis</span>
                                    </div>
                                </div><!-- End Icon List Item-->

                                <div class="col-md-6">
                                    <div class="icon-list d-flex">
                                        <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
                                        <span>Data analis</span>
                                    </div>
                                </div><!-- End Icon List Item-->

                                <div class="col-md-6">
                                    <div class="icon-list d-flex">
                                        <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
                                        <span>Administrasi</span>
                                    </div>
                                </div><!-- End Icon List Item-->

                                <div class="col-md-6">
                                    <div class="icon-list d-flex">
                                        <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
                                        <span>Designer</span>
                                    </div>
                                </div><!-- End Icon List Item-->

                                <div class="col-md-6">
                                    <div class="icon-list d-flex">
                                        <i class="ri-database-2-line" style="color: #47aeff;"></i>
                                        <span>Database Support</span>
                                    </div>
                                </div><!-- End Icon List Item-->

                                <div class="col-md-6">
                                    <div class="icon-list d-flex">
                                        <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
                                        <span>Web Development</span>
                                    </div>
                                </div><!-- End Icon List Item-->

                                <div class="col-md-6">
                                    <div class="icon-list d-flex">
                                        <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
                                        <span>Marketing</span>
                                    </div>
                                </div><!-- End Icon List Item-->

                                <div class="col-md-6">
                                    <div class="icon-list d-flex">
                                        <i class="ri-base-station-line" style="color: #ff5828;"></i>
                                        <span>Teknisi Jaringan</span>
                                    </div>
                                </div><!-- End Icon List Item-->
                            </div>
                        </div>
                        <div class="col-lg-5 position-relative" data-aos="fade-up" data-aos-delay="200">
                            <div class="phone-wrap">
                                <img src="../img/iphone.png" alt="Image" class="img-fluid">
                            </div>
                        </div>
                    </div>

                </div>

                <div class="details">
                    <div class="container" data-aos="fade-up" data-aos-delay="300">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Silahkan cek<br>Tentang Kami</h4>
                                <p>Kami adalah keluarga fti gelombang 2021 dan sebagai angkatan yang terbaik, doakan kami
                                    selalu disehatkan &#128519; </p>
                                <a href="/about" class="btn-get-started">Get Started</a>
                            </div>
                        </div>

                    </div>
                </div>

            </section><!-- End Features Section -->

            <!-- ======= Recent Blog Posts Section ======= -->
            <section id="recent-posts" class="recent-posts">
                <div class="container" data-aos="fade-up">

                    <div class="section-header">
                        <h2>Recent Blog Posts</h2>

                    </div>

                    <div class="row gy-5">

                        <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="post-box">
                                <div class="post-img"><img src="assets/img/blog/blog-1.jpg" class="img-fluid"
                                        alt=""></div>
                                <div class="meta">
                                    <span class="post-date">Tue, December 12</span>
                                    <span class="post-author"> / Julia Parker</span>
                                </div>
                                <h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis</h3>
                                <p>Illum voluptas ab enim placeat. Adipisci enim velit nulla. Vel omnis laudantium.
                                    Asperiores eum ipsa est officiis. Modi qui magni est...</p>
                                <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </section><!-- End Recent Blog Posts Section -->

        </main><!-- End #main -->
    @endsection
