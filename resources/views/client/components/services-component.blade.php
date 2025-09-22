<div class="container-xxl py-5">
  <div class="container">
    <div class="section-title text-center">
      <h1 class="display-5 mb-5">Our Services</h1>
    </div>
    <div class="row g-4">

      @foreach ($dataServices as $item)
        <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="{{ 0.5 * $loop->iteration }}s">
          <div class="service-item">
            <div class="overflow-hidden">
              <img class="img-fluid" src="{{ asset('img/' . ($item->img ?? 'default.png')) }}" alt=""
                style="height: 15rem; object-fit: cover; width: 100%;">
            </div>
            <div class="p-4 text-center border border-5 border-light border-top-0">
              <h4 class="mb-3">{{ $item->title }}</h4>
              <p>{{ \Illuminate\Support\Str::limit($item->deskripsi, 50) }}</p>
              <a class="fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
            </div>
          </div>
        </div>
      @endforeach

    </div>
  </div>
</div>
