<div class="bg-light py-5 wow fadeInUp" data-wow-delay="0.1s">
  <div class="container">
    <div class="section-title text-center">
      <h1 class="display-5 mb-5">{{ __('trans.Testimonial') }}</h1>
    </div>
    <div class="owl-carousel testimonial-carousel">

      @foreach ($dataTestimonial as $item)
        <div class="testimonial-item text-center ">
          <img class="img-fluid bg-light p-2 mx-auto mb-3" src="{{ asset('img/' . $item->img ?? '') }}"
            style="width: 120px; height: 120px; object-fit:cover; border-radius:50%;">
          <div class="testimonial-text text-center p-4">
            <p>{{ $item->deskripsi ?? '' }}</p>
            <h5 class="mb-1">{{ $item->nama ?? '' }}</h5>
            <span class="fst-italic">{{ $item->profesi ?? '' }}</span>
          </div>
        </div>
      @endforeach

    </div>
  </div>
</div>
