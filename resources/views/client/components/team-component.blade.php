<div class="container-xxl py-5">
  <div class="container">
    <div class="section-title text-center">
      <h1 class="display-5 mb-5">{{ __('trans.Team Members') }}</h1>
    </div>
    <div class="row g-4">

      @foreach ($dataTeam as $item)
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="{{ 0.5 * $loop->iteration }}s">
          <div class="team-item">
            <div class="overflow-hidden position-relative">
              <img class="img-fluid" src="{{ asset('img/' . ($item->img ?? 'default.png')) }}" alt=""
                style="height: 13rem; object-fit: cover; width: 100%;">
              <div class="team-social">
                <a class="btn btn-square" href="{{ $item->link_fb ?? '#' }}"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-square" href="{{ $item->link_tw ?? '#' }}"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-square" href="{{ $item->link_ig ?? '#' }}"><i class="fab fa-instagram"></i></a>
              </div>
            </div>
            <div class="text-center border border-5 border-light border-top-0 p-4">
              <h5 class="mb-0">{{ $item->nama ?? '-' }}</h5>
              <small>{{ $item->posisi ?? '-' }}</small>
            </div>
          </div>
        </div>
      @endforeach



    </div>
  </div>
</div>
