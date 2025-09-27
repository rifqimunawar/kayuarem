<div class="container-fluid overflow-hidden my-5 px-lg-0">
  <div class="container about px-lg-0">
    <div class="row g-0 mx-lg-0">
      <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
        <div class="p-lg-5 pe-lg-0 text-justify">
          <div class="section-title text-center">
            <h1 class="display-5 mb-4">{{ __('trans.Visi') }}</h1>
          </div>
          <div class="mb-4 pb-2 text-justify">
            <p class="mb-4 pb-2 " style="text-align: justify;">{{ $dataAbout->visi ?? '' }}</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
        <div class="p-lg-5 pe-lg-0">
          <div class="section-title text-center">
            <h1 class="display-5 mb-4">{{ __('trans.Misi') }}</h1>
          </div>
          <div class="mb-4 pb-2 text-justify">
            @foreach (preg_split('/\r\n|\r|\n/', $dataAbout->misi ?? '') as $line)
              @if (trim($line) !== '')
                <p class="mb-2" style="text-align: justify;">{{ $line }}</p>
              @endif
            @endforeach
          </div>

        </div>
      </div>

    </div>
  </div>
</div>
