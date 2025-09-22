<div class="container-xxl py-5">
  <div class="container">
    <div class="section-title text-center">
      <h1 class="display-5 mb-5">Our Projects</h1>
    </div>
    <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
      <div class="col-12 text-center">
        <ul class="list-inline mb-5" id="portfolio-flters">
          <li class="mx-2 active" data-filter="*">All</li>
          @foreach ($dataCatProject as $item)
            <li class="mx-2" data-filter=".{{ $item->id }}">{{ $item->categori }} </li>
          @endforeach
        </ul>
      </div>
    </div>
    <div class="row g-4 portfolio-container">

      @foreach ($dataProject as $item)
        <div class="col-lg-4 col-md-6 portfolio-item {{ $item->categori_id }} wow fadeInUp"
          data-wow-delay="{{ 0.5 * $loop->iteration }}s">
          <div class="rounded overflow-hidden">
            <div class="position-relative overflow-hidden">
              <img class="img-fluid w-100" src="{{ asset('img/' . $item->img) }}" alt=""
                style="height: 15rem; widht: auto; object-fit: cover;">
              <div class="portfolio-overlay">
                <a class="btn btn-square btn-outline-light mx-1" href="{{ asset('img/' . $item->img) }}"
                  data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                {{-- <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a> --}}
              </div>
            </div>
            <div class="border border-5 border-light border-top-0 p-4">
              <p class="text-primary fw-medium mb-2">{{ $item->category->categori }} </p>
              <h5 class="lh-base mb-0">{{ $item->judul ?? '-' }} </a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</div>
