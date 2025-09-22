<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
  <a href="{{ route('homepage') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
    <img src="https://technoart.id/assets/img/logo.png" alt="" />
  </a>
  <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <div class="navbar-nav ms-auto p-4 p-lg-0">
      <a href="{{ route('homepage') }}" class="nav-item nav-link {{ request()->routeIs('homepage') ? 'active' : '' }}">
        Home
      </a>

      <a href="{{ route('aboutpage') }}"
        class="nav-item nav-link {{ request()->routeIs('aboutpage') ? 'active' : '' }}">
        About
      </a>

      <a href="{{ route('servicespage') }}"
        class="nav-item nav-link {{ request()->routeIs('servicespage') ? 'active' : '' }}">
        Service
      </a>

      <a href="{{ route('projectpage') }}"
        class="nav-item nav-link {{ request()->routeIs('projectpage') ? 'active' : '' }}">
        Project
      </a>

      <a href="{{ route('productpage') }}"
        class="nav-item nav-link {{ request()->routeIs('productpage') ? 'active' : '' }}">
        Product
      </a>

      <div class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle {{ request()->routeIs('news.*') ? 'active' : '' }}"
          data-bs-toggle="dropdown">News</a>
        <div class="dropdown-menu fade-up m-0">
          <a href="" class="dropdown-item">Category 1</a>
          <a href="" class="dropdown-item">Category 2</a>
          <a href="" class="dropdown-item">Category 3</a>
        </div>
      </div>

      <a href="{{ route('contactpage') }}"
        class="nav-item nav-link {{ request()->routeIs('contactpage') ? 'active' : '' }}">
        Contact
      </a>
    </div>

    <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Get Started<i
        class="fa fa-arrow-right ms-3"></i></a>
  </div>
</nav>
