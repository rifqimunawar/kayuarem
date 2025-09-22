@extends('server.layouts.app')
@php
  use App\Helpers\Fungsi;
@endphp
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

          <div class="row">
            <!-- Kolom kiri -->
            <div class="col-md-6">
              <table class="table table-borderless mb-0">
                <tr>
                  <th style="width: 100px;">Nama</th>
                  <td>: {{ $data->nama ?? '-' }}</td>
                </tr>
                <tr>
                  <th>Email</th>
                  <td>: {{ $data->profesi ?? '-' }}</td>
                </tr>
                <tr>
                  <th>Date</th>
                  <td>: {{ Fungsi::format_tgl_jam($data->created_at) }}</td>
                </tr>
                <tr>
                  <th>Note</th>
                  <td>: {{ $data->deskripsi ?? '-' }}</td>
                </tr>
              </table>
            </div>

            <!-- Kolom kanan -->
            <div class="col-md-6">
              <img src="{{ asset('img/' . $data->img) }}" alt="Gambar" class="img-fluid rounded shadow-sm">
            </div>
          </div>


          <div>
            <button type="button" class="btn btn-secondary me-2" onclick="window.history.back()">
              <i class="fas fa-arrow-left me-1"></i>
              Kembali
            </button>
          </div>

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

    .card {
      box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15);
      border: none;
      border-radius: 0.35rem;
    }
  </style>
@endpush

@push('scripts')
  <script>
    // Image Preview Function
    document.getElementById('img').addEventListener('change', function(e) {
      const file = e.target.files[0];
      const preview = document.getElementById('imagePreview');
      const previewImg = document.getElementById('previewImg');

      if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
          previewImg.src = e.target.result;
          preview.style.display = 'block';
        };
        reader.readAsDataURL(file);
      } else {
        preview.style.display = 'none';
      }
    });

    // Reset Form Function
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
          document.querySelector('form').reset();
          const preview = document.getElementById('imagePreview');
          if (preview) preview.style.display = 'none';
          document.querySelectorAll('.is-invalid').forEach((el) => {
            el.classList.remove('is-invalid');
          });

          Swal.fire("Form berhasil direset!", "", "success");
        }
      });
    }

    // Form Submission Handler
    document.querySelector('form').addEventListener('submit', function(e) {
      const submitBtn = document.getElementById('submitBtn');
      const submitText = document.getElementById('submitText');

      // Disable button and show loading
      submitBtn.disabled = true;
      submitText.innerHTML = '<i class="fas fa-spinner fa-spin me-1"></i>Menyimpan...';

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
