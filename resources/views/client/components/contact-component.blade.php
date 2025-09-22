@php
  use App\Helpers\Fungsi;
  use App\Helpers\GetData;
@endphp
<!-- Contact Start -->
<div class="container-fluid bg-light overflow-hidden px-lg-0" style="margin: 6rem 0;">
  <div class="container contact px-lg-0">
    <div class="row g-0 mx-lg-0">
      <div class="col-lg-6 contact-text pb-5 wow fadeIn" data-wow-delay="0.5s">
        <div class="p-lg-5 ps-lg-0">
          <div class="section-title text-start">
            <h1 class="display-5 mb-4">Contact Us</h1>
          </div>
          <p class="mb-4">Punya pertanyaan, saran, atau ingin berdiskusi lebih lanjut? Silakan kirim pesan kepada
            kami melalui form di bawah ini. Tim kami akan dengan senang hati merespons secepat mungkin untuk
            membantu kebutuhan Anda.</p>
          <form action="{{ route('store.contact') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row g-3">
              <div class="col-md-6">
                <div class="form-floating">
                  <input type="text" name="nama" required class="form-control" id="name"
                    placeholder="Your Name">
                  <label for="name">Your Name</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-floating">
                  <input type="email" name="email" required class="form-control" id="email"
                    placeholder="Your Email">
                  <label for="email">Your Email</label>
                </div>
              </div>
              <div class="col-12">
                <div class="form-floating">
                  <input type="text" name="subject" required class="form-control" id="subject"
                    placeholder="Subject">
                  <label for="subject">Subject</label>
                </div>
              </div>
              <div class="col-12">
                <div class="form-floating">
                  <textarea class="form-control" name="message" required placeholder="Leave a message here" id="message"
                    style="height: 100px"></textarea>
                  <label for="message">Message</label>
                </div>
              </div>
              <div class="col-12">
                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
              </div>
            </div>
          </form>

        </div>
      </div>
      <div class="col-lg-6 pe-lg-0 pb-5" style="min-height: 400px;">
        <div class="position-relative h-100">
          {!! GetData::getGmap() !!}
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Contact End -->
