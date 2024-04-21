@extends('layouts.shop')
@section('main')
    <div class="mb-4 pb-4"></div>
    <section class="contact-us container">
      <div class="mw-930">
        <h2 class="page-title">CONTACT US</h2>
      </div>
    </section>
    
    {{-- <section class="google-map mb-5">
      <h2 class="d-none">Contact US</h2>
      <div id="map" class="google-map__wrapper"></div>
    </section> --}}

    <section class="contact-us container">
      <div class="mw-930">
        <div class="row mb-5">
          <div class="col-lg-6">
            <h3 class="mb-4">Store in London</h3>
            <p class="mb-4">1418 River Drive, Suite 35 Cottonhall, CA 9622<br>United Kingdom</p>
            <p class="mb-4">sale@uomo.com<br>+44 20 7123 4567</p>
          </div>
          <div class="col-lg-6">
            <h3 class="mb-4">Store in Istanbul</h3>
            <p class="mb-4">1418 River Drive, Suite 35 Cottonhall, CA 9622<br>Turky</p>
            <p class="mb-4">sale@uomo.com<br>+90 212 555 1212</p>
          </div>
        </div>
        <div class="contact-us__form">
          <form name="contact-us-form" class="needs-validation" novalidate>
            <h3 class="mb-5">Get In Touch</h3>
            <div class="form-floating my-4">
              <input type="text" class="form-control" id="contact_us_name" placeholder="Name *" required>
              <label for="contact_us_name">Name *</label>
            </div>
            <div class="form-floating my-4">
              <input type="email" class="form-control" id="contact_us_email" placeholder="Email address *" required>
              <label for="contact_us_name">Email address *</label>
            </div>
            <div class="my-4">
              <textarea class="form-control form-control_gray" placeholder="Your Message" cols="30" rows="8" required></textarea>
            </div>
            <div class="my-4">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </section>
  @endsection