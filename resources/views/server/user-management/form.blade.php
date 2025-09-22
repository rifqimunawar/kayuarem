@extends('server.layouts.app')
@section('content-server')
  <div class="row">
    <div class="col-lg-12">
      <div class="card w-100">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
              <h4 class="card-title mb-2">{{ $title ?? 'User Management' }}</h4>
              <p class="card-subtitle text-muted mb-0">
                {{ $descriptionTitle ?? 'Kelola data user dengan mudah dan efisien' }}
              </p>
            </div>
          </div>

          <!-- Form -->
          <form action="{{ route('store.user-management') }}" method="POST" enctype="multipart/form-data" id="userForm">
            @csrf

            <div class="row">
              <!-- Full Name Field -->
              <div class="col-md-6 mb-3">
                <label for="name" class="form-label">
                  Full Name <span class="text-danger">*</span>
                </label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                  name="name" value="{{ old('name', $data->name ?? '') }}" placeholder="Masukkan nama lengkap..."
                  required>
                <div class="invalid-feedback" id="nameError"></div>
                <div class="valid-feedback" id="nameSuccess">Nama valid!</div>
                @error('name')
                  <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
              </div>

              <!-- Username Field -->
              <div class="col-md-6 mb-3">
                <label for="username" class="form-label">
                  Username <span class="text-danger">*</span>
                </label>
                <input type="text" class="form-control @error('username') is-invalid @enderror" id="username"
                  name="username" value="{{ old('username', $data->username ?? '') }}" placeholder="Masukkan username..."
                  required>
                <div class="invalid-feedback" id="usernameError"></div>
                <div class="valid-feedback" id="usernameSuccess">Username tersedia!</div>
                <small class="form-text text-muted">Username hanya boleh mengandung huruf, angka, dan underscore</small>
                @error('username')
                  <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
              </div>

              <!-- Email Field -->
              <div class="col-md-12 mb-3">
                <label for="email" class="form-label">
                  Email <span class="text-danger">*</span>
                </label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                  name="email" value="{{ old('email', $data->email ?? '') }}" placeholder="Masukkan alamat email..."
                  required>
                <div class="invalid-feedback" id="emailError"></div>
                <div class="valid-feedback" id="emailSuccess">Email valid!</div>
                @error('email')
                  <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
              </div>

              <!-- Password Field -->
              <div class="col-md-6 mb-3">
                <label for="password" class="form-label">
                  Password <span class="text-danger">*</span>
                </label>
                <div class="input-group">
                  <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                    name="password" placeholder="Masukkan password..." {{ empty($data->id) ? 'required' : '' }}>
                  <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                    <i class="fas fa-eye" id="passwordEyeIcon"></i>
                  </button>
                </div>
                <div class="password-strength mt-2" id="passwordStrength"></div>
                <div class="invalid-feedback" id="passwordError"></div>
                <div class="valid-feedback" id="passwordSuccess"></div>
                <small class="form-text text-muted">
                  {{ empty($data->id) ? 'Password minimal 5 karakter' : 'Kosongkan jika tidak ingin mengubah password' }}
                </small>
                @error('password')
                  <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
              </div>

              <!-- Confirm Password Field -->
              <div class="col-md-6 mb-3">
                <label for="password_confirmation" class="form-label">
                  Konfirmasi Password <span class="text-danger" id="confirmRequired">*</span>
                </label>
                <div class="input-group">
                  <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                    placeholder="Konfirmasi password..." {{ empty($data->id) ? 'required' : '' }}>
                  <button class="btn btn-outline-secondary" type="button" id="togglePasswordConfirm">
                    <i class="fas fa-eye" id="passwordConfirmEyeIcon"></i>
                  </button>
                </div>
                <div class="invalid-feedback" id="passwordConfirmError"></div>
                <div class="valid-feedback" id="passwordConfirmSuccess">Password cocok!</div>
              </div>
            </div>

            <!-- Form Actions -->
            <input type="hidden" name="id" value="{{ $data->id ?? '' }}">
            <div class="row">
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
                    <button type="submit" class="btn btn-primary" id="submitBtn" disabled>
                      <i class="fas fa-save me-1"></i>
                      <span id="submitText">{{ !empty($data->id) ? 'Update Data' : 'Simpan Data' }}</span>
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

    .valid-feedback {
      font-size: 0.875em;
    }

    .form-text {
      font-size: 0.8em;
      color: #6c757d;
    }

    .card {
      box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15);
      border: none;
      border-radius: 0.35rem;
    }

    .password-strength {
      height: 4px;
      border-radius: 2px;
      background-color: #e9ecef;
      transition: all 0.3s ease;
    }

    .strength-weak {
      background: linear-gradient(to right, #dc3545 0%, #dc3545 33%, #e9ecef 33%);
    }

    .strength-medium {
      background: linear-gradient(to right, #ffc107 0%, #ffc107 66%, #e9ecef 66%);
    }

    .strength-strong {
      background: linear-gradient(to right, #198754 0%, #198754 100%);
    }

    .is-valid {
      border-color: #198754;
    }

    .is-invalid {
      border-color: #dc3545;
    }

    .btn:disabled {
      opacity: 0.6;
      cursor: not-allowed;
    }

    .input-group .btn {
      border-color: #ced4da;
    }

    .input-group .form-control:focus+.btn {
      border-color: #4e73df;
    }
  </style>
@endpush

@push('scripts')
  <script>
    class UserFormValidator {
      constructor() {
        this.form = document.getElementById('userForm');
        this.isEdit = document.querySelector('input[name="id"]').value !== '';

        this.fields = {
          name: {
            element: document.getElementById('name'),
            isValid: false,
            required: true
          },
          username: {
            element: document.getElementById('username'),
            isValid: false,
            required: true
          },
          email: {
            element: document.getElementById('email'),
            isValid: false,
            required: true
          },
          password: {
            element: document.getElementById('password'),
            isValid: !this.isEdit, // Valid by default in edit mode
            required: !this.isEdit
          },
          password_confirmation: {
            element: document.getElementById('password_confirmation'),
            isValid: !this.isEdit,
            required: false // Will be set dynamically
          },
          img: {
            element: document.getElementById('img'),
            isValid: true, // Optional field
            required: false
          }
        };

        this.init();
      }

      init() {
        // Initialize validation for each field
        Object.keys(this.fields).forEach(fieldName => {
          const field = this.fields[fieldName];
          if (field.element) {
            field.element.addEventListener('input', () => this.validateField(fieldName));
            field.element.addEventListener('blur', () => this.validateField(fieldName));
          }
        });

        // Special handlers
        this.initPasswordToggle();
        this.initImagePreview();
        this.form.addEventListener('submit', (e) => this.handleSubmit(e));

        // Initial validation for edit mode
        if (this.isEdit) {
          this.validateAllFields();
        }
      }

      validateField(fieldName) {
        const field = this.fields[fieldName];
        if (!field || !field.element) return;

        const value = field.element.value.trim();
        let isValid = true;
        let errorMessage = '';
        let successMessage = '';

        // Reset classes
        field.element.classList.remove('is-valid', 'is-invalid');

        switch (fieldName) {
          case 'name':
            if (field.required && value.length === 0) {
              isValid = false;
              errorMessage = 'Nama lengkap harus diisi';
            } else if (value.length < 2) {
              isValid = false;
              errorMessage = 'Nama minimal 2 karakter';
            } else if (value.length > 100) {
              isValid = false;
              errorMessage = 'Nama maksimal 100 karakter';
            } else if (!/^[a-zA-Z\s]+$/.test(value)) {
              isValid = false;
              errorMessage = 'Nama hanya boleh mengandung huruf dan spasi';
            } else {
              successMessage = 'Nama valid!';
            }
            break;

          case 'username':
            if (field.required && value.length === 0) {
              isValid = false;
              errorMessage = 'Username harus diisi';
            } else if (value.length < 3) {
              isValid = false;
              errorMessage = 'Username minimal 3 karakter';
            } else if (value.length > 50) {
              isValid = false;
              errorMessage = 'Username maksimal 50 karakter';
            } else if (!/^[a-zA-Z0-9_]+$/.test(value)) {
              isValid = false;
              errorMessage = 'Username hanya boleh mengandung huruf, angka, dan underscore';
            } else {
              successMessage = 'Username valid!';
            }
            break;

          case 'email':
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (field.required && value.length === 0) {
              isValid = false;
              errorMessage = 'Email harus diisi';
            } else if (!emailRegex.test(value)) {
              isValid = false;
              errorMessage = 'Format email tidak valid';
            } else {
              successMessage = 'Email valid!';
            }
            break;

          case 'password':
            const passwordConfirm = this.fields.password_confirmation.element;

            if (field.required && value.length === 0) {
              isValid = false;
              errorMessage = 'Password harus diisi';
            } else if (value.length > 0 && value.length < 5) {
              isValid = false;
              errorMessage = 'Password minimal 5 karakter';
            } else if (value.length > 255) {
              isValid = false;
              errorMessage = 'Password maksimal 255 karakter';
            } else if (value.length >= 5) {
              successMessage = 'Password strength: ' + this.getPasswordStrength(value);
              this.updatePasswordStrength(value);
            }

            // Update password confirmation requirement
            if (value.length > 0) {
              this.fields.password_confirmation.required = true;
              document.getElementById('confirmRequired').style.display = 'inline';
              passwordConfirm.required = true;
            } else {
              this.fields.password_confirmation.required = false;
              this.fields.password_confirmation.isValid = true;
              document.getElementById('confirmRequired').style.display = this.isEdit ? 'none' : 'inline';
              passwordConfirm.required = !this.isEdit;
            }

            // Revalidate confirmation if it has value
            if (passwordConfirm.value.length > 0) {
              this.validateField('password_confirmation');
            }
            break;

          case 'password_confirmation':
            const passwordValue = this.fields.password.element.value;

            if (field.required && value.length === 0) {
              isValid = false;
              errorMessage = 'Konfirmasi password harus diisi';
            } else if (value !== passwordValue) {
              isValid = false;
              errorMessage = 'Konfirmasi password tidak cocok';
            } else if (value.length > 0 && value === passwordValue) {
              successMessage = 'Password cocok!';
            }
            break;

          case 'img':
            if (field.element.files.length > 0) {
              const file = field.element.files[0];
              const allowedTypes = ['image/jpeg', 'image/jpg', 'image/png'];
              const maxSize = 2 * 1024 * 1024; // 2MB

              if (!allowedTypes.includes(file.type)) {
                isValid = false;
                errorMessage = 'Hanya file JPG, JPEG, PNG yang diperbolehkan';
              } else if (file.size > maxSize) {
                isValid = false;
                errorMessage = 'Ukuran file maksimal 2MB';
              } else {
                successMessage = 'File valid!';
              }
            }
            break;
        }

        // Apply validation result
        field.isValid = isValid || (!field.required && value.length === 0);

        if (value.length > 0 || field.required) {
          if (isValid) {
            field.element.classList.add('is-valid');
            this.showFieldMessage(fieldName, successMessage, 'valid');
          } else {
            field.element.classList.add('is-invalid');
            this.showFieldMessage(fieldName, errorMessage, 'invalid');
          }
        } else {
          this.showFieldMessage(fieldName, '', 'none');
        }

        this.updateSubmitButton();
      }

      validateAllFields() {
        Object.keys(this.fields).forEach(fieldName => {
          this.validateField(fieldName);
        });
      }

      showFieldMessage(fieldName, message, type) {
        const errorElement = document.getElementById(fieldName + 'Error');
        const successElement = document.getElementById(fieldName + 'Success');

        if (errorElement) errorElement.textContent = type === 'invalid' ? message : '';
        if (successElement) successElement.textContent = type === 'valid' ? message : '';
      }

      updatePasswordStrength(password) {
        const strengthElement = document.getElementById('passwordStrength');
        if (!strengthElement) return;

        const strength = this.calculatePasswordStrength(password);
        strengthElement.className = 'password-strength';

        if (password.length === 0) {
          // No styling for empty password
        } else if (strength < 3) {
          strengthElement.classList.add('strength-weak');
        } else if (strength < 5) {
          strengthElement.classList.add('strength-medium');
        } else {
          strengthElement.classList.add('strength-strong');
        }
      }

      calculatePasswordStrength(password) {
        let strength = 0;

        if (password.length >= 5) strength++;
        if (password.length >= 8) strength++;
        if (/[a-z]/.test(password)) strength++;
        if (/[A-Z]/.test(password)) strength++;
        if (/[0-9]/.test(password)) strength++;
        if (/[^A-Za-z0-9]/.test(password)) strength++;

        return strength;
      }

      getPasswordStrength(password) {
        const strength = this.calculatePasswordStrength(password);

        if (strength < 3) return 'Lemah';
        if (strength < 5) return 'Sedang';
        return 'Kuat';
      }

      updateSubmitButton() {
        const submitBtn = document.getElementById('submitBtn');
        const allValid = Object.values(this.fields).every(field => field.isValid);

        submitBtn.disabled = !allValid;
      }

      initPasswordToggle() {
        // Password toggle
        document.getElementById('togglePassword').addEventListener('click', () => {
          const password = document.getElementById('password');
          const icon = document.getElementById('passwordEyeIcon');

          if (password.type === 'password') {
            password.type = 'text';
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
          } else {
            password.type = 'password';
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
          }
        });

        // Password confirmation toggle
        document.getElementById('togglePasswordConfirm').addEventListener('click', () => {
          const password = document.getElementById('password_confirmation');
          const icon = document.getElementById('passwordConfirmEyeIcon');

          if (password.type === 'password') {
            password.type = 'text';
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
          } else {
            password.type = 'password';
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
          }
        });
      }

      initImagePreview() {
        const imgInput = document.getElementById('img');
        const preview = document.getElementById('imagePreview');
        const previewImg = document.getElementById('previewImg');

        imgInput.addEventListener('change', (e) => {
          const file = e.target.files[0];

          if (file) {
            const reader = new FileReader();
            reader.onload = (e) => {
              previewImg.src = e.target.result;
              preview.style.display = 'block';
            };
            reader.readAsDataURL(file);
          } else {
            preview.style.display = 'none';
          }

          // Validate file
          this.validateField('img');
        });
      }

      handleSubmit(e) {
        e.preventDefault();

        // Validate all fields before submit
        this.validateAllFields();

        const allValid = Object.values(this.fields).every(field => field.isValid);

        if (!allValid) {
          showToast('Mohon lengkapi semua field dengan benar', 'error');
          return;
        }

        // Show loading state
        const submitBtn = document.getElementById('submitBtn');
        const submitText = document.getElementById('submitText');
        const originalText = submitText.textContent;

        submitBtn.disabled = true;
        submitText.innerHTML = '<i class="bi bi-arrow-repeat spinner-border spinner-border-sm me-2"></i>Loading...';



        // Submit form
        this.form.submit();
      }
    }

    // Initialize validator
    document.addEventListener('DOMContentLoaded', () => {
      new UserFormValidator();
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
          document.getElementById('userForm').reset();

          // Reset validation states
          document.querySelectorAll('.is-invalid, .is-valid').forEach((el) => {
            el.classList.remove('is-invalid', 'is-valid');
          });

          // Hide image preview
          document.getElementById('imagePreview').style.display = 'none';

          // Reset password strength
          document.getElementById('passwordStrength').className = 'password-strength';

          // Clear all feedback messages
          document.querySelectorAll('.invalid-feedback, .valid-feedback').forEach((el) => {
            if (!el.classList.contains('d-block')) { // Don't clear Laravel error messages
              el.textContent = '';
            }
          });

          Swal.fire("Form berhasil direset!", "", "success");

          // Re-initialize validator
          setTimeout(() => {
            new UserFormValidator();
          }, 100);
        }
      });
    }

    // Toast Notification Function
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
        </div>
      `;

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
  </script>
@endpush
