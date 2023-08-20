@push('scripts')
@if (session()->has('register_success') || session()->has('login_error'))
<script>
  $(document).ready(function() {
    setTimeout(function() {
      @if (session()->has('register_success'))
      fetchAndShowToastr('/login', 'Registrasi Berhasil!', 'success');
      @endif

      @if (session()->has('login_error'))
        fetchAndShowToastr('/login', 'Login gagal!', 'error');
      @endif
    }, 1700);
  });

  function showToastr(message, title, type) {
    toastr.options = {
      "progressBar": true,
      "closeButton": true,
      "timeOut": 10000
    };
    toastr[type](message, title);
  }

  function fetchAndShowToastr(url, title, type) {
    $.ajax({
      url: url,
      method: 'GET',
      success: function(response) {
        showToastr(response.message, title, type);
      },
      error: function(xhr, status, error) {
        console.error('Error fetching:', error);
      }
    });
  }
</script>
@endif

@endpush