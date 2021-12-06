<div class="col-lg-3">
  <!-- Navbar -->
  <div class="navbar-expand-lg navbar-light">
    <div id="sidebarNav" class="collapse navbar-collapse navbar-vertical">
      <!-- Card -->
      <div class="card flex-grow-1 mb-5">
        <div class="card-body">
          <!-- Avatar -->
          <div class="d-none d-lg-block text-center mb-5">
            <div class="avatar avatar-xxl avatar-circle mb-3">
              <img class="avatar-img" src="../assets/img/160x160/img9.jpg" alt="Image Description">
              <img class="avatar-status avatar-lg-status" src="../assets/svg/illustrations/top-vendor.svg" alt="Image Description" data-bs-toggle="tooltip" data-bs-placement="top" title="Verified user">
            </div>

            <h4 class="card-title mb-0">Natalie Curtis</h4>
            <p class="card-text small">natalie@example.com</p>
          </div>
          <!-- End Avatar -->

          <!-- Nav -->
          <span class="text-cap">Clients</span>

          <!-- List -->
          <ul class="nav nav-sm nav-tabs nav-vertical mb-4">
            <li class="nav-item ">
              <a class="nav-link {{ $item === 'clients' ? 'active' : '' }}" href="../account-overview.html">
                <i class="bi-person-badge nav-icon"></i> Personal info
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../account-security.html">
                <i class="bi-shield-shaded nav-icon"></i> Clients
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="../account-notifications.html">
                <i class="bi-bell nav-icon"></i> Notifications
                <span class="badge bg-soft-dark text-dark rounded-pill nav-link-badge">1</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="../account-preferences.html">
                <i class="bi-sliders nav-icon"></i> Preferences
              </a>
            </li>
          </ul>
          <!-- End List -->

          <span class="text-cap">Projets</span>

          <!-- List -->
          <ul class="nav nav-sm nav-tabs nav-vertical mb-4">
            <li class="nav-item">
              <a class="nav-link {{ $item === 'categories' ? 'active' : '' }}" href="{{ route('admin.categories') }}">
                <i class="bi-basket nav-icon"></i> Catégories
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="">
                <i class="bi-heart nav-icon"></i> Wishlist
                <span class="badge bg-soft-dark text-dark rounded-pill nav-link-badge">2</span>
              </a>
            </li>
          </ul>
          <!-- End List -->

          <span class="text-cap">Billing</span>

          <!-- List -->
          <ul class="nav nav-sm nav-tabs nav-vertical">
            <li class="nav-item">
              <a class="nav-link " href="../account-payments.html">
                <i class="bi-credit-card nav-icon"></i> Payments
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="../account-address.html">
                <i class="bi-geo-alt nav-icon"></i> Address
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="../account-teams.html">
                <i class="bi-people nav-icon"></i> Teams
                <span class="badge bg-soft-dark text-dark rounded-pill nav-link-badge">+2 new users</span>
              </a>
            </li>
          </ul>
          <!-- End List -->

          <div class="d-lg-none">
            <div class="dropdown-divider"></div>

            <!-- List -->
            <ul class="nav nav-sm nav-tabs nav-vertical">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="bi-box-arrow-right nav-icon"></i> Log out
                </a>
              </li>
            </ul>
            <!-- End List -->
          </div>
          <!-- End Nav -->
        </div>
      </div>
      <!-- End Card -->
    </div>
  </div>
  <!-- End Navbar -->
</div>

