<section class="ftco-about img ftco-section ftco-no-pb" id="about-section">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-6 col-lg-5 d-flex">
                <div class="img-about img d-flex align-items-stretch">
                    <div class="overlay"></div>
                    <div class="img d-flex align-self-stretch align-items-center" style="background-image:url(images/logo.png);">
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-7 pl-lg-5 pb-5">
                <div class="row justify-content-start pb-3">
              <div class="col-md-12 heading-section ftco-animate">
                  <h1 class="big">@lang('navbar.about')</h1>
                <h2 class="mb-4">@lang('sections.about')</h2>
                @foreach ( $about as $item)
                @foreach ($quote as $quotes )
                @if($quotes->section=='about')
                <p>{{ $quotes['quote_'.\App::getLocale()] }}</p>
                @endif
                @endforeach


                <ul class="about-info mt-4 px-md-0 px-2">
                    <li class="d-flex"><span>@lang('about.name'):</span> <span>{{ $item['name_'.\App::getLocale()] }}</span></li>
                    <li class="d-flex"><span>@lang('about.birth'):</span> <span>{{ $item->date }}</span></li>
                    <li class="d-flex"><span>@lang('about.adress'):</span> <span>{{ $item['adress_'.\App::getLocale()] }}</span></li>
                    <li class="d-flex"><span>@lang('about.email'):</span> <span>{{ $item->email }}</span></li>
                    <li class="d-flex"><span>@lang('about.phone'): </span> <span>{{ $item->phone }}</span></li>
                    <li class="d-flex"><span>@lang('about.education'): </span> <span>{{ $item['education_'.\App::getLocale()] }}</span></li>
                </ul>
                @endforeach
              </div>
            </div>
        </div>
    </div>
    </div>
  </section>
