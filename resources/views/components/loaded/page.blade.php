<!-- Garis pemuatan akan muncul di sini -->
<div id="loading-container">
    <div id="loading-bar">
    </div>
</div>

@push('scripts')
    <script>
      // Event saat dokumen siap (DOM ready)
      $(document).ready(function() {
            // Animasikan garis pemuatan memanjang dengan durasi berdasarkan waktu loading
            function animateLoadingBar(loadingTime) {
                const loadingBar = $("#loading-bar");
                let progress = 0;
                const animationInterval = setInterval(function() {
                    if (progress >= 100) {
                        clearInterval(animationInterval); // Hentikan animasi saat mencapai 100%
                        // Sembunyikan garis pemuatan saat animasi selesai
                        const loadingContainer = $("#loading-container");
                        loadingContainer.fadeOut("slow");
                    } else {
                        progress += 1;
                        loadingBar.css("width", progress + "%");
                    }
                }, loadingTime / 100); // Interval waktu antara peningkatan progress
            }

            // Mulai mengukur waktu saat halaman dimuat
            const startTime = performance.now();

            // Event saat halaman selesai dimuat
            $(window).on("load", function() {
                // Hitung waktu loading
                const endTime = performance.now();
                const loadingTime = endTime - startTime;
                // Mulai animasi garis pemuatan dengan durasi sesuai waktu loading
                animateLoadingBar(loadingTime);
            });
        });
    </script>
@endpush
