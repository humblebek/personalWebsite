<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="#" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DASHMIN</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="/admin/assets/img/user.jpeg" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">{{ auth()->user()->name }}</h6>
                {{-- <span> Role:{{ auth()->user()->roles[0]['name'] }}</span>
               @if(auth()->user()->hasRole('Admin'))<span> Income:{{ auth()->user()->income }}</span> @endif --}}
            </div>
        </div>
        <div class="navbar-nav w-100">

            <a href="" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>

            <a href="{{route('about.index')}}" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>About</a>

            <a href="{{route('resume.index')}}" class="nav-item nav-link"><i class="fa fa-file me-2"></i>Resume</a>

            <a href="{{route('service.index')}}" class="nav-item nav-link"><i class="fa fa-book me-2"></i>Services</a>

            <a href="{{route('skill.index')}}" class="nav-item nav-link"><i class="fa fa-pen me-2"></i>Skills</a>

            <a href="{{route('projects.index')}}" class="nav-item nav-link"><i class="fa fa-folder me-2"></i>Project</a>
            <a href="{{route('statistic.index')}}" class="nav-item nav-link"><i class="fa fa-laptop me-2"></i>Statistic</a>
            <a href="{{route('contact.index')}}" class="nav-item nav-link"><i class="fa fa-pen me-2"></i>Contact</a>
            <a href="{{route('quote.index')}}" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Quote</a>

        </div>
    </nav>
</div>
