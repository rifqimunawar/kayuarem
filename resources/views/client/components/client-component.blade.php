<!-- Our Clients Section -->
<div class="bg-light py-5 wow fadeInUp" data-wow-delay="0.1s">
  <div class="section-title text-center mb-5">
    <h1 class="display-5 mb-3">{{ __('trans.Our Clients') }}</h1>
  </div>

  <div class="container">
    <div id="client-grid" class="d-grid gap-3" style="grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));">
      @foreach ($dataClient as $item)
        <div
          class="portfolio-item d-flex justify-content-center align-items-center text-center {{ $loop->index >= 6 ? 'd-none extra-client' : '' }}"
          data-wow-delay="{{ 0.1 * $loop->iteration }}s" style="height: 150px;">
          <img class="img-fluid bg-light p-2 mb-3" src="{{ asset('img/' . ($item->img ?? '')) }}"
            alt="Client {{ $loop->iteration }}" style="width: auto; height: 120px;">
        </div>
      @endforeach
    </div>

    @if (count($dataClient) > 6)
      <div class="text-center mt-4">
        <button id="toggle-client-btn" class="btn btn-primary">
          {{ __('trans.Read More') }}
        </button>
      </div>
    @endif
  </div>
</div>

<style>
  .fade-in {
    animation: fadeIn 0.5s ease-in-out;
  }

  @keyframes fadeIn {
    from {
      opacity: 0;
    }

    to {
      opacity: 1;
    }
  }
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
  $(document).ready(function() {
    $('#toggle-client-btn').on('click', function() {
      const $extraClients = $('.extra-client');
      const isHidden = $extraClients.first().hasClass('d-none');

      if (isHidden) {
        $extraClients.removeClass('d-none').addClass('fade-in');
        $(this).text('{{ __('trans.Read Less') }}');
      } else {
        $extraClients.addClass('d-none').removeClass('fade-in');
        $(this).text('{{ __('trans.Read More') }}');
      }
    });
  });
</script>
