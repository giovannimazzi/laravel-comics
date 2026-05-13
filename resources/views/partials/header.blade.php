<header class="bg-white">
    <nav class="navbar navbar-expand-lg bg-white">
        <div class="container">
            <a class="navbar-brand" href="{{ route('comics.index') }}">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC Logo" width="80">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav ms-auto gap-lg-3">
                    <li class="nav-item">
                        <a class="nav-link text-uppercase fw-bold {{ request()->routeIs('characters') ? 'active' : '' }}" href="{{ route('characters') }}">
                            Characters
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-uppercase fw-bold {{ request()->routeIs('comics.*') ? 'active' : '' }}" href="{{ route('comics.index') }}">
                            Comics
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-uppercase fw-bold {{ request()->routeIs('movies') ? 'active' : '' }}" href="{{ route('movies') }}">
                            Movies
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>