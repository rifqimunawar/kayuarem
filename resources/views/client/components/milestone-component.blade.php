<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

  <style>
    .milestone-card {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      /* background-color: #d0d0d0; */
      background: linear-gradient(to right, #d0d0d0, rgba(208, 208, 208, 0));
      border-radius: 5px;
      height: 100%;
    }

    .milestone-card:hover {
      transform: translateY(-7px);
      box-shadow: 0 12px 24px rgba(0, 0, 0, 0.12);
    }

    .milestone-card h5 {
      font-size: 1.2rem;
    }

    .milestone-card p {
      margin-bottom: 0;
    }

    .swiper {
      padding-top: 20px;
      padding-bottom: 40px;
    }

    .swiper-slide {
      width: auto;
    }

    .swiper-wrapper {
      align-items: stretch;
    }

    .milestone-swiper {
      -webkit-mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);
      mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);
      -webkit-mask-size: 100% 100%;
      mask-size: 100% 100%;
      -webkit-mask-repeat: no-repeat;
      mask-repeat: no-repeat;
    }
  </style>
</head>

<body>

  <div class="container-xxl py-5">
    <div class="container">
      <div class="section-title text-center">
        <h1 class="display-5 mb-5">{{ __('trans.Activity Milestone') }}</h1>
      </div>


      <!-- Swiper -->
      @php
        $minSlides = 5;
        $originalCount = $dataMilestone->count();
        while ($dataMilestone->count() < $minSlides) {
            $dataMilestone = $dataMilestone->merge($dataMilestone);
        }
        $dataMilestone = $dataMilestone->take(20); // optional
      @endphp

      <div class="swiper milestone-swiper">
        <div class="swiper-wrapper">
          @foreach ($dataMilestone as $item)
            <div class="swiper-slide">
              <div class="card shadow-sm border-0 rounded-4 p-3 milestone-card">
                <div class="card-body text-center">
                  <h5 class="card-title fw-bold text-primary mb-2">{{ $item->title }}</h5>
                  <p class="card-text text-muted small">{{ $item->deskripsi ?? '-' }}</p>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>


    </div>
  </div>

  <!-- JS LIBRARIES -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

  <script>
    const swiper = new Swiper('.milestone-swiper', {
      loop: true,
      slidesPerView: 4,
      spaceBetween: 20,
      speed: 4000, // total transition duration
      autoplay: {
        delay: 0,
        disableOnInteraction: false
      },
      allowTouchMove: true, // disable user dragging
      freeMode: true,
      freeModeMomentum: false,

      // Responsiveness
      breakpoints: {
        1400: {
          slidesPerView: 4
        },
        992: {
          slidesPerView: 3
        },
        768: {
          slidesPerView: 2
        },
        0: {
          slidesPerView: 1
        }
      }
    });
  </script>

</body>

</html>
