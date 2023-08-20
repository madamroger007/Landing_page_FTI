<div class="loadedPage">
    <div style="display: flex; justify-content: center; align-items: center; background-color: rgba(0, 0, 0, 0.7); position: fixed; top: 0; left: 0; z-index: 9999; width: 100%; height: 100%;">
        <div class="la-pacman la-3x" style="color: rgb(237, 237, 246)">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>  
    </div>

    @push('scripts')
     <script>
        // Load Animation
        $(function(){
            setTimeout(() => {
            $(".loadedPage").fadeOut(1500);
        }, 1500);
        })
    </script>
@endpush