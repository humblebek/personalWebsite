<section class="ftco-section contact-section ftco-no-pb" id="contact-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section text-center ftco-animate">
          <h1 class="big big-2">@lang('navbar.contact')</h1>
          <h2 class="mb-4">@lang('sections.contact')</h2>
          @foreach ($quote as $quotes )
            @if($quotes ->section=='contact')
                <p>{{ $quotes->quote_uz }}</p>
            @endif
            @endforeach
        </div>
      </div>

      <div class="row d-flex contact-info mb-5">
        @foreach ( $about as $item)
        <div class="col-md-6 col-lg-3 d-flex ftco-animate">
            <div class="align-self-stretch box p-4 text-center">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="icon-map-signs"></span>
                </div>
                <h3 class="mb-4">@lang('about.adress')</h3>
              <p>{{ $item->adress_uz }}</p>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 d-flex ftco-animate">
            <div class="align-self-stretch box p-4 text-center">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="icon-phone2"></span>
                </div>
                <h3 class="mb-4">@lang('about.phone')</h3>
              <p><a href="tel://1234567920">{{ $item->phone }}</a></p>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 d-flex ftco-animate">
            <div class="align-self-stretch box p-4 text-center">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="icon-paper-plane"></span>
                </div>
                <h3 class="mb-4">@lang('about.email')</h3>
              <p><a href="mailto:info@yoursite.com">{{ $item->email }}</a></p>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 d-flex ftco-animate">
            <div class="align-self-stretch box p-4 text-center">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="icon-globe"></span>
                </div>
                <h3 class="mb-4">@lang('about.website')</h3>
              <p><a href="#">{{ $item->website }}</a></p>
            </div>
        </div>
        @endforeach
      </div>

      <div class="row no-gutters block-9">
        <div class="col-md-6 order-md-last d-flex">
          <form action="{{ route('contact.store') }}" method="POST" class="bg-light p-4 p-md-5 contact-form">
            @csrf
            <div class="form-group">
              <input type="text" class="form-control" name="name" placeholder="@lang('about.name')">
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" placeholder="@lang('about.email')">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" placeholder="@lang('about.subject')">
            </div>
            <div class="form-group">
              <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="@lang('about.message')"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
            </div>
          </form>

        </div>

        <div class="col-md-6 d-flex">
            <div class="img" style="background-image: url(images/contact.jpg);"></div>
        </div>
      </div>
    </div>
    </section>
