@php
  use App\Helpers\Fungsi;
  use App\Helpers\GetData;
@endphp
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
  <a href="{{ route('homepage') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
    <img src="{{ GetData::getLogo() }}" alt="" style="width: auto; height: 4rem; object-fit: cover;" />
  </a>
  <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <div class="navbar-nav ms-auto p-4 p-lg-0">
      <a href="{{ route('homepage') }}" class="nav-item nav-link {{ request()->routeIs('homepage') ? 'active' : '' }}">
        {{ __('trans.Home') }}
      </a>

      <a href="{{ route('aboutpage') }}"
        class="nav-item nav-link {{ request()->routeIs('aboutpage') ? 'active' : '' }}">
        {{ __('trans.About') }}
      </a>

      <a href="{{ route('servicespage') }}"
        class="nav-item nav-link {{ request()->routeIs('servicespage') ? 'active' : '' }}">
        {{ __('trans.Gallery') }}
      </a>

      <a href="{{ route('projectpage') }}"
        class="nav-item nav-link {{ request()->routeIs('projectpage') ? 'active' : '' }}">
        {{ __('trans.Project') }}
      </a>

      <div class="nav-item dropdown">
        <a href="{{ route('productpage') }}"
          class="nav-link dropdown-toggle
            {{ request()->is('product') || request()->is('product/category/*') || request()->is('product/*') ? 'active' : '' }}"
          data-bs-toggle="dropdown">
          {{ __('trans.Product') }}
        </a>

        <div class="dropdown-menu fade-up m-0">
          <a href="{{ route('productpage') }}" class="dropdown-item {{ request()->is('product') ? 'active' : '' }}">
            {{ __('trans.All') }}
          </a>
          @foreach ($dataCatProduct as $item)
            <a href="{{ route('productByCategory', $item->id) }}"
              class="dropdown-item {{ request()->is('product/category/' . $item->id) ? 'active' : '' }}">
              {{ $item->categori }}
            </a>
          @endforeach
        </div>
      </div>
      <div class="nav-item dropdown">
        <a href="{{ route('newspage') }}"
          class="nav-link dropdown-toggle
           {{ request()->is('news') || request()->is('news/category/*') || request()->is('news/*') ? 'active' : '' }}"
          data-bs-toggle="dropdown">
          {{ __('trans.Article') }}
        </a>
        <div class="dropdown-menu fade-up m-0">
          <a href="{{ route('newspage') }}" class="dropdown-item {{ request()->is('news') ? 'active' : '' }}">
            {{ __('trans.All') }}
          </a>
          @foreach ($dataCatNews as $item)
            <a href="{{ route('newsByCategory', $item->id) }}"
              class="dropdown-item {{ request()->is('news/category/' . $item->id) ? 'active' : '' }}">
              {{ $item->categori }}
            </a>
          @endforeach
        </div>
      </div>

      <div class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
          🌐 {{ strtoupper(app()->getLocale()) }}
        </a>
        <div class="dropdown-menu fade-up m-0">
          <a class="dropdown-item {{ app()->getLocale() == 'en' ? 'active' : '' }}"
            href="{{ request()->fullUrlWithQuery(['lang' => 'en']) }}">🇺🇸 English</a>
          <a class="dropdown-item {{ app()->getLocale() == 'id' ? 'active' : '' }}"
            href="{{ request()->fullUrlWithQuery(['lang' => 'id']) }}">🇮🇩 Indonesia</a>
        </div>
      </div>

      <a href="{{ route('contactpage') }}"
        class="nav-item nav-link {{ request()->routeIs('contactpage') ? 'active' : '' }}">
        {{ __('trans.Contact') }}
      </a>
    </div>

    {{-- <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Get Started<i
        class="fa fa-arrow-right ms-3"></i></a> --}}
  </div>
</nav>
