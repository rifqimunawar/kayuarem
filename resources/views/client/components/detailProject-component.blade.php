@php
  use App\Helpers\Fungsi;
@endphp

<div class="container-xxl py-5">
  <div class="container">
    <!-- Section Title -->
    <div class="section-title text-center">
      <h1 class="display-5 mb-5">{{ $dataDetailProject->judul ?? '' }}</h1>
    </div>

    <div class="row g-4">
      <!-- Left Column - Project Details (8/12) -->
      <div class="col-md-8">
        <!-- Project Image -->
        <div class="mb-4">
          <img src="{{ Fungsi::getImg($dataDetailProject->img) }}" alt="{{ $dataDetailProject->judul }}"
            class="img-fluid rounded shadow">
        </div>

        <!-- Project Description -->
        <div class="mb-4">
          <h5 class="mb-3">{{ __('trans.Project Descrioption') }}</h5>
          <p class="text-muted lh-lg">
            {{ $dataDetailProject->deskripsi }}
          </p>
        </div>
      </div>

      <!-- Right Column - Related Project (4/12) -->
      <div class="col-md-4">
        <div class="card border-0 shadow-sm">
          <div class="card-header bg-primary">
            <h5 class="mb-0  text-white">{{ __('trans.Other Project') }}</h5>
          </div>
          <div class="card-body">
            @forelse ($dataProject as $item)
              <a href="{{ route('projectDetail', $item->id) }}">
                <div class="d-flex align-items-center mb-3 pb-3 border-bottom">
                  <img src="{{ Fungsi::getImg($item->img) }}" alt="{{ $item->judul ?? '' }}" class="rounded me-3"
                    style="width: 60px; height: 60px; object-fit: cover;">
                  <div class="flex-grow-1">
                    <h6 class="mb-1">{{ $item->judul }}</h6>
                    <small class="text-primary fw-bold">
                      {{ $item->category->categori ?? '' }}
                    </small>
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
