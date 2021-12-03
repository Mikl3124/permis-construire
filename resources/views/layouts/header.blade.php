<!-- ========== HEADER ========== -->
<header id="header" class="navbar navbar-expand-lg navbar-end navbar-absolute-top navbar-light navbar-show-hide"
    data-hs-header-options='{
      "fixMoment": 1000,
      "fixEffect": "slide"
    }'>
    <nav class="js-mega-menu navbar-nav-wrap">
      <!-- Default Logo -->
      <a class="navbar-brand" href="{{ route('home') }}" aria-label="Front">
        <img class="navbar-brand-logo" src="../assets/img/logopc.svg" alt="Logo">
      </a>
      <!-- End Default Logo -->

      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-default">
          <i class="bi-list"></i>
        </span>
        <span class="navbar-toggler-toggled">
          <i class="bi-x"></i>
        </span>
      </button>
      <!-- End Toggler -->

      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <!-- Nos services -->
          <li class="hs-has-sub-menu nav-item">
            <a id="companyMegaMenu" class="hs-mega-menu-invoker nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Nos services <i class="fas fa-angle-down"></i></a>
            <!-- Mega Menu -->
            <div class="hs-sub-menu dropdown-menu" aria-labelledby="companyMegaMenu" style="min-width: 14rem;">
              <a class="dropdown-item" href="{{ route('permis-de-construire') }}">Permis de construire</a>
              <a class="dropdown-item" href="#">Déclaration préalable</a>
            </div>
            <!-- End Mega Menu -->
          </li>

          <li class="nav-item">
            @if (Auth::check())
            <!-- Nos services -->
          <li class="hs-has-sub-menu nav-item">
            <a id="companyMegaMenu" class="hs-mega-menu-invoker nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Espace privé <i class="fas fa-angle-down"></i></a>
            <!-- Mega Menu -->
            <div class="hs-sub-menu dropdown-menu" aria-labelledby="companyMegaMenu" style="min-width: 14rem;">
              <a class="dropdown-item" href="https://nyleo.fr">Tableau de bord</a>
              <a class="dropdown-item text-danger" href="{{ route('logout') }}">Déconnexion</a>

            </div>
            <!-- End Mega Menu -->
          </li>
            @else
            <a class="nav-link" href="/login">Connexion</a>
            @endif
          </li>

          <!-- Button -->
          <li class="nav-item">
            @if (Auth::check())
              @if ( auth()->user()->role == 'client')
                <a class="btn btn-primary btn-transition" href="{{ route('form') }}">Mon tableau de bord</a>
              @elseif ( auth()->user()->role == 'admin')
                <a class="btn btn-primary btn-transition" href="{{ route('form') }}">Gestion du site</a>
              @endif
            @else
              <a class="btn btn-primary btn-transition" href="{{ route('form') }}">Commencer mon projet</a>
            @endif
            </li>

          <!-- End Button -->
        </ul>
      </div>
      <!-- End Collapse -->
    </nav>
</header>

<!-- ========== END HEADER ========== -->

