@extends('server.layouts.app')

@section('content-server')
  <div class="row">
    <div class="col-lg-12">
      <div class="card w-100">
        <div class="card-body">
          <h4 class="mb-2">{{ $title ?? 'Pengaturan Website' }}</h4>
          <p class="text-muted mb-4">{{ $descriptionTitle ?? 'Kelola informasi website dan kontak' }}</p>

          <form id="siteForm" action="{{ route('store.site') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
              {{-- Nama Website --}}
              <div class="col-md-6 mb-3">
                <label class="form-label">Nama Website <span class="text-danger">*</span></label>
                <input type="text" name="site_name" class="form-control @error('site_name') is-invalid @enderror"
                  value="{{ old('site_name', $data->site_name ?? '') }}" required>
                @error('site_name')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              {{-- Nomor Telepon --}}
              <div class="col-md-6 mb-3">
                <label class="form-label">Nomor Telepon <span class="text-danger">*</span></label>
                <input type="tel" name="mobile" class="form-control @error('mobile') is-invalid @enderror"
                  value="{{ old('mobile', $data->mobile ?? '') }}" placeholder="08123456789" required>
                @error('mobile')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              {{-- Link Media Sosial --}}
              <div class="col-md-12 mb-3">
                <label class="form-label">Link Media Sosial <span class="text-danger">*</span></label>
                <input type="url" name="link_ig" class="form-control @error('link_ig') is-invalid @enderror"
                  value="{{ old('link_ig', $data->link_ig ?? '') }}" placeholder="https://instagram.com/username"
                  required>
                @error('link_ig')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              {{-- Alamat --}}
              <div class="col-md-12 mb-3">
                <label class="form-label">Alamat Lengkap <span class="text-danger">*</span></label>
                <textarea name="alamat" rows="4" class="form-control @error('alamat') is-invalid @enderror" required>{{ old('alamat', $data->alamat ?? '') }}</textarea>
                @error('alamat')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              {{-- Link Google Maps --}}
              <div class="col-md-12 mb-3">
                <label class="form-label">Link Google Maps <span class="text-danger">*</span></label>
                <textarea name="link_gmap" rows="5" class="form-control @error('link_gmap') is-invalid @enderror" required>{{ old('link_gmap', $data->link_gmap ?? '') }}</textarea>
                @error('link_gmap')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              {{-- Logo Upload + Preview --}}
              <div class="col-md-12 mb-3">
                <label class="form-label">Logo Website (opsional)</label>
                <input type="file" name="logo" id="logo"
                  class="form-control @error('logo') is-invalid @enderror" accept="image/jpeg,image/png,image/gif">
                @error('logo')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror

                <div class="mt-3" id="preview-container" style="{{ empty($data->logo) ? 'display:none;' : '' }}">
                  <img id="preview-img" src="{{ !empty($data->logo) ? asset('img/' . $data->logo) : '' }}"
                    alt="Preview Logo" class="img-thumbnail" style="max-width:200px;">
                </div>
              </div>
            </div>

            <input type="hidden" name="id" value="1">

            <div class="d-flex justify-content-end mt-4">
              <button type="submit" id="submitBtn" class="btn btn-primary">
                <i class="fas fa-save me-1"></i>
                <span id="submitText">Simpan Data</span>
              </button>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
@endsection

@push('scripts')
  <script>
    document.getElementById('logo').addEventListener('change', function(e) {
      const file = e.target.files[0];
      const previewContainer = document.getElementById('preview-container');
      const previewImg = document.getElementById('preview-img');

      if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
          previewImg.src = e.target.result;
          previewContainer.style.display = 'block';
        };
        reader.readAsDataURL(file);
      } else {
        previewContainer.style.display = 'none';
      }
    });

    document.getElementById('siteForm').addEventListener('submit', function() {
      const btn = document.getElementById('submitBtn');
      const txt = document.getElementById('submitText');

      btn.disabled = true;
      // ubah teks & icon ke mode loading
      txt.innerHTML =
        '<span class="spinner-border spinner-border-sm me-1" role="status" aria-hidden="true"></span> Menyimpan...';
    });
  </script>
@endpush
