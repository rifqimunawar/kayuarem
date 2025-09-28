@extends('client.layouts.app')
@section('content-client')
  <!-- Carousel Start -->

  @include('client.components.hero-component')
  @include('client.components.about-component')
  @include('client.components.services-component')
  @include('client.components.client-component')
  @include('client.components.news-component')
  @include('client.components.testimonial-component')
  <input type="hidden" name="redirect_to" value="{{ url()->full() }}">
@endsection
