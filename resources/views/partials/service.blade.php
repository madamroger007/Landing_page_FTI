 <!-- ======= Our Services Section ======= -->
 <section id="services-list" class="services-list">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>Visi-Misi</h2>

        </div>

        <div class="row gy-5">
            @foreach ($service as $service)
                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon flex-shrink-0"><i class="bi {{ $service['icon'] }}"
                            style="color: #f57813;"></i></div>
                    <div>
                        <h4 class="title"><a href="#" class="stretched-link">{{ $service['title'] }}</a>
                        </h4>
                        <p class="description">{{ $service['body'] }}</p>
                    </div>
                </div>
            @endforeach
            <!-- End Service Item -->

        </div>

    </div>
</section><!-- End Our Services Section -->