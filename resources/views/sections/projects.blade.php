<section class="ftco-section ftco-project" id="projects-section">
    <div class="container">
        <div class="row justify-content-center pb-5">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h1 class="big big-2">@lang('navbar.projects')</h1>
                <h2 class="mb-4">@lang('sections.projects')</h2>
                @foreach ($quote as $quotes)
                    @if ($quotes->section == 'project')
                        <p>{{ $quotes->quote_uz }}</p>
                    @endif
                @endforeach

            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                @foreach ($project->take(2) as $project2)
                <div class="project img ftco-animate d-flex justify-content-center align-items-center"
                    style="background-image: url(images/{{ $project2->photo }});">
                    <div class="overlay"></div>
                    <div class="text text-center p-4">
                        <h3><a href="{{ $project2->link }}" target="_blank">{{ $project2->name }}</a></h3>
                        <span></span>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-md-4">
                @foreach ($project->skip(2) as $project2)
                <div class="row">
                    <div class="col-md-12">
                        <div class="project img ftco-animate d-flex justify-content-center align-items-center"
                            style="background-image: url(images/{{ $project2->photo }});">
                            <div class="overlay"></div>
                            <div class="text text-center p-4">
                                <h3><a href="{{ $project2->link }}" target="_blank">{{ $project2->name }}</a></h3>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>


    </div>
</section>
