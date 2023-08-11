@extends('layouts.main')

@section('container')
    @include('partials.breadcrumbs')

    <main id="main" data-aos="fade" data-aos-delay="1500">

         <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">
  
          <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">
  
            <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".belajar">Belajar</li>
              <li data-filter=".kegiatan">Kegiatan</li>
              <li data-filter=".liburan">Liburan</li>
              <li data-filter=".kunjungan">Kunjungan</li>
            </ul><!-- End Portfolio Filters -->
  
          
            <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="300">
              @foreach ($gallery as $photo)
              <div class="col-lg-4 col-md-6 portfolio-item {{$photo["kategori"]}}">
                <img src="https://drive.google.com/uc?id={{ $photo["gambar"]}}" class="img-fluid w-full" alt="">
                <div class="portfolio-info">
                  <h4>{{ $photo["judul"]}}</h4>
                  <p>{{ $photo["subjudul"]}}</p>
                  <a href="https://drive.google.com/file/d/{{ $photo["gambar"]}}/preview"  data-gallery="portfolio-gallery-{{$photo["kategori"]}}" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div><!-- End Portfolio Item -->
              @endforeach
   
            </div><!-- End Portfolio Container -->
  
          </div>
  
        </div>
      </section><!-- End Portfolio Section -->
    </main>
@endsection
