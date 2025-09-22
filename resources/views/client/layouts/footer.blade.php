@php
  use App\Helpers\Fungsi;
  use App\Helpers\GetData;
@endphp
<div class="container-fluid bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
  <div class="container py-5">
    <div class="row g-5">
      <div class="col-lg-4 col-md-6">
        <h4 class="text-light mb-4">Address</h4>
        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>{{ GetData::getAlamat() }}</p>
        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>{{ GetData::getTelp() }}</p>
        <p class="mb-2"><i class="fa fa-envelope me-3"></i>{{ GetData::getEmail() }}</p>
        <div class="d-flex pt-2">
          <a class="btn btn-outline-light btn-social" href="{{ GetData::getSosmed() }}"><i
              class="fab fa-twitter"></i></a>
          <a class="btn btn-outline-light btn-social" href="{{ GetData::getSosmed() }}"><i
              class="fab fa-facebook-f"></i></a>
          <a class="btn btn-outline-light btn-social" href="{{ GetData::getSosmed() }}"><i
              class="fab fa-youtube"></i></a>
          <a class="btn btn-outline-light btn-social" href="{{ GetData::getSosmed() }}"><i
              class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <h4 class="text-light mb-4">Catgory News</h4>
        @foreach ($dataCatNews as $item)
          <a class="btn btn-link" href="{{ route('newsByCategory', $item->id) }}">{{ $item->categori }}</a>
        @endforeach
      </div>
      <div class="col-lg-4 col-md-6">
        <h4 class="text-light mb-4">Quick Links</h4>
        <a class="btn btn-link" href="{{ route('aboutpage') }}">About Us</a>
        <a class="btn btn-link" href="{{ route('servicespage') }}">Our Services</a>
        <a class="btn btn-link" href="{{ route('contactpage') }}">Contact Us</a>
        <a class="btn btn-link" href="{{ route('productpage') }}">Our Product</a>
        <a class="btn btn-link" href="{{ route('projectpage') }}">Our Projects</a>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="copyright">
      <div class="row">
        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
          &copy; <a class="border-bottom" href="#">{{ GetData::getNamaWeb() }}</a>, All Right Reserved.
        </div>
        <div class="col-md-6 text-center text-md-end">
          <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
          Designed By <a class="border-bottom" href="https://technoart.id">Technoart.Id</a>
        </div>
      </div>
    </div>
  </div>
</div>
