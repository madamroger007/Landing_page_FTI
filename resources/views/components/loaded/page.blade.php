<div class="loadedPage" id="loadedPage">
    <div style="display: flex; justify-content: center; align-items: center; background-color: rgb(235, 241, 245); position: fixed; top: 0; left: 0; z-index: 9999; width: 100%; height: 100%;">
        <div class="la-pacman la-3x mb-28" style="color: rgb(9, 9, 14)">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
        <h1 id='loading-progress' class="absolute bottom-52"></h1>
    </div>



    @push('scripts')
    <script>
        $(document).ready(function() {
            var loadingProgress = $('#loading-progress');
            function updateLoadingProgress(percentage) {
                loadingProgress.text( 'Loading '+ percentage + '%');
            }
            // Menampilkan animasi loading dan persentase loading saat halaman pertama kali dimuat
            $('#content').hide();
            $('.loadedPage').fadeOut(3000, function() {
                $('#content').fadeIn(1000); // Menampilkan konten halaman

            });

            // Simulasi persentase loading (ubah sesuai kebutuhan)
            var percentage = 0;
            var interval = setInterval(function() {
                if (percentage <= 100) {
                    updateLoadingProgress(percentage);
                    percentage += 5; // Ganti dengan nilai yang sesuai
                } else {
                    clearInterval(interval);
                    updateLoadingProgress(100);
                }
            }, 100); // Ubah interval sesuai kebutuhan
        });
    </script>
@endpush

