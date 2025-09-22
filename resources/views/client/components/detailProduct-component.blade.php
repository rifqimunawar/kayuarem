@php
  use App\Helpers\Fungsi;
@endphp

<div class="container-xxl py-5">
  <div class="container">
    <!-- Section Title -->
    <div class="section-title text-center">
      <h1 class="display-5 mb-5">{{ $dataDetailProduct->nama_produk }}</h1>
    </div>

    <div class="row g-4">
      <!-- Left Column - Product Details (8/12) -->
      <div class="col-md-8">
        <!-- Product Image -->
        <div class="mb-4">
          <img src="{{ Fungsi::getImg($dataDetailProduct->img) }}" alt="{{ $dataDetailProduct->nama_produk }}"
            class="img-fluid rounded shadow">
        </div>

        <!-- Product Price -->
        <div class="mb-3">
          <h3 class="text-primary fw-bold">
            {{ Fungsi::rupiah($dataDetailProduct->nominal) }}
          </h3>
        </div>

        <!-- Product Description -->
        <div class="mb-4">
          <h5 class="mb-3">Deskripsi Produk</h5>
          <p class="text-muted lh-lg">
            {{ $dataDetailProduct->deskripsi }}
          </p>
        </div>
      </div>

      <!-- Right Column - Related Products (4/12) -->
      <div class="col-md-4">
        <div class="card border-0 shadow-sm">
          <div class="card-header bg-primary">
            <h5 class="mb-0  text-white">Produk Lainnya</h5>
          </div>
          <div class="card-body">
            @forelse ($dataProduct as $item)
              <a href="{{ route('productDetail', $item->id) }}">
                <div class="d-flex align-items-center mb-3 pb-3 border-bottom">
                  <img src="{{ Fungsi::getImg($item->img) }}" alt="{{ $item->nama_produk }}" class="rounded me-3"
                    style="width: 60px; height: 60px; object-fit: cover;">
                  <div class="flex-grow-1">
                    <h6 class="mb-1">{{ $item->nama_produk }}</h6>
                    <small class="text-primary fw-bold">
                      {{ Fungsi::rupiah($item->nominal) }}
                    </small>
                  </div>
                </div>
              </a>
            @empty
              <p class="text-muted text-center">Tidak ada produk lain tersedia</p>
            @endforelse
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
