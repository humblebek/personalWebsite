<section class="ftco-section" id="skills-section">
    <div class="container">
        <div class="row justify-content-center pb-5">
  <div class="col-md-12 heading-section text-center ftco-animate">
      <h1 class="big big-2">@lang('navbar.skills')</h1>
    <h2 class="mb-4">@lang('sections.skills')</h2>
    @foreach ($quote as $quote )
            @if($quote->section=='skill')
                <p>{{ $quote->quote_uz }}</p>
            @endif
        @endforeach

  </div>
</div>
        <div class="row">
            @foreach ( $skill as $item )
            <div class="col-md-6 animate-box">
                <div class="progress-wrap ftco-animate">
                    <h3>{{ $item->name }}</h3>
                    <div class="progress">
                         <div class="progress-bar color-1" role="progressbar" aria-valuenow="{{ $item->percentage }}"
                          aria-valuemin="0" aria-valuemax="100" style="width:{{ $item->percentage }}%">
                        <span>{{ $item->percentage }}%</span>
                          </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
