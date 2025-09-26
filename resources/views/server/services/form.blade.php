@extends('server.layouts.app')

@section('content-server')
  <div class="row">
    <div class="col-lg-12">
      <div class="card w-100">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
              <h4 class="card-title mb-2">{{ $title ?? 'Data Management' }}</h4>
              <p class="card-subtitle text-muted mb-0">
                {{ $descriptionTitle ?? 'Kelola data dengan mudah dan efisien' }}
              </p>
            </div>
          </div>

          <!-- Form -->
          <form action="{{ route('store.services') }}" id="formInput" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Jenis Media -->
            <div class="col-md-12 mb-3">
              <label class="form-label">Jenis Media</label><br>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="media_type" id="media_video" value="video" checked>
                <label class="form-check-label" for="media_video">Video</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="media_type" id="media_image" value="image">
                <label class="form-check-label" for="media_image">Gambar</label>
              </div>
            </div>

            <!-- Input Link Video -->
            <div id="videoInputWrapper" class="col-md-12 mb-3">
              <label for="link_video" class="form-label">Link Video</label>
              <input type="text" class="form-control @error('link_video') is-invalid @enderror" id="link_video"
                name="link_video" value="{{ old('link_video', $data->link_video ?? '') }}"
                placeholder="Masukkan link video...">
              @error('link_video')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

            <!-- Input Gambar -->
            <div id="imageInputWrapper" class="col-md-12 mb-4" style="display: none;">
              <label for="img" class="form-label">Gambar <span class="text-muted">(Opsional)</span></label>
              <input type="file" class="form-control @error('img') is-invalid @enderror" id="img" name="img"
                accept="image/*">
              @error('img')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
              <div class="form-text">
                Format yang didukung: JPG, PNG, GIF. Maksimal 2MB
              </div>

              <!-- Image Preview -->
              <div id="imagePreview" class="mt-2" style="{{ !empty($data->img) ? '' : 'display:none;' }}">
                <img id="previewImg" src="{{ !empty($data->img) ? asset('img/' . $data->img) : '' }}" alt="Preview"
                  class="img-thumbnail" style="max-width: 200px; max-height: 200px;">
              </div>
            </div>

            <input type="hidden" name="id" value="{{ $data->id ?? '' }}">

            <!-- Form Actions -->
            <div class="row">
              <div class="col-12">
                <hr class="my-4">
                <div class="d-flex justify-content-between">
                  <button type="button" class="btn btn-outline-secondary" onclick="resetForm()">
                    <i class="fas fa-undo me-1"></i> Reset Form
                  </button>
                  <div>
                    <button type="button" class="btn btn-secondary me-2" onclick="window.history.back()">
                      <i class="fas fa-arrow-left me-1"></i> Kembali
                    </button>
                    <button type="submit" class="btn btn-primary" id="submitBtn">
                      <i class="fas fa-save me-1"></i> <span id="submitText">Simpan Data</span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
@endsection
@push('styles')
  <style>
    .form-label {
      font-weight: 600;
      color: #2c3e50;
    }

    .form-control:focus {
      border-color: #4e73df;
      box-shadow: 0 0 0 0.2rem rgba(78, 115, 223, 0.25);
    }

    .btn {
      border-radius: 6px;
      font-weight: 500;
    }

    .form-text {
      font-size: 0.8em;
      color: #6c757d;
    }

    #imagePreview {
      border: 2px dashed #dee2e6;
      padding: 10px;
      border-radius: 6px;
      text-align: center;
    }

    .card {
      box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15);
      border: none;
      border-radius: 0.35rem;
    }
  </style>
@endpush
@push('scripts')
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const radioVideo = document.getElementById('media_video');
      const radioImage = document.getElementById('media_image');
      const videoInput = document.getElementById('videoInputWrapper');
      const imageInput = document.getElementById('imageInputWrapper');

      function toggleMedia() {
        if (radioVideo.checked) {
          videoInput.style.display = 'block';
          imageInput.style.display = 'none';
        } else {
          videoInput.style.display = 'none';
          imageInput.style.display = 'block';
        }
      }

      radioVideo.addEventListener('change', toggleMedia);
      radioImage.addEventListener('change', toggleMedia);
      toggleMedia(); // initial load

      // Gambar preview
      document.getElementById('img').addEventListener('change', function(e) {
        const file = e.target.files[0];
        const previewImg = document.getElementById('previewImg');
        const previewContainer = document.getElementById('imagePreview');

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
    });

    // Reset Form
    function resetForm() {
      Swal.fire({
        title: "Reset Form",
        text: "Apakah Anda yakin ingin mereset form ini?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Ya, Reset",
        cancelButtonText: "Batal"
      }).then((result) => {
        if (result.isConfirmed) {
          const form = document.querySelector('form');
          form.reset();
          toggleMedia(); // Reset media input
          document.getElementById('imagePreview').style.display = 'none';
          document.querySelectorAll('.is-invalid').forEach(el => el.classList.remove('is-invalid'));
          Swal.fire("Form berhasil direset!", "", "success");
        }
      });
    }

    // Submit Button Loading
    document.getElementById('formInput').addEventListener('submit', function() {
      const submitBtn = document.getElementById('submitBtn');
      const submitText = document.getElementById('submitText');
      submitBtn.disabled = true;
      submitText.innerHTML =
        '<span class="spinner-border spinner-border-sm me-1" role="status" aria-hidden="true"></span> Menyimpan...';
    });

    // Show Toast (optional: if session messages exist)
    function showToast(message, type = 'success') {
      const toastHTML = `
        <div class="toast align-items-center text-white bg-${type === 'success' ? 'success' : 'danger'} border-0" role="alert">
          <div class="d-flex">
            <div class="toast-body">
              <i class="fas fa-${type === 'success' ? 'check-circle' : 'exclamation-triangle'} me-2"></i>
              ${message}
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
          </div>
        </div>`;

      let toastContainer = document.querySelector('.toast-container');
      if (!toastContainer) {
        toastContainer = document.createElement('div');
        toastContainer.className = 'toast-container position-fixed top-0 end-0 p-3';
        document.body.appendChild(toastContainer);
      }

      toastContainer.insertAdjacentHTML('beforeend', toastHTML);
      const toastElement = toastContainer.lastElementChild;
      const toast = new bootstrap.Toast(toastElement);
      toast.show();
    }

    @if (session('success'))
      showToast('{{ session('success') }}', 'success');
    @endif

    @if (session('error'))
      showToast('{{ session('error') }}', 'error');
    @endif
  </script>
@endpush
