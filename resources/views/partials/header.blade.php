<header>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary px-5">
        <div class="container">
            <a class="navbar-brand" href="{{ route("home") }}">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo" class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            {{-- Menu --}}
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto active">
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route("home") }}">COMICS</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('shop') ? 'active' : '' }}" href="{{ route("shop") }}">SHOP</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">CHARACTER</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">MOVIES</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">TV</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">GAMES</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">COLLECTIBLES</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">VIDEOS</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">FANS</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">NEWS</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>