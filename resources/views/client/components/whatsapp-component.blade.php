<!-- Floating WhatsApp button -->

@php
  use App\Helpers\GetData;
  $no_wa = GetData::getTelp();
  $no_wa = preg_replace('/^0/', '+62', $no_wa);
@endphp

<a href="https://wa.me/{{ $no_wa }}" target="_blank" rel="noopener noreferrer" class="whatsapp-float"
  aria-label="Chat via WhatsApp">
  <img src="{{ asset('img/wa_putih.svg') }}" alt="">
</a>

<style>
  img {
    height: 40px;
    color: white
  }

  .whatsapp-float {
    position: fixed;
    left: 0px;
    bottom: 40px;
    width: 60px;
    height: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #02ac3d;
    /* WhatsApp green */
    border-radius: 0 25% 25% 0;
    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.2);
    text-decoration: none;
    z-index: 9999;
    transition: transform .15s ease;
  }

  .whatsapp-float:hover {
    transform: translateY(-4px);
  }

  .whatsapp-float img {
    display: block;
  }
</style>
