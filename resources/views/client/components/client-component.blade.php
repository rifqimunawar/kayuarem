<div class="bg-light py-5 wow fadeInUp" data-wow-delay="0.1s">
  <div class="section-title text-center mb-5">
    <h1 class="display-5 mb-3"> Our Clients </h1>
  </div>
  <div class="container">

    <!-- Sample client items -->
    <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); gap: 15px;">
      @foreach ($dataClient as $item)
        <div class="portfolio-item wow fadeInUp" data-wow-delay="{{ 0.5 * $loop->iteration }}s">
          <img class="img-fluid bg-light p-2 mb-3" src="{{ asset('img/' . ($item->img ?? '')) }}"
            style="width: auto; height: 120px;" alt="Client {{ $loop->iteration }}">
        </div>
      @endforeach
    </div>


  </div>
</div>



<!-- Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
  $(document).ready(function() {
    const $carousel = $(".client-carousel");

    $carousel.owlCarousel({
      autoplay: true,
      autoplayTimeout: 4000,
      autoplayHoverPause: true,
      smartSpeed: 800,
      center: true,
      dots: true,
      loop: true,
      nav: true,
      navText: [
        '<i class="bi bi-chevron-left"></i>',
        '<i class="bi bi-chevron-right"></i>'
      ],
      responsive: {
        0: {
          items: 1,
          stagePadding: 20
        },
        768: {
          items: 3,
          stagePadding: 20
        },
        992: {
          items: 6,
          stagePadding: 20
        }
      },
      onTranslated: function() {
        // Hapus animasi sebelumnya
        $(".testimonial-item").removeClass("animate__animated animate__pulse");

        // Tambahkan animasi hanya ke item tengah
        $(".owl-item.center .testimonial-item").addClass("animate__animated animate__pulse");

        // Hapus animasi setelah selesai (1s = sesuai animate.css default)
        setTimeout(function() {
          $(".testimonial-item").removeClass("animate__animated animate__pulse");
        }, 1000);
      }
    });

    // Hover effect (gunakan transform di CSS jika bisa, tapi tetap aman dengan JS)
    $carousel.on("mouseenter", ".testimonial-item", function() {
      $(this).find("img").css("transform", "scale(1.1)");
    });

    $carousel.on("mouseleave", ".testimonial-item", function() {
      $(this).find("img").css("transform", "scale(1)");
    });
  });
</script>
