 <!-- ======= Our Services Section ======= -->
 <section id="services-list" class="services-list">
     <div class="container mb-5" data-aos="fade-up">

         <div class="section-header">
             <h2>Visi</h2>
         </div>

         <div class="row gy-5">

             <p class="text-center font-semibold">Menjadi pusat pembelajaran teknologi yang membekali setiap indiividu dengan pengetahuan, keterampilan,
                 dan wawasan yang diperlukan untuk meraih keunggulan kompetitif dalam dunia teknologi untuk berkarir
                 ataupun berbisnis.</p>

         </div>

     </div>

     <div class="container mt-5" data-aos="fade-up">

         <div class="section-header">
             <h2>Misi</h2>
         </div>

         <div class="row gy-5">
             @foreach ($service as $service)
                 <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                     <div class="icon flex-shrink-0"><i class="bi {{ $service['icon'] }}" style="color: #f57813;"></i>
                     </div>
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
 </section>

 <!-- End Our Services Section -->
