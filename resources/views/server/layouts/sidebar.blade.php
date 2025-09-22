@php
  use App\Helpers\Fungsi;
  use App\Helpers\GetData;
@endphp

<aside class="left-sidebar">
  <!-- Sidebar scroll-->
  <div>
    <div class="brand-logo d-flex align-items-center justify-content-center">
      <a href="{{ route('homepage') }}" class="text-nowrap logo-img">
        <img src="{{ GetData::getLogo() }}" alt="" style="width: 10rem; height: auto; object-fit: cover;" />
      </a>
      <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
        <i class="ti ti-x fs-6"></i>
      </div>
    </div>
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
      <ul id="sidebarnav">
        <li class="nav-small-cap">
          <iconify-icon icon="solar:menu-dots-linear" class="nav-small-cap-icon fs-4"></iconify-icon>
          <span class="hide-menu">Home</span>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{ route('dashboard') }}" aria-expanded="false">
            <i class="ti ti-atom"></i>
            <span class="hide-menu">Dashboard</span>
          </a>
        </li>
        <!-- ---------------------------------- -->
        <!-- Dashboard -->
        <!-- ---------------------------------- -->
        <li class="sidebar-item">
          <a class="sidebar-link justify-content-between" href="{{ route('edit.site') }}" aria-expanded="false">
            <div class="d-flex align-items-center gap-3">
              <span class="d-flex">
                <i class="ti ti-atom"></i>
              </span>
              <span class="hide-menu">Site Settings</span>
            </div>

          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link justify-content-between" href="{{ route('index.user-management') }}"
            aria-expanded="false">
            <div class="d-flex align-items-center gap-3">
              <span class="d-flex">
                <i class="ti ti-atom"></i>
              </span>
              <span class="hide-menu">User Management</span>
            </div>
          </a>
        </li>
        <li class="sidebar-item">
          <form id="logoutForm" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>

          <a class="sidebar-link justify-content-between" href="#"
            onclick="event.preventDefault(); document.getElementById('logoutForm').submit();" aria-expanded="false">
            <div class="d-flex align-items-center gap-3">
              <span class="d-flex">
                <i class="ti ti-atom"></i>
              </span>
              <span class="hide-menu">Logout</span>
            </div>
          </a>
        </li>


        <li>
          <span class="sidebar-divider lg"></span>
        </li>
        <li class="nav-small-cap">
          <iconify-icon icon="solar:menu-dots-linear" class="nav-small-cap-icon fs-4"></iconify-icon>
          <span class="hide-menu">SETTINGS</span>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link justify-content-between" href="{{ route('index.home') }}" aria-expanded="false">
            <div class="d-flex align-items-center gap-3">
              <span class="d-flex">
                <i class="ti ti-file"></i>
              </span>
              <span class="hide-menu">Home</span>
            </div>

          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link justify-content-between" href="{{ route('edit.about') }}" aria-expanded="false">
            <div class="d-flex align-items-center gap-3">
              <span class="d-flex">
                <i class="ti ti-file"></i>
              </span>
              <span class="hide-menu">About</span>
            </div>

          </a>
        </li>
        {{-- <li class="sidebar-item">
          <a class="sidebar-link" href="#" aria-expanded="false">
            <i class="ti ti-archive"></i>
            <span class="hide-menu">Future</span>
          </a>
        </li> --}}
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{ route('index.quote') }}" aria-expanded="false">
            <i class="ti ti-file"></i>
            <span class="hide-menu">Quote</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{ route('index.services') }}" aria-expanded="false">
            <i class="ti ti-file"></i>
            <span class="hide-menu">Service</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{ route('index.team') }}" aria-expanded="false">
            <i class="ti ti-file"></i>
            <span class="hide-menu">Team</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{ route('index.testimonial') }}" aria-expanded="false">
            <i class="ti ti-file"></i>
            <span class="hide-menu">Testimonial</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{ route('index.contact') }}" aria-expanded="false">
            <i class="ti ti-file"></i>
            <span class="hide-menu">Contact</span>
          </a>
        </li>

        <li class="sidebar-item">
          <a class="sidebar-link justify-content-between has-arrow" href="javascript:void(0)" aria-expanded="false">
            <div class="d-flex align-items-center gap-3">
              <span class="d-flex">
                <i class="ti ti-layout-grid"></i>
              </span>
              <span class="hide-menu">Projects</span>
            </div>

          </a>
          <ul aria-expanded="false" class="collapse first-level">
            <li class="sidebar-item">
              <a class="sidebar-link justify-content-between" href="{{ route('index.categoriProject') }}">
                <div class="d-flex align-items-center gap-3">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Project Category</span>
                </div>

              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link justify-content-between" href="{{ route('create.project') }}">
                <div class="d-flex align-items-center gap-3">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">New Project</span>
                </div>

              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link justify-content-between" href="{{ route('index.project') }}">
                <div class="d-flex align-items-center gap-3">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">List Project</span>
                </div>
              </a>
            </li>
          </ul>
        </li>


        <li class="sidebar-item">
          <a class="sidebar-link justify-content-between has-arrow" href="javascript:void(0)" aria-expanded="false">
            <div class="d-flex align-items-center gap-3">
              <span class="d-flex">
                <i class="ti ti-layout-grid"></i>
              </span>
              <span class="hide-menu">Products</span>
            </div>

          </a>
          <ul aria-expanded="false" class="collapse first-level">
            <li class="sidebar-item">
              <a class="sidebar-link justify-content-between" href="{{ route('index.categoriProduct') }}">
                <div class="d-flex align-items-center gap-3">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Product Category</span>
                </div>

              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link justify-content-between" href="{{ route('create.product') }}">
                <div class="d-flex align-items-center gap-3">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">New Product</span>
                </div>

              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link justify-content-between" href="{{ route('index.product') }}">
                <div class="d-flex align-items-center gap-3">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">List Product</span>
                </div>
              </a>
            </li>
          </ul>
        </li>

        <li class="sidebar-item">
          <a class="sidebar-link justify-content-between has-arrow" href="javascript:void(0)" aria-expanded="false">
            <div class="d-flex align-items-center gap-3">
              <span class="d-flex">
                <i class="ti ti-layout-grid"></i>
              </span>
              <span class="hide-menu">News</span>
            </div>

          </a>
          <ul aria-expanded="false" class="collapse first-level">
            <li class="sidebar-item">
              <a class="sidebar-link justify-content-between" href="{{ route('index.categoriNews') }}">
                <div class="d-flex align-items-center gap-3">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">News Category</span>
                </div>

              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link justify-content-between" href="{{ route('create.news') }}">
                <div class="d-flex align-items-center gap-3">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">New News</span>
                </div>

              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link justify-content-between" href="{{ route('index.news') }}">
                <div class="d-flex align-items-center gap-3">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">List News</span>
                </div>

              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- End Sidebar navigation -->
  </div>
  <!-- End Sidebar scroll-->
</aside>
