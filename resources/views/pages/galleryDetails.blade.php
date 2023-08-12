@extends('layouts.main')

@section('container')
@include('partials.breadcrumbs')
<section id="portfolio-details" class="portfolio-details">
<div class="container" data-aos="fade-up">

    <div class="row gy-4">

      <div class="col-lg-8">
        <div class="slides-1 portfolio-details-slider swiper">
          <div class="swiper-wrapper align-items-center">
           

            <div class="swiper-slide ">
              <img src="https://drive.google.com/uc?id={{ $galleri["gambar1"] }}" alt="Tidak tersedia" class="img-fluid">
              <div class="portfolio-info">
                <a href="https://drive.google.com/file/d/{{ $galleri['gambar1'] }}/preview"
                data-gallery="portfolio-gallery-{{ $galleri['kategori'] }}"
                class="glightbox preview-link"><i class="fs-2  bi bi-zoom-in"></i></a>
              </div>
            </div>

            <div class="swiper-slide ">
              <img src="https://drive.google.com/uc?id={{ $galleri["gambar2"] }}" alt="" class="img-fluid">
              <div class="portfolio-info">
                <a href="https://drive.google.com/file/d/{{ $galleri['gambar2'] }}/preview"
                data-gallery="portfolio-gallery-{{ $galleri['kategori'] }}"
                class="glightbox preview-link"><i class="fs-2  bi bi-zoom-in"></i></a>
              </div>
            </div>

            <div class="swiper-slide ">
              <img src="https://drive.google.com/uc?id={{ $galleri["gambar3"] }}" alt="Tidak tersedia" class="img-fluid">
              <div class="portfolio-info">
                <a href="https://drive.google.com/file/d/{{ $galleri['gambar3'] }}/preview"
                data-gallery="portfolio-gallery-{{ $galleri['kategori'] }}"
                class="glightbox preview-link"><i class="fs-2  bi bi-zoom-in"></i></a>
              </div>
            </div>

            <div class="swiper-slide ">
              <img src="https://drive.google.com/uc?id={{ $galleri["gambar4"] }}" alt="Tidak tersedia" class="img-fluid">
              <div class="portfolio-info">
                <a href="https://drive.google.com/file/d/{{ $galleri['gambar4'] }}/preview"
                data-gallery="portfolio-gallery-{{ $galleri['kategori'] }}"
                class="glightbox preview-link"><i class="fs-2  bi bi-zoom-in"></i></a>
              </div>
            </div>
        
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="portfolio-info">
          <h3>{{ $galleri["judul"]}}</h3>
          <ul>
            <li><strong>Kategori</strong>:{{ $galleri["kategori"]}}n</li>
            <li><strong>Lokasi</strong>: {{ $galleri["lokasi"]}}</li>
            <li><strong>Waktu</strong>: {{ $galleri["waktu"]}}</li>
          </ul>
        </div>
        <div class="portfolio-description">
          <h2>{{ $galleri["subjudul"]}}</h2>
          <p> {{ $galleri["deskripsi"]}} </p>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Portfolio Details Section -->

@endsection
