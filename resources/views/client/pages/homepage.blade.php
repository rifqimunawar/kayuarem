@extends('client.layouts.app')
@section('content-client')
  <!-- Carousel Start -->
  <div class="container-fluid p-0 pb-5">
    <div class="owl-carousel header-carousel position-relative">

      @foreach ($dataHome as $item)
        <div class="owl-carousel-item position-relative">
          <img class="img-fluid" src="{{ asset('img/' . $item->img ?? '') }}" alt=""
            style="object-fit: cover; height: 500px;">
          <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
            style="background: rgba(53, 53, 53, .7);">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-12 col-lg-8 text-center">
                  <h5 class="text-white text-uppercase mb-3 animated slideInDown">{{ $item->slogan }}</h5>
                  <h1 class="display-3 text-white animated slideInDown mb-4" style="font-size: 35px">{{ $item->judul }}
                  </h1>
                  <p class="fs-5 fw-medium text-white mb-4 pb-2">{{ $item->deskripsi }}</p>
                  <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                  <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Free Quote</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      @endforeach

    </div>
  </div>
  <!-- Carousel End -->


  <!-- Feature Start -->
  @include('client.components.future-component')
  <!-- Feature Start -->



  <!-- About Start -->
  @include('client.components.about-component')
  <!-- About End -->


  <!-- Service Start -->
  @include('client.components.services-component')
  <!-- Service End -->


  <!-- Feature Start -->
  @include('client.components.future-component')
  <!-- Feature End -->


  <!-- Projects Start -->
  @include('client.components.project-component')
  <!-- Projects End -->


  <!-- Quote Start -->
  @include('client.components.quote-component')
  <!-- Quote End -->


  <!-- Team Start -->
  @include('client.components.team-component')
  <!-- Team End -->


  <!-- Testimonial Start -->
  @include('client.components.testimonial-component')
  <!-- Testimonial End -->
@endsection
