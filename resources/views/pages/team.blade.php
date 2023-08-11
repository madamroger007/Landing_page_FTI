@extends('layouts.main')

@section('container')
<div class="page-team">

    <main id="main">
   @include('partials.breadcrumbs')


    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
        <div class="container" data-aos="fade-up">

          <div class="section-header">
            <h2>Our Team</h2>

          </div>

          <div class="row gy-4  text-center"">
            @foreach ($teamData as $row)
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="team-member">
                <div class="member-img">
                  <img src="https://drive.google.com/uc?id={{ $row["gambar"] }}" class="img-fluid rounded-top-3" alt="" style=" width:270px; height:290px;">

                  <div class="social">
                    <a href="{{ $row["fb"] }}" target="_blank"><i class="bi bi-facebook"></i></a>
                    <a href="{{ $row["ig"] }}" target="_blank"><i class="bi bi-instagram"></i></a>
                    <a href="{{ $row["linkid"] }}" target="_blank"><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>{{ $row['nama'] }}</h4>
                  <span>{{ $row['slogan'] }}</span>
                </div>
              </div>
            </div><!-- End Team Member -->

            @endforeach
          </div>

        </div>
      </section><!-- End Team Section -->

    </main><!-- End #main -->
@endsection
