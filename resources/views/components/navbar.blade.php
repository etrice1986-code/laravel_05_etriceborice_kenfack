<nav class="navbar navbar-expand-lg navbar-dark custom-navbar sticky-top">
  <div class="container">

       <a class="navbar-brand fw-bold text-white d-flex align-items-center" href="{{ route('homepage') }}">
            <img src="/media/poster/logo.png" alt="Logo" width="24" class="me-2 animate-pop">
            <span style="letter-spacing: 0.5px;">Movie<span style="color: #00b0ea;">DB</span></span>
       </a>

       <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
       </button>

       <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto gap-2">
            <li class="nav-item">
              <a class="nav-link {{ request()->routeIs('homepage') ? 'active' : '' }}" href="{{ route('homepage') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ request()->routeIs('movie.list') || request()->routeIs('movie.detail') ? 'active' : '' }}" href="{{ route('movie.list') }}">Movies</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ request()->routeIs('contattaci') ? 'active' : '' }}" href="{{ route('contattaci') }}">Contattaci</a>
            </li>
          </ul>
       </div>
  </div>
</nav>
