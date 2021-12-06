<!-- Breadcrumb -->
<div class="navbar-dark bg-dark" style="background-image: url(./assets/svg/components/wave-pattern-light.svg);">
  <div class="container content-space-1 content-space-b-lg-3">
    <div class="row align-items-center">
      <div class="col">
        <div class="d-none d-lg-block">
          <h1 class="h2 text-white">Tableau de bord</h1>
          <h5 class="text-white">Bonjour {{ $user->prenom }}</h5>
        </div>
      </div>
      <!-- End Col -->

      <div class="col-auto">
        <div class="d-none d-lg-block">
          <a href="{{ route('logout') }}"" class="btn btn-outline-light">Déconnexion</a>
        </div>

        <!-- Responsive Toggle Button -->
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarNav" aria-controls="sidebarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-default">
            <i class="bi-list"></i>
          </span>
          <span class="navbar-toggler-toggled">
            <i class="bi-x"></i>
          </span>
        </button>
        <!-- End Responsive Toggle Button -->
      </div>
      <!-- End Col -->
    </div>
    <!-- End Row -->
  </div>
</div>
<!-- End Breadcrumb -->
<!-- Content Section -->
<div class="container content-space-1 content-space-t-lg-0 content-space-b-lg-2 mt-lg-n10">
  <div class="row">
    <div class="col-lg-3">
      <!-- Navbar -->
      <div class="navbar-expand-lg navbar-light">
        <div id="sidebarNav" class="collapse navbar-collapse navbar-vertical">
          <!-- Card -->
          <div class="card flex-grow-1 mb-5">
            <div class="card-body">
              <!-- Avatar -->
              <div class="d-none d-lg-block text-center mb-5">
                <span class="text-cap text-center">Votre expert</span>
                <div class="avatar avatar-xxl avatar-circle mb-3">
                  <img class="avatar-img" src="./assets/img/160x160/img9.jpg" alt="Image Description">
                </div>
                <h4 class="card-title mb-0">Natalie Curtis</h4>
                <a class="btn btn-white btn-xs" href="./account-overview.html#editAddressCard">
                  <i class="far fa-comment me-1"></i> Envoyer un message
                </a>
              </div>
              <hr>
              <!-- End Avatar -->

              <!-- TimeLine -->
              <span class="text-cap text-center">Les Etapes</span>
              <!-- Step -->
              <ul id="uploadResumeStepFormProgress" class="js-step-progress step step-icon-xs step-border-last-0 mt-5">
                <li class="step-item">
                  <div class="step-content-wrapper" href="javascript:;"
                    data-hs-step-form-next-options='{
                      "targetSelector": "#uploadResumeStepBasics"
                    }'>
                    <span class="step-icon step-icon-soft-primary">1</span>
                    <div class="step-content">
                      <span class="step-title text-primary">Informations projet</span>
                      <span class="step-text">General info about you</span>
                    </div>
                  </div>
                </li>

                <li class="step-item">
                  <div class="step-content-wrapper" href="javascript:;"
                    data-hs-step-form-next-options='{
                      "targetSelector": "#uploadResumeStepEducation"
                    }'>
                    <span class="blob step-icon step-icon-soft-secondary">2</span>
                    <div class="step-content">
                      <span class="step-title text-primary">Règlement du devis</span>
                    </div>
                  </div>
                </li>

                <li class="step-item">
                  <div class="step-content-wrapper" href="javascript:;"
                    data-hs-step-form-next-options='{
                      "targetSelector": "#uploadResumeStepEducation"
                    }'>
                    <span class="step-icon step-icon-soft-secondary">2</span>
                    <div class="step-content">
                      <span class="step-title text-secondary">Validation du devis</span>
                      <span class="step-title-description step-text">Add education info</span>
                    </div>
                  </div>
                </li>

                <li class="step-item">
                  <div class="step-content-wrapper" href="javascript:;"
                    data-hs-step-form-next-options='{
                      "targetSelector": "#uploadResumeStepWork"
                    }'>
                    <span class="step-icon step-icon-soft-secondary">3</span>
                    <div class="step-content">
                      <span class="step-title text-secondary">Work experience</span>
                      <span class="step-title-description step-text">Add work experience</span>
                    </div>
                  </div>
                </li>

                <li class="step-item">
                  <div class="step-content-wrapper" href="javascript:;"
                    data-hs-step-form-next-options='{
                      "targetSelector": "#uploadResumeStepJobSkills"
                    }'>
                    <span class="step-icon step-icon-soft-secondary">4</span>
                    <div class="step-content">
                      <span class="step-title text-secondary">Skills</span>
                      <span class="step-title-description step-text">Add skills</span>
                    </div>
                  </div>
                </li>
                <li class="step-item">
                  <div class="step-content-wrapper" href="javascript:;"
                    data-hs-step-form-next-options='{
                      "targetSelector": "#uploadResumeStepJobSkills"
                    }'>
                    <span class="step-icon step-icon-soft-secondary">4</span>
                    <div class="step-content">
                      <span class="step-title text-secondary">Skills</span>
                      <span class="step-title-description step-text">Add skills</span>
                    </div>
                  </div>
                </li>

                <li class="step-item">
                  <div class="step-content-wrapper" href="javascript:;"
                    data-hs-step-form-next-options='{
                      "targetSelector": "#uploadResumeStepTypeOfJob"
                    }'>
                    <span class="step-icon step-icon-soft-secondary">5</span>
                    <div class="step-content">
                      <span class="step-title text-secondary">Job type</span>
                      <span class="step-title-description step-text">The type of job you are looking for</span>
                    </div>
                  </div>
                </li>
              </ul>
              <!-- End Step -->



              <!-- End TimeLine -->
            </div>
          </div>
          <!-- End Card -->
        </div>
      </div>
      <!-- End Navbar -->
    </div>
    <!-- End Col -->
