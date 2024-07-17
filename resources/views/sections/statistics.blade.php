<section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter">
    <div class="container">
            <div class="row d-md-flex align-items-center">
                @foreach ( $statistic as $item )
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                      <div class="text">
                        <strong class="number" data-number="{{ $item->number }}">0</strong>
                        <span>{{ $item['name_'.\App::getLocale()] }}</span>
                      </div>
                    </div>
                  </div>
                @endforeach
    </div>
  </div>
  </section>

  <section class="ftco-section ftco-hireme img margin-top" style="background-image: url(images/bg_1.jpg)">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 ftco-animate text-center">
                    <h2>@lang('sections.boom')</h2><br>
                    <p class="mb-0"><a href="#contact-section" class="btn btn-primary py-3 px-5">@lang('hero.hire')</a></p>
                </div>
            </div>
        </div>
    </section>
