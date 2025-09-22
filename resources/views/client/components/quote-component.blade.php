<div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
  <div class="container quote px-lg-0">
    <div class="row g-0 mx-lg-0">
      <div class="col-lg-6 ps-lg-0" style="min-height: 400px;">
        <div class="position-relative h-100">
          <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('assets_client/img/quote.jpg') }}"
            style="object-fit: cover;" alt="">
        </div>
      </div>
      <div class="col-lg-6 quote-text py-5 wow fadeIn" data-wow-delay="0.5s">
        <div class="p-lg-5 pe-lg-0">
          <div class="section-title text-start">
            <h1 class="display-5 mb-4">Free Quote</h1>
          </div>
          <p class="mb-4 pb-2">Ingin tahu lebih lanjut tentang layanan kami? Ajukan quotation sekarang juga! Sampaikan
            kebutuhan Anda, dan tim kami siap memberikan penawaran terbaik sesuai permintaan Anda.</p>
          <form action="{{ route('store.quotation') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row g-3">
              <div class="col-12 col-sm-6">
                <input type="text" class="form-control border-0" placeholder="Your Name" name="nama" required
                  style="height: 55px;">
              </div>
              <div class="col-12 col-sm-6">
                <input type="email" name="email" class="form-control border-0" placeholder="Your Email" required
                  style="height: 55px;">
              </div>
              <div class="col-12 col-sm-12">
                <input type="text" class="form-control border-0" name="mobile" placeholder="Your Mobile" required
                  style="height: 55px;">
              </div>
              <div class="col-12">
                <textarea class="form-control border-0" name="note" rows="5" placeholder="Special Note"></textarea>
              </div>
              <div class="col-12">
                <button class="btn btn-primary w-100 py-3" type="submit">Submit</button>
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
