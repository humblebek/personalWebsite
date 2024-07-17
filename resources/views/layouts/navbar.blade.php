<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="#home-section">devazizbek</a>

        <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse"
            data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu</button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav nav ml-auto">
                <li class="nav-item"><a href="#home-section" class="nav-link"><span>@lang('navbar.home')</span></a></li>
                <li class="nav-item"><a href="#about-section" class="nav-link"><span>@lang('navbar.about')</span></a></li>
                <li class="nav-item"><a href="#resume-section" class="nav-link"><span>@lang('navbar.resume')</span></a></li>
                <li class="nav-item"><a href="#services-section" class="nav-link"><span>@lang('navbar.services')</span></a></li>
                <li class="nav-item"><a href="#skills-section" class="nav-link"><span>@lang('navbar.skills')</span></a></li>
                <li class="nav-item"><a href="#projects-section" class="nav-link"><span>@lang('navbar.projects')</span></a></li>
                <li class="nav-item"><a href="#contact-section" class="nav-link"><span>@lang('navbar.contact')</span></a></li>


                <li class="nav-item dropdown active-language">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa-solid flag-language"><span>{{ session('lang', 'uz') }}</span></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/lang/uz">Uz</a>
                        <a class="dropdown-item" href="/lang/en">En</a>
                        <a class="dropdown-item" href="/lang/ru">Ru</a>
                    </div>
                </li>

            </ul>
        </div>

    </div>
</nav>
