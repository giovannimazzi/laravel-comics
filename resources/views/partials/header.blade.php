<header class="bg-white">
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-0">
        <div class="container">
            <a class="navbar-brand" href="{{ route('comics.index') }}">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC Logo" width="80">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav ms-auto gap-lg-3 text-uppercase fw-bold small">
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
                    <li class="nav-item">
                        <a class="nav-link text-uppercase fw-bold {{ request()->routeIs('tv') ? 'active' : '' }}" href="{{ route('tv') }}">
                            TV
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase fw-bold {{ request()->routeIs('games') ? 'active' : '' }}" href="{{ route('games') }}">
                            Games
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase fw-bold {{ request()->routeIs('collectibles') ? 'active' : '' }}" href="{{ route('collectibles') }}">
                            Collectibles
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase fw-bold {{ request()->routeIs('videos') ? 'active' : '' }}" href="{{ route('videos') }}">
                            Videos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase fw-bold {{ request()->routeIs('fans') ? 'active' : '' }}" href="{{ route('fans') }}">
                            Fans
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase fw-bold {{ request()->routeIs('news') ? 'active' : '' }}" href="{{ route('news') }}">
                            News
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase fw-bold {{ request()->routeIs('shop') ? 'active' : '' }}" href="{{ route('shop') }}">
                            Shop
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>