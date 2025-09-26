  <div class="container bg-light about px-lg-0">
    <div class="row g-0 mx-lg-0">
      <div class="col-lg-6 about-text pb-5 wow fadeIn" data-wow-delay="0.5s">
        <div class="p-lg-5 pe-lg-0 text-justify">
          <div class="mb-4 pb-2 d-flex justify-content-center">
            <img src="{{ asset('img/' . ($dataAbout->img_slogan ?? '')) }}" alt="" class="img-fluid"
              style="width: 80%;">
          </div>

        </div>
      </div>
      <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
        <div class="p-lg-5 pe-lg-0">
          <div class="section-title text-center">
            <h1 class="display-5 mb-4">{{ $dataAbout->slogan ?? '' }};</h1>
          </div>
          <div class="mb-4 pb-2 text-justify">
            <p class="mb-2" style="text-align: justify;">{{ $dataAbout->deskripsi_slogan ?? '--' }}</p>
          </div>

        </div>
      </div>

    </div>
  </div>
