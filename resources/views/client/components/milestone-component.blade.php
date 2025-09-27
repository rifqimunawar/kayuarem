<div class="container-xxl py-5">
  <div class="container">
    <div class="section-title text-center">
      <h1 class="display-5 mb-5">{{ __('trans.Activity Milestone') }}</h1>
    </div>
    <div class="row g-4">
      @foreach ($dataMilestone as $item)
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="{{ 0.2 * $loop->iteration }}s">
          <div class="card shadow-sm border-0 h-100 rounded-4 p-3 milestone-card">
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
<style>
  .milestone-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    background-color: #d0d0d0;
    border-radius: 5px
  }

  .milestone-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
  }

  .milestone-card h5 {
    font-size: 1.2rem;
  }

  .milestone-card p {
    margin-bottom: 0;
  }
</style>
