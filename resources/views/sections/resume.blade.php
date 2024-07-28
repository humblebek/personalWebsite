<section class="ftco-section ftco-no-pb" id="resume-section">
    <div class="container">
        <div class="row justify-content-center pb-5">
      <div class="col-md-10 heading-section text-center ftco-animate">
          <h1 class="big big-2">@lang('sections.resume')</h1>
        <h2 class="mb-4">@lang('sections.resume')</h2>
        @foreach ($quote as $quotes )
        @if($quotes ->section=='resume')
            <p>{{ $quotes->quote_uz }}</p>
        @endif
        @endforeach

      </div>
    </div>
        <div class="row">
            @foreach ($resume as $item )
            <div class="col-md-6">
                <div class="resume-wrap ftco-animate">
                    <span class="date">{{ $item->date }}</span>
                    <h2>{{ $item['title_'.\App::getLocale()] }}</h2>
                    <span class="position">{{ $item['adress_'.\App::getLocale()] }}</span>
                    <p class="mt-4">{{ $item['paragraph_'.\App::getLocale()] }}</p>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-md-6 text-center ftco-animate">
                <p>
                    <a href="rezyume.pdf" target="_blank" class="btn btn-primary py-4 px-5">@lang('hero.cv')</a>
                </p>
                <p>
                    <a href="JURAYEV AZIZBEK-CV.pdf" target="_blank" class="btn btn-primary py-4 px-5">@lang('hero.cvE')</a>
                </p>
            </div>
        </div>
    </div>
  </section>
