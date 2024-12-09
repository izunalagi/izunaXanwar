<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand me-lg-5 me-0" ">
            <img src="{{ asset('frontend/images/nang.png') }}" class="logo-image img-fluid custom-logo"
                alt="templatemo pod talk">
        </a>


        <form action="#" method="get" class="custom-form search-form flex-fill me-3" role="search">
            <div class="input-group input-group-lg">
                <input name="search" type="search" class="form-control" id="search" placeholder="Search Product"
                    aria-label="Search">

                <button type="submit" class="form-control" id="submit">
                    <i class="bi-search"></i>
                </button>
            </div>
        </form>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-lg-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('catalouge.index') }}">Catalouge</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('catalouge.about') }}">About</a>
                </li>

                {{-- <li class="nav-item">
                    <a class="nav-link" href="about.html">Pages</a>

                </li> --}}

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('catalouge.contact') }}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
