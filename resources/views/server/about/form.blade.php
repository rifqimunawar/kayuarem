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
          <form action="{{ route('store.about') }}" id="form" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">


              {{-- Visi --}}
              <div class="col-md-12 mb-3">
                <label class="form-label">Visi <span class="text-danger">*</span></label>
                <textarea name="visi" rows="5" class="form-control @error('visi') is-invalid @enderror" required>{{ old('visi', $data->visi ?? '') }}</textarea>
                @error('visi')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              {{-- misi --}}
              <div class="col-md-12 mb-3">
                <label class="form-label">Misi <span class="text-danger">*</span></label>
                <textarea name="misi" rows="10" class="form-control @error('misi') is-invalid @enderror" required>{{ old('misi', $data->misi ?? '') }}</textarea>
                @error('misi')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <!-- Deskripsi Field -->
              <div class="col-md-12 mb-3">
                <label for="deskripsi" class="form-label">
                  Deskripsi <span class="text-danger">*</span>
                </label>
                <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi" rows="5"
                  placeholder="Masukkan deskripsi..." required>{{ old('deskripsi', $data->deskripsi ?? '') }}</textarea>
                @error('deskripsi')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
                <div class="form-text">
                  Berikan deskripsi yang menarik dan informatif
                </div>
              </div>

              <!-- Image Upload Field (Optional) -->
              <div class="col-md-12 mb-4">
                <label for="img" class="form-label">
                  Gambar <span class="text-muted">(Opsional)</span>
                </label>
                <input type="file" class="form-control @error('img') is-invalid @enderror" id="img"
                  name="img" accept="image/*">
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
                {{-- ============================================== --}}

                <div class="col-md-12 mb-3">
                  <label for="slogan" class="form-label">
                    Slogan <span class="text-danger">*</span>
                  </label>
                  <input type="text" class="form-control @error('slogan') is-invalid @enderror" id="slogan"
                    name="slogan" value="{{ old('slogan', $data->slogan ?? '') }}" placeholder="Masukkan slogan..."
                    required>
                  @error('slogan')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>

                <!-- Gambar slogan -->
                <div class="col-md-12 mb-4">
                  <label for="img_slogan" class="form-label">Gambar <span class="text-muted">(Opsional)</span></label>
                  <input type="file" class="form-control @error('img_slogan') is-invalid @enderror" id="img_slogan"
                    name="img_slogan" accept="image/*">
                  @error('img_slogan')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                  <div class="form-text">Format yang didukung: JPG, PNG, GIF. Maksimal 2MB</div>

                  <div id="imageSloganPreview" class="mt-2"
                    style="{{ !empty($data->img_slogan) ? '' : 'display:none;' }}">
                    <img id="previewSloganImg"
                      src="{{ !empty($data->img_slogan) ? asset('img/' . $data->img_slogan) : '' }}" alt="Preview"
                      class="img-thumbnail" style="max-width: 200px; max-height: 200px;">
                  </div>
                </div>

                <div class="col-md-12 mb-3">
                  <label for="deskripsi_slogan" class="form-label">
                    Deskripsi Slogan <span class="text-danger">*</span>
                  </label>
                  <textarea class="form-control @error('deskripsi_slogan') is-invalid @enderror" id="deskripsi_slogan"
                    name="deskripsi_slogan" rows="5" placeholder="Masukkan deskripsi_slogan..." required>{{ old('deskripsi_slogan', $data->deskripsi_slogan ?? '') }}</textarea>
                  @error('deskripsi_slogan')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                  <div class="form-text">
                    Berikan deskripsi slogan yang menarik dan informatif
                  </div>
                </div>

              </div>

            </div>

            <!-- Form Actions -->
            <div class="row">
              <input type="hidden" name="id" value="1">
              <div class="col-12">
                <hr class="my-4">
                <div class="d-flex justify-content-between">
                  <div>
                    <button type="button" class="btn btn-outline-secondary" onclick="resetForm()">
                      <i class="fas fa-undo me-1"></i>
                      Reset Form
                    </button>
                  </div>
                  <div>
                    <button type="button" class="btn btn-secondary me-2" onclick="window.history.back()">
                      <i class="fas fa-arrow-left me-1"></i>
                      Kembali
                    </button>
                    <button type="submit" class="btn btn-primary" id="submitBtn">
                      <i class="fas fa-save me-1"></i>
                      <span id="submitText">Simpan Data</span>
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

    .text-danger {
      font-size: 0.8em;
    }

    .form-control:focus {
      border-color: #4e73df;
      box-shadow: 0 0 0 0.2rem rgba(78, 115, 223, 0.25);
    }

    .btn {
      border-radius: 6px;
      font-weight: 500;
    }

    .invalid-feedback {
      font-size: 0.875em;
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

    #imageSloganPreview {
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
    // Image Preview untuk "img"
    document.getElementById('img').addEventListener('change', function(e) {
      const file = e.target.files[0];
      const previewContainer = document.getElementById('imagePreview');
      const previewImg = document.getElementById('previewImg');

      if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
          previewImg.src = e.target.result;
          previewContainer.style.display = 'block';
        };
        reader.readAsDataURL(file);
      } else {
        previewImg.src = '';
        previewContainer.style.display = 'none';
      }
    });

    // Image Preview untuk "img_slogan"
    document.getElementById('img_slogan').addEventListener('change', function(e) {
      const file = e.target.files[0];
      const previewContainer = document.getElementById('imageSloganPreview');
      const previewImg = document.getElementById('previewSloganImg');

      if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
          previewImg.src = e.target.result;
          previewContainer.style.display = 'block';
        };
        reader.readAsDataURL(file);
      } else {
        previewImg.src = '';
        previewContainer.style.display = 'none';
      }
    });

    // Reset Form Function (tambahkan reset preview)
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

          document.getElementById('imagePreview').style.display = 'none';
          document.getElementById('imageSloganPreview').style.display = 'none';
          document.getElementById('previewImg').src = '';
          document.getElementById('previewSloganImg').src = '';

          form.querySelectorAll('.is-invalid').forEach((el) => {
            el.classList.remove('is-invalid');
          });

          Swal.fire("Form berhasil direset!", "", "success");
        }
      });
    }

    // Form Submission Handler
    document.getElementById('form').addEventListener('submit', function(e) {
      const submitBtn = document.getElementById('submitBtn');
      const submitText = document.getElementById('submitText');

      // Disable button and show loading
      submitBtn.disabled = true;
      submitText.innerHTML =
        '<span class="spinner-border spinner-border-sm me-1" role="status" aria-hidden="true"></span>Menyimpan...';

      // Validate required fields
      let isValid = true;
      const requiredFields = ['judul', 'slogan', 'deskripsi'];

      requiredFields.forEach(function(fieldName) {
        const field = document.getElementById(fieldName);
        if (!field.value.trim()) {
          field.classList.add('is-invalid');
          isValid = false;
        } else {
          field.classList.remove('is-invalid');
        }
      });

      if (!isValid) {
        e.preventDefault();
        submitBtn.disabled = false;
        submitText.innerHTML = '<i class="fas fa-save me-1"></i>Simpan Data';

        // Show error message
        showToast('Mohon lengkapi semua field yang wajib diisi', 'error');
        return false;
      }
    });

    // Toast Notification Function
    function showToast(message, type = 'success') {
      // Create toast element
      const toastHTML = `
        <div class="toast align-items-center text-white bg-${type === 'success' ? 'success' : 'danger'} border-0" role="alert">
            <div class="d-flex">
                <div class="toast-body">
                    <i class="fas fa-${type === 'success' ? 'check-circle' : 'exclamation-triangle'} me-2"></i>
                    ${message}
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
            </div>
        </div>
    `;

      // Add to toast container (you might need to add this to your layout)
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

    // Handle session messages
    @if (session('success'))
      showToast('{{ session('success') }}', 'success');
    @endif

    @if (session('error'))
      showToast('{{ session('error') }}', 'error');
    @endif

    // Character counter for textarea (optional)
    document.getElementById('deskripsi').addEventListener('input', function() {
      const maxLength = 1000;
      const currentLength = this.value.length;
      const remaining = maxLength - currentLength;

      let counterElement = document.getElementById('deskripsi-counter');
      if (!counterElement) {
        counterElement = document.createElement('div');
        counterElement.id = 'deskripsi-counter';
        counterElement.className = 'form-text text-end';
        this.parentNode.appendChild(counterElement);
      }

      counterElement.innerHTML = `${currentLength}/${maxLength} karakter`;

      if (remaining < 50) {
        counterElement.classList.add('text-warning');
      } else {
        counterElement.classList.remove('text-warning');
      }
    });
  </script>
@endpush
