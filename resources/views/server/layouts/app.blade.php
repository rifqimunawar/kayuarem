<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Flexy Free Bootstrap Admin Template by WrapPixel</title>
  <link rel="shortcut icon" type="image/png" href="./assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="{{ asset('assets_server/assets/css/styles.min.css') }}" />

  {{-- Style Template --}}
  <link rel="stylesheet" href="{{ asset('assets_server/assets/css/styles.min.css') }}" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

  {{-- DataTables --}}
  <link href="https://cdn.datatables.net/1.13.8/css/dataTables.bootstrap5.min.css" rel="stylesheet">

  {{-- Summernote CSS --}}
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.css" rel="stylesheet">

  @stack('styles')



</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">

    @include('server.layouts.sidebar')
    <div class="body-wrapper">
      @include('server.layouts.topbar')
      <div class="body-wrapper-inner">
        <div class="container-fluid">
          @yield('content-server')
          @include('server.layouts.footer')
        </div>
      </div>
    </div>
  </div>
  @include('sweetalert::alert')

  <script src="{{ asset('assets_server/assets/libs/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('assets_server/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets_server/assets/js/sidebarmenu.js') }}"></script>
  <script src="{{ asset('assets_server/assets/js/app.min.js') }}"></script>
  <script src="{{ asset('assets_server/assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
  <script src="{{ asset('assets_server/assets/libs/simplebar/dist/simplebar.js') }}"></script>
  <script src="{{ asset('assets_server/assets/js/dashboard.js') }}"></script>
  <!-- solar icons -->
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


  {{-- jQuery (FULL, hanya 1x) --}}
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

  {{-- Bootstrap Bundle --}}
  <script src="{{ asset('assets_server/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

  {{-- Template Scripts --}}
  <script src="{{ asset('assets_server/assets/js/app.min.js') }}"></script>

  {{-- DataTables --}}
  <script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.8/js/dataTables.bootstrap5.min.js"></script>

  {{-- Summernote JS --}}
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.js"></script>


  @stack('scripts')
  <script>
    $('#dataTable').DataTable({
      responsive: true,
      language: {
        emptyTable: "Tidak ada data tersedia"
      }
    });
  </script>

  {{-- format rupiah  --}}
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const rupiahInputs = document.querySelectorAll(".format-rupiah-input");
      rupiahInputs.forEach(function(input) {
        if (input.value) {
          input.value = formatRupiah(input.value);
        }
        input.addEventListener("input", function(e) {
          const angka = this.value.replace(/[^0-9]/g, "");
          this.value = formatRupiah(angka);
        });
        input.form?.addEventListener("submit", function() {
          const angkaNormal = input.value.replace(/[^0-9]/g, "");
          input.value = angkaNormal;
        });
      });

      function formatRupiah(angka) {
        if (!angka) return "";
        return "Rp. " + angka
          .replace(/\B(?=(\d{3})+(?!\d))/g, ".");
      }
    });
  </script>





  @stack('scripts')

</body>

</html>
