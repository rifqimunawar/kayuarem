<div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
  <div class="container about px-lg-0">
    <div class="row g-0 mx-lg-0">
      <div class="col-lg-6 ps-lg-0" style="min-height: 400px;">
        <div class="position-relative h-100">
          <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('img/' . $dataAbout->img ?? '') }}"
            style="object-fit: cover;" alt="">
        </div>
      </div>
      <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
        <div class="p-lg-5 pe-lg-0">
          <div class="section-title text-start">
            <h1 class="display-5 mb-4">{{ __('trans.About Us') }}</h1>
          </div>
          <p class="mb-4 pb-2">{{ $dataAbout->deskripsi ?? '' }}</p>
          <div class="row g-4 mb-4 pb-2">
          </div>
          <a href="{{ route('aboutpage') }}" class="btn btn-primary py-3 px-5">Read More</a>
        </div>
      </div>
    </div>
  </div>
</div>
