<header class="container-fluid">
    <nav class="row d-flex flex-xl-row flex-md-column justify-content-xl-between mx-xl-5 my-xl-3 
    align-content-md-center justify-content-start my-2 navbar navbar-expand-sm navbar-light">
        <button aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" 
        class="navbar-toggler collapsed border-0 col-2" data-target="#navbarNav" data-toggle="collapse" type="button">
            <div class="navbar-toggler-icon"></div>
            <div class="close-icon py-1 hidden">
            ✖
            </div>
        </button>
        <div class="col-xl-4 col-9 d-flex justify-content-xl-start justify-content-center navbar-brand">
            <img alt="HapoLearn" class="img-logo"src="{{ asset('storage/images/hapo_learn.png') }}">
        </div>
        <div class="col-xl-8 col-12 collapse navbar-collapse p-0" id="navbarNav">
            <ul class="col-12 d-flex justify-content-xl-end justify-content-md-between navbar-nav pl-3">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('courses') }}">All Courses</a>
                </li>
                @if(Auth::check())
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profile</a>
                    </li>
                    <li class="nav-item logout">
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>                       
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="modal" data-target="#form" href="#">Login/Register</a>
                    </li>
                @endif
            </ul>
        </div>
    </nav>
</header>
@include('auth.login_register')
