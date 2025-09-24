@php
  use App\Helpers\Fungsi;
  use Illuminate\Support\Str;
@endphp
<div class="container-xxl py-5">
  <div class="container">
    <div class="section-title text-center">
      <h1 class="display-5 mb-5">Our Gallery</h1>
    </div>
    <div class="row g-4 portfolio-container">

      @foreach ($dataServices as $item)
        <div class="col-lg-4 col-md-6 portfolio-item wow fadeInUp" data-wow-delay="{{ 0.5 * $loop->iteration }}s">
          <div class="rounded overflow-hidden">
            <!-- BAGIAN GAMBAR -->
            <div class="position-relative overflow-hidden">
              <img class="img-fluid w-100" src="{{ asset('img/' . ($item->img ?? 'default.png')) }}" alt=""
                style="height: 15rem; object-fit: cover;">
              <div class="portfolio-overlay">
                <a class="btn btn-square btn-outline-light mx-1"
                  href="{{ asset('img/' . ($item->img ?? 'default.png')) }}" data-lightbox="portfolio"><i
                    class="fa fa-eye"></i></a>
                {{-- <a class="btn btn-square btn-outline-light mx-1" href="{{ route('serviceDetail', $item->id) }}"><i
                    class="fa fa-link"></i></a> --}}
              </div>
            </div>
            <!-- BAGIAN TEKS -->
            {{-- <div class="border border-5 border-light border-top-0 p-4">
              <h5 class="lh-base mb-2">{{ Str::limit($item->title, 18) }}</h5>
              <p class="mb-3">{{ Str::limit($item->deskripsi, 75) }}</p>
              <a class="fw-medium text-primary" href="{{ route('serviceDetail', $item->id) }}">
                Read More <i class="fa fa-arrow-right ms-2"></i>
              </a>
            </div> --}}
          </div>
        </div>
      @endforeach

    </div>
  </div>
</div>
