@php
  use App\Helpers\Fungsi;
@endphp

<div class="container-xxl py-5">
  <div class="container">
    <div class="section-title text-center">
      <h1 class="display-5 mb-5">{{ $dataDetailService->title ?? '-' }}</h1>
    </div>

    <div class="row g-4">
      <div class="col-md-8">
        <div class="mb-4">
          <img src="{{ Fungsi::getImg($dataDetailService->img) }}" alt="{{ $dataDetailService->nama_produk }}"
            class="img-fluid rounded shadow">
        </div>

        <div class="mb-4">
          <h5 class="mb-3">&emsp;</h5>
          <p class="text-muted lh-lg">
            {{ $dataDetailService->deskripsi }}
          </p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card border-0 shadow-sm">
          <div class="card-header bg-primary">
            <h5 class="mb-0  text-white">{{ __('trans.Other Gallery') }}</h5>
          </div>
          <div class="card-body">
            @forelse ($dataServices as $item)
              <a href="{{ route('serviceDetail', $item->id) }}">
                <div class="d-flex align-items-center mb-3 pb-3 border-bottom">
                  <img src="{{ Fungsi::getImg($item->img) }}" alt="{{ $item->title ?? '-' }}" class="rounded me-3"
                    style="width: 60px; height: 60px; object-fit: cover;">
                  <div class="flex-grow-1">
                    <h6 class="mb-1">{{ $item->title ?? '-' }}</h6>
                    {{-- <small class="text-primary fw-bold">
                      {{ $item->title ?? '-' }}
                    </small> --}}
                  </div>
                </div>
              </a>
            @empty
              <p class="text-muted text-center">&emsp;</p>
            @endforelse
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
