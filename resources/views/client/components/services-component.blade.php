@php
  use App\Helpers\Fungsi;
  use Illuminate\Support\Str;
@endphp

<div class="container-xxl py-5">
  <div class="container">
    <div class="section-title text-center">
      <h1 class="display-5 mb-5">Our Gallery</h1>
    </div>

    <!-- Filter Buttons -->
    <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
      <div class="col-12 text-center">
        <ul class="list-inline mb-5" id="portfolio-flters">
          <li class="mx-2 active" data-filter="*">All</li>
          <li class="mx-2" data-filter=".image">Image</li>
          <li class="mx-2" data-filter=".video">Video</li>
        </ul>
      </div>
    </div>

    <!-- Portfolio Items -->
    <div class="row g-4 portfolio-container">
      @foreach ($dataServices as $item)
        <div class="col-lg-4 col-md-6 portfolio-item {{ $item->media_type }} wow fadeInUp"
          data-wow-delay="{{ 0.2 * $loop->iteration }}s">
          <div class="rounded overflow-hidden">
            <div class="position-relative overflow-hidden">

              {{-- Jika media berupa gambar --}}
              @if ($item->media_type === 'image')
                <img class="img-fluid w-100" src="{{ asset('img/' . ($item->img ?? 'default.png')) }}"
                  alt="{{ $item->judul ?? 'Gallery Image' }}" style="height: 15rem; object-fit: cover;">
              @elseif ($item->media_type === 'video')
                @php
                  // Ambil video ID dari link YouTube
                  $videoId = null;
                  if (
                      Str::contains($item->link_video, 'youtube.com') &&
                      preg_match('/v=([^&]+)/', $item->link_video, $matches)
                  ) {
                      $videoId = $matches[1];
                  } elseif (
                      Str::contains($item->link_video, 'youtu.be') &&
                      preg_match('/youtu\.be\/([^?]+)/', $item->link_video, $matches)
                  ) {
                      $videoId = $matches[1];
                  }
                  $youtubeThumbnail = $videoId
                      ? "https://img.youtube.com/vi/$videoId/hqdefault.jpg"
                      : asset('img/video-thumbnail.png');
                @endphp

                <img class="img-fluid w-100" src="{{ $youtubeThumbnail }}" alt="{{ $item->judul ?? 'Gallery Video' }}"
                  style="height: 15rem; object-fit: cover;">
              @endif

              <!-- Overlay & Actions -->
              <div class="portfolio-overlay d-flex justify-content-center align-items-center">
                @if ($item->media_type === 'image' && $item->img)
                  <a class="btn btn-square btn-outline-light mx-1" href="{{ asset('img/' . $item->img) }}"
                    data-lightbox="portfolio" data-title="{{ $item->judul ?? 'Gambar' }}">
                    <i class="fa fa-eye"></i>
                  </a>
                @elseif ($item->media_type === 'video' && $item->link_video)
                  <a href="javascript:void(0);" class="btn btn-square btn-outline-light mx-1 play-video"
                    data-video="{{ $item->link_video }}">
                    <i class="fa fa-play"></i>
                  </a>
                @endif
              </div>

            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</div>

<!-- Video Modal -->
<div class="modal fade" id="videoModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content bg-dark">
      <div class="modal-header border-0">
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-0">
        <div class="ratio ratio-16x9">
          <iframe id="videoFrame" class="w-100 h-100" src="" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</div>


<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const videoModal = new bootstrap.Modal(document.getElementById('videoModal'));
    const videoFrame = document.getElementById('videoFrame');
    const playButtons = document.querySelectorAll('.play-video');

    playButtons.forEach(btn => {
      btn.addEventListener('click', function() {
        const videoUrl = this.dataset.video;
        let embedUrl = '';

        // Convert YouTube link to embed format
        if (videoUrl.includes('youtube.com/watch?v=')) {
          const videoId = videoUrl.split('v=')[1].split('&')[0];
          embedUrl = `https://www.youtube.com/embed/${videoId}?autoplay=1`;
        } else if (videoUrl.includes('youtu.be/')) {
          const videoId = videoUrl.split('youtu.be/')[1].split('?')[0];
          embedUrl = `https://www.youtube.com/embed/${videoId}?autoplay=1`;
        } else {
          embedUrl = videoUrl; // Fallback (for other embed URLs)
        }

        videoFrame.src = embedUrl;
        videoModal.show();
      });
    });

    // Clear video when modal is closed
    document.getElementById('videoModal').addEventListener('hidden.bs.modal', function() {
      videoFrame.src = '';
    });
  });

  document.addEventListener('DOMContentLoaded', function() {
    var grid = document.querySelector('.portfolio-container');
    var iso = new Isotope(grid, {
      itemSelector: '.portfolio-item',
      layoutMode: 'fitRows'
    });

    // Filter buttons
    var filters = document.querySelectorAll('#portfolio-flters li');
    filters.forEach(function(btn) {
      btn.addEventListener('click', function() {
        filters.forEach(b => b.classList.remove('active'));
        this.classList.add('active');

        var filterValue = this.getAttribute('data-filter');
        iso.arrange({
          filter: filterValue
        });
      });
    });
  });
</script>
