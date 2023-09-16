@extends('layouts.app')

@section('container')
    {{-- message --}}
    {!! Toastr::message() !!}
    <div>
        <!-- ======= Hero Section ======= -->
        <section id="hero" class="hero d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4">
                        <h2 data-aos="fade-up">EPOCH DIGITAL</h2>
                        <blockquote data-aos="fade-up" data-aos-delay="100">
                            <p> "Forum untuk berkumpulnya bagi orang-orang yang mempunyai minat, kegemaran dalam berbagai bidang teknologi. " </p>
                        </blockquote>
                        <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                            <a href="/about" class="btn-get-started">Get Started</a>
                            <a href="https://drive.google.com/file/d/1Sm_B6YlPow9b4sS4AQi7icqumNaF-HlN/preview"
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
                            <h3>Bidang Keahlian</h3>

                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <div class="icon-list d-flex">
                                        <i class="bi bi-columns" style="color: #5578ff;"></i>
                                        <span>UI/UX</span>
                                    </div>
                                </div><!-- End Icon List Item-->


                                <div class="col-md-6">
                                    <div class="icon-list d-flex">
                                        <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
                                        <span>Graphic desaign</span>
                                    </div>
                                </div><!-- End Icon List Item-->

                                <div class="col-md-6">
                                    <div class="icon-list d-flex">
                                        <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
                                        <span>Full Stack Web</span>
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
                                <img src="build/assets/img/iphone.png" alt="Image" class="img-fluid">
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
                        <h2>Blog Terbaru</h2>

                    </div>

                    <div class="row gy-5">
                        @foreach ($posts as $index => $post)
                            @if ($index < $limit)
                                <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                                    <div class="post-box">
                                        <div class="post-img"><img src="assets/img/blog/blog-1.jpg" class="img-fluid"
                                                alt=""></div>
                                        <div class="meta">
                                            <span class="post-date">{{ $post->created_at->diffForHumans() }}</span>
                                            <span class="post-author"> / {{ $post->author->name }}</span>
                                        </div>
                                        <h3 class="post-title">{{ $post->title }}</h3>
                                        <p>{{ $post->excerpt }}</p>
                                        <a href="/blogs/{{ $post->slug }}" class="readmore stretched-link"><span>Read
                                                More</span><i class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            @endif
                        @endforeach


                    </div>

                </div>
            </section><!-- End Recent Blog Posts Section -->

        </main><!-- End #main -->
    @endsection
