<!doctype html>
<html lang="en">

<head>
  @php
    use App\Helpers\Fungsi;
    use App\Helpers\GetData;
  @endphp
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Page</title>
  <link rel="shortcut icon" type="image/png" href="/favicon.png" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <style>
    .is-valid {
      border-color: #198754 !important;
    }

    .is-invalid {
      border-color: #dc3545 !important;
    }

    .valid-feedback {
      color: #198754;
      font-size: 0.875em;
      margin-top: 0.25rem;
    }

    .invalid-feedback {
      color: #dc3545;
      font-size: 0.875em;
      margin-top: 0.25rem;
    }

    .password-strength {
      height: 4px;
      border-radius: 2px;
      margin-top: 5px;
      transition: all 0.3s ease;
    }

    .strength-weak {
      background-color: #dc3545;
      width: 33%;
    }

    .strength-medium {
      background-color: #ffc107;
      width: 66%;
    }

    .strength-strong {
      background-color: #198754;
      width: 100%;
    }

    .btn-primary:disabled {
      opacity: 0.6;
      cursor: not-allowed;
    }

    .form-control:focus {
      box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
    }

    .alert {
      border-radius: 8px;
    }

    .card {
      border-radius: 15px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    .btn-primary {
      background: linear-gradient(135deg, #e59f26 0%, #df9e13 100%);
      border: none;
      border-radius: 0px;
      transition: all 0.3s ease;
    }

    .btn-primary:hover {
      transform: translateY(-10px);
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
    }
  </style>
</head>

<body class="bg-light">
  <div class="container min-vh-100 d-flex align-items-center justify-content-center">
    <div class="row justify-content-center w-100">
      <div class="col-md-8 col-lg-8 col-xl-6">
        <div class="card border-0">
          <div class="card-body p-4">
            <!-- Logo -->
            <div class="text-center mb-4">
              <img src="{{ GetData::getLogo() }}" alt="Logo" style="width: auto; height: 60px; object-fit: cover;">
              <h4 class="mt-3 mb-1">Welcome Back!</h4>
              <p class="text-muted">Login to your account</p>
            </div>

            <!-- Alert untuk error message -->
            <div id="alertContainer"></div>

            <!-- Form Login -->
            <form id="loginForm" method="POST" action="/api/login">
              @csrf
              <!-- Username Field -->
              <div class="mb-3">
                <label for="username" class="form-label">
                  <i class="fas fa-user me-2"></i>Username
                </label>
                <input type="text" class="form-control" id="username" name="username"
                  placeholder="Enter your username" autocomplete="username">
                <div class="invalid-feedback" id="usernameError"></div>
                <div class="valid-feedback" id="usernameSuccess">Username looks good!</div>
              </div>

              <!-- Password Field -->
              <div class="mb-3">
                <label for="password" class="form-label">
                  <i class="fas fa-lock me-2"></i>Password
                </label>
                <div class="position-relative">
                  <input type="password" class="form-control" id="password" name="password"
                    placeholder="Enter your password" autocomplete="current-password">
                  <button type="button" class="btn btn-link position-absolute end-0 top-50 translate-middle-y me-2"
                    id="togglePassword" style="border: none; background: none; color: #6c757d;">
                    <i class="fas fa-eye" id="eyeIcon" style="margin-right: 15px"></i>
                  </button>
                </div>
                <div class="password-strength" id="passwordStrength"></div>
                <div class="invalid-feedback" id="passwordError"></div>
                <div class="valid-feedback" id="passwordSuccess"></div>
                <small class="text-muted">Password must be at least 5 characters long</small>
              </div>

              <!-- Remember Me -->
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="rememberMe" name="remember">
                <label class="form-check-label" for="rememberMe">
                  Remember me
                </label>
              </div>

              <!-- Login Button -->
              <button type="submit" class="btn btn-primary w-100 py-2 mb-3" id="loginBtn" disabled>
                <i class="fas fa-sign-in-alt me-2"></i>
                <span id="loginBtnText">Sign In</span>
              </button>

              <!-- Forgot Password Link -->
              <div class="text-center">
                {{-- <a href="#" class="text-decoration-none">Forgot your password?</a> --}}
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('sweetalert::alert')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    class LoginValidator {
      constructor() {
        this.usernameField = document.getElementById('username');
        this.passwordField = document.getElementById('password');
        this.loginBtn = document.getElementById('loginBtn');
        this.loginForm = document.getElementById('loginForm');
        this.togglePassword = document.getElementById('togglePassword');
        this.eyeIcon = document.getElementById('eyeIcon');

        this.isUsernameValid = false;
        this.isPasswordValid = false;

        this.init();
      }

      init() {
        // Event listeners untuk validasi realtime
        this.usernameField.addEventListener('input', () => this.validateUsername());
        this.usernameField.addEventListener('blur', () => this.validateUsername());

        this.passwordField.addEventListener('input', () => this.validatePassword());
        this.passwordField.addEventListener('blur', () => this.validatePassword());

        // Toggle password visibility
        this.togglePassword.addEventListener('click', () => this.togglePasswordVisibility());

        // Form submission
        this.loginForm.addEventListener('submit', (e) => this.handleSubmit(e));
      }

      validateUsername() {
        const username = this.usernameField.value.trim();
        const usernameError = document.getElementById('usernameError');
        const usernameSuccess = document.getElementById('usernameSuccess');

        // Reset classes
        this.usernameField.classList.remove('is-valid', 'is-invalid');

        if (username.length === 0) {
          this.isUsernameValid = false;
        } else if (username.length < 3) {
          this.usernameField.classList.add('is-invalid');
          usernameError.textContent = 'Username must be at least 3 characters long';
          this.isUsernameValid = false;
        } else if (!/^[a-zA-Z0-9_]+$/.test(username)) {
          this.usernameField.classList.add('is-invalid');
          usernameError.textContent = 'Username can only contain letters, numbers, and underscores';
          this.isUsernameValid = false;
        } else {
          this.usernameField.classList.add('is-valid');
          this.isUsernameValid = true;
        }

        this.updateSubmitButton();
      }

      validatePassword() {
        const password = this.passwordField.value;
        const passwordError = document.getElementById('passwordError');
        const passwordSuccess = document.getElementById('passwordSuccess');
        const strengthIndicator = document.getElementById('passwordStrength');

        // Reset classes
        this.passwordField.classList.remove('is-valid', 'is-invalid');
        strengthIndicator.className = 'password-strength';

        if (password.length === 0) {
          this.isPasswordValid = false;
        } else if (password.length < 5) {
          this.passwordField.classList.add('is-invalid');
          passwordError.textContent = 'Password must be at least 5 characters long';
          strengthIndicator.classList.add('strength-weak');
          this.isPasswordValid = false;
        } else {
          this.passwordField.classList.add('is-valid');
          passwordSuccess.textContent = 'Password strength: ' + this.getPasswordStrength(password);

          // Update strength indicator
          const strength = this.calculatePasswordStrength(password);
          if (strength < 3) {
            strengthIndicator.classList.add('strength-weak');
          } else if (strength < 5) {
            strengthIndicator.classList.add('strength-medium');
          } else {
            strengthIndicator.classList.add('strength-strong');
          }

          this.isPasswordValid = true;
        }

        this.updateSubmitButton();
      }

      calculatePasswordStrength(password) {
        let strength = 0;

        // Length
        if (password.length >= 5) strength++;
        if (password.length >= 8) strength++;

        // Character types
        if (/[a-z]/.test(password)) strength++;
        if (/[A-Z]/.test(password)) strength++;
        if (/[0-9]/.test(password)) strength++;
        if (/[^A-Za-z0-9]/.test(password)) strength++;

        return strength;
      }

      getPasswordStrength(password) {
        const strength = this.calculatePasswordStrength(password);

        if (strength < 3) return 'Weak';
        if (strength < 5) return 'Medium';
        return 'Strong';
      }

      togglePasswordVisibility() {
        const type = this.passwordField.getAttribute('type');

        if (type === 'password') {
          this.passwordField.setAttribute('type', 'text');
          this.eyeIcon.classList.remove('fa-eye');
          this.eyeIcon.classList.add('fa-eye-slash');
        } else {
          this.passwordField.setAttribute('type', 'password');
          this.eyeIcon.classList.remove('fa-eye-slash');
          this.eyeIcon.classList.add('fa-eye');
        }
      }

      updateSubmitButton() {
        this.loginBtn.disabled = !(this.isUsernameValid && this.isPasswordValid);
      }

      showAlert(message, type = 'danger') {
        const alertContainer = document.getElementById('alertContainer');
        const alertHtml = `
          <div class="alert alert-${type} alert-dismissible fade show" role="alert">
            <i class="fas fa-exclamation-triangle me-2"></i>
            ${message}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          </div>
        `;
        alertContainer.innerHTML = alertHtml;

        // Auto hide after 5 seconds
        setTimeout(() => {
          const alert = alertContainer.querySelector('.alert');
          if (alert) {
            const bsAlert = new bootstrap.Alert(alert);
            bsAlert.close();
          }
        }, 5000);
      }

      async handleSubmit(e) {
        e.preventDefault();

        if (!this.isUsernameValid || !this.isPasswordValid) {
          this.showAlert('Please fill in all fields correctly');
          return;
        }

        const loginBtnText = document.getElementById('loginBtnText');
        const originalText = loginBtnText.textContent;

        // Show loading state
        this.loginBtn.disabled = true;
        loginBtnText.innerHTML =
        '<i class="bi bi-arrow-repeat spinner-border spinner-border-sm me-2"></i>Signing In...';

        try {
          const formData = new FormData(this.loginForm);
          const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
          // Simulate API call (replace with actual endpoint)
          const response = await fetch('/api/login', {
            method: 'POST',
            body: formData,
            headers: {
              'X-CSRF-TOKEN': csrfToken || ''
            }
          });

          const result = await response.json();

          if (response.ok && result.success) {
            this.showAlert('Login successful! Redirecting...', 'success');

            // Redirect after successful login
            setTimeout(() => {
              window.location.href = result.redirect || '/dashboard';
            }, 1500);
          } else {
            this.showAlert(result.message || 'Invalid username or password');
          }
        } catch (error) {
          console.error('Login error:', error);
          this.showAlert('An error occurred. Please try again.');
        } finally {
          // Reset button state
          this.loginBtn.disabled = false;
          loginBtnText.textContent = originalText;
        }
      }


    }

    // Initialize the validator when DOM is loaded
    document.addEventListener('DOMContentLoaded', () => {
      new LoginValidator();
    });
  </script>
</body>

</html>
