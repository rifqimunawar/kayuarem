@extends('server.layouts.app')
@section('content-server')
  <div class="row g-4">
    <div class="col-12 col-sm-6 col-lg-3">
      <div class="card shadow-sm border-0 text-center p-3">
        <h5 class="card-title">{{ $dataProduct ?? 0 }}</h5>
        <p class="card-text">Products</p>
      </div>
    </div>
    <div class="col-12 col-sm-6 col-lg-3">
      <div class="card shadow-sm border-0 text-center p-3">
        <h5 class="card-title">{{ $dataProject ?? 0 }}</h5>
        <p class="card-text">Project</p>
      </div>
    </div>
    <div class="col-12 col-sm-6 col-lg-3">
      <div class="card shadow-sm border-0 text-center p-3">
        <h5 class="card-title">{{ $dataMessage ?? 0 }}</h5>
        <p class="card-text">Message</p>
      </div>
    </div>
    <div class="col-12 col-sm-6 col-lg-3">
      <div class="card shadow-sm border-0 text-center p-3">
        <h5 class="card-title">{{ $dataMessageUnread ?? 0 }}</h5>
        <p class="card-text">Message Unread</p>
      </div>
    </div>
  </div>

  <div class="row mt-4">
    <div class="col-12">
      <div class="card shadow-sm border-0 p-3">
        <h5 class="card-title">Chart</h5>
        <div class="card-body">
          <div id="chart"></div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <script>
    // Ambil data dari controller
    var dataPengunjung = @json($datePengunjung);

    // Pisahkan hari & jumlah
    var categories = dataPengunjung.map(item => item.hari);
    var values = dataPengunjung.map(item => item.jumlah);

    var options = {
      series: [{
        name: "Pengunjung",
        data: values
      }],
      chart: {
        type: 'area',
        height: 250,
        zoom: {
          enabled: false
        },
        toolbar: {
          show: false
        }
      },
      dataLabels: {
        enabled: false
      },
      stroke: {
        curve: 'smooth'
      },
      xaxis: {
        categories: categories
      },
      title: {
        text: 'Kunjungan 7 Hari Terakhir',
        align: 'left'
      }
    };

    var chart = new ApexCharts(document.querySelector("#chart"), options);
    chart.render();
  </script>
@endsection
