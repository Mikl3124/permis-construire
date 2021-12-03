@extends('layouts.app')

<!-- Mapbox  -->
<script src='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.css' rel='stylesheet' />
<script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.0/mapbox-gl-geocoder.min.js'></script>
<link rel='stylesheet' href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.0/mapbox-gl-geocoder.css' type='text/css' />
<link rel="stylesheet" href="./assets/vendor/tom-select/dist/css/tom-select.bootstrap5.css">
<script src="./assets/vendor/tom-select/dist/js/tom-select.complete.min.js"></script>

@section('content')


  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main" class="bg-light">
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
              <a class="btn btn-soft-light btn-sm" href="#">Déconnexion</a>
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

        <div class="col-lg-9">
          <!-- Card -->
          <div class="card">
            <div class="card-header-dashboard">
              <h3 class="card-header-title text-dark">Votre projet</h3>
            </div>
            <!-- Body -->
            <div class="card-body-dashboard">
              <div class="row">
                <div class="col-sm-6 mb-5">
                  <!-- Card -->
                  <div class="card card-dashed" href="javascript:;" data-bs-toggle="modal" data-bs-target="#accountModal">
                    <div class="card-body card-dashed-body">
                      <h5>
                        Titre: <sup style="font-size: 10px"><a class="text-secondary" href="#"><i class="fas fa-edit"></i></a></sup>
                      </h5>
                      <p>Construction d'une maison d'habitation en Ariège</p>
                      <h5>Adresse:
                        <sup style="font-size: 10px"><a class="text-secondary" href="#"><i class="fas fa-edit"></i></a></sup>
                      </h5>
                      <p>{{ $projet->adresse }}</p>
                    </div>
                  </div>
                  <!-- End Card -->
                </div>
                <!-- End Col -->

                <div class="col-sm-6 mb-5">
                  <div class="rounded" id='map' style='width: 100%; height: 100%;'></div>
                  <!-- End Card -->
                </div>

                <!-- End Col -->
              </div>
              <!-- End Row -->
            </div>
            <!-- End Body -->
          </div>
          <!-- End Card -->
          <!-- Begin Card Information Card -->
          <div class="card mt-3">
            <div class="card-header-dashboard">
              <h3 class="card-header-title text-dark">
              Informations importantes</h3>
            </div>
            <div class="card-body-dashboard">
              <p>Afin de débuter votre projet, merci de bien vouloir valider votre devis</p>
            </div>
          </div>
          <!-- End Card Information -->

          <div class="card mt-3">
            <!-- Header -->
            <div class="card-header-dashboard">
              <h3 class="card-header-title text-dark">
                <i class="far fa-folder"></i> Vos documents
              </h3>
            </div>
            <!-- End Header -->

            <span class="file-input btn btn-primary btn-file">
                Browse&hellip; <input type="file" multiple>
            </span>
            <!-- Body -->
            <div class="card-body-dashboard">
              <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <p class="panel-title">
                      <a class="text-dark" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-plus"></span> </i> Vos documents</a>
                    </p>
                  </div>


                  <div id="collapseOne" class="panel-collapse collapse">
                    <div class="panel-body">
                      <ul class="list-unstyled list-py-2">
                        <a class="text-secondary" href="#"><li class="ml-5"><i class="far fa-file"></i> Dashboard</li></a>
                      </ul>
                    </div>
                  </div>
                </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-plus"></span> What is Bootstrap?</a>
                  </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse in">
                  <div class="panel-body">
                    <p>Bootstrap is a sleek, intuitive, and powerful front-end framework for faster and easier web development. It is a collection of CSS and HTML conventions. <a href="http://schools.inimisttech.com/tutorial/topic/Bootstrap" target="_blank">Learn more.</a></p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-plus"></span> What is CSS?</a>
                  </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p>CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such as colors, backgrounds, fonts etc. <a href="http://schools.inimisttech.com/tutorial/topic/CSS" target="_blank">Learn more.</a></p>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Body -->
          </div>
          <!-- End Card -->
        </div>
        <!-- End Col -->
          <!-- Begin Card Vos Informations -->
          <div class="card mt-3">
          <div class="card-header-dashboard">
            <h3 class="card-header-title text-dark">
              <i class="far fa-address-card"></i> Vos informations</h3>
          </div>
          <div class="card-body-dashboard">

          </div>
        </div>
        <!-- End Card Vos Information -->
      </div>
      <!-- End Row -->
    </div>
    <!-- End Content Section -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->
      </div>
    </div>
  </div>

  <!-- Go To -->
  <a class="js-go-to go-to position-fixed" href="javascript:;" style="visibility: hidden;"
     data-hs-go-to-options='{
       "offsetTop": 700,
       "position": {
         "init": {
           "right": "2rem"
         },
         "show": {
           "bottom": "2rem"
         },
         "hide": {
           "bottom": "-2rem"
         }
       }
     }'>
    <i class="bi-chevron-up"></i>
  </a>

  <!-- Offcanvas Search -->
  <div class="offcanvas offcanvas-top offcanvas-navbar-search bg-light" tabindex="-1" id="offcanvasNavbarSearch">
    <div class="offcanvas-body">
      <div class="container">
        <div class="w-lg-75 mx-lg-auto">
          <div class="d-flex justify-content-end mb-3">
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>

          <div class="mb-7">
            <!-- Form -->
            <form>
              <!-- Input Card -->
              <div class="input-card">
                <div class="input-card-form">
                  <input type="text" class="form-control form-control-lg" placeholder="Search Front" aria-label="Search Front">
                </div>
                <button type="button" class="btn btn-primary btn-lg">Search</button>
              </div>
              <!-- End Input Card -->
            </form>
            <!-- End Form -->
          </div>

          <div class="d-none d-md-block">
            <div class="row">
              <div class="col-sm-6">
                <div class="mb-3">
                  <h5>Quick Links</h5>
                </div>

                <div class="row">
                  <div class="col-6">
                    <!-- List -->
                    <ul class="list-pointer list-pointer-primary mb-0">
                      <li class="list-pointer-item">
                        <a class="link-sm link-secondary" href="#">Search Results List</a>
                      </li>
                      <li class="list-pointer-item">
                        <a class="link-sm link-secondary" href="#">Search Results Grid</a>
                      </li>
                      <li class="list-pointer-item">
                        <a class="link-sm link-secondary" href="#">About</a>
                      </li>
                      <li class="list-pointer-item">
                        <a class="link-sm link-secondary" href="#">Services</a>
                      </li>
                      <li class="list-pointer-item">
                        <a class="link-sm link-secondary" href="#">Invoice</a>
                      </li>
                    </ul>
                    <!-- End List -->
                  </div>
                  <!-- End Col -->

                  <div class="col-6">
                    <!-- List -->
                    <ul class="list-pointer list-pointer-primary mb-0">
                      <li class="list-pointer-item">
                        <a class="link-sm link-secondary" href="#">Profile</a>
                      </li>
                      <li class="list-pointer-item">
                        <a class="link-sm link-secondary" href="#">User Contacts</a>
                      </li>
                      <li class="list-pointer-item">
                        <a class="link-sm link-secondary" href="#">Reviews</a>
                      </li>
                      <li class="list-pointer-item">
                        <a class="link-sm link-secondary" href="#">Settings</a>
                      </li>
                    </ul>
                    <!-- End List -->
                  </div>
                  <!-- End Col -->
                </div>
                <!-- End Row -->
              </div>
              <!-- End Col -->

              <div class="col-sm-6">
                <!-- Card -->
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-6">
                        <img class="img-fluid" src="./assets/img/mockups/img1.png" alt="Image Description">
                      </div>
                      <!-- End Col -->

                      <div class="col-6">
                        <div class="mb-4">
                          <h5>Featured Item</h5>
                          <p>Create astonishing web sites and pages.</p>
                        </div>
                        <a class="btn btn-outline-primary btn-xs btn-transition" href="#">Apply now <i class="bi-chevron-right small ms-1"></i></a>
                      </div>
                      <!-- End Col -->
                    </div>
                    <!-- End Row -->
                  </div>
                </div>
                <!-- End Card -->
              </div>
              <!-- End Col -->
            </div>
            <!-- End Row -->
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Add New Address Modal -->
  <div class="modal fade" id="accountModal" tabindex="-1" aria-labelledby="accountModalLabel" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <!-- Header -->
        <div class="modal-header">
          <h4 class="modal-title" id="accountModalLabel">Renommez votre projet</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <!-- End Header -->
        <!-- Body -->
        <div class="modal-body">
          <!-- Form -->
          <form>
            <!-- Form -->
            <div class="mb-1">
              <div class="col-sm-12">
                <div class="mb-2">
                  <input type="text" class="form-control" name="city" id="cityLabel" placeholder="City" aria-label="City">
                </div>
              </div>
              <button type="submit" class="btn btn-primary btn-sm">Enregistrer</button>
            </div>

            <!-- End Form -->
          </form>
        </div>
        <!-- End Body -->
      </div>
    </div>
  </div>
  <!-- ========== END SECONDARY CONTENTS ========== -->


  <!-- JS Global Compulsory  -->
  <script src="./assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

  <!-- JS Implementing Plugins -->
  <script src="./assets/vendor/hs-header/dist/hs-header.min.js"></script>
  <script src="./assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.js"></script>
  <script src="./assets/vendor/hs-show-animation/dist/hs-show-animation.min.js"></script>
  <script src="./assets/vendor/hs-go-to/dist/hs-go-to.min.js"></script>
  <script src="./assets/vendor/imask/dist/imask.min.js"></script>
  <script src="./assets/vendor/tom-select/dist/js/tom-select.complete.min.js"></script>

  <!-- JS Front -->
  <script src="./assets/js/theme.min.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    (function() {
      // INITIALIZATION OF HEADER
      // =======================================================
      new HSHeader('#header').init()


      // INITIALIZATION OF MEGA MENU
      // =======================================================
      new HSMegaMenu('.js-mega-menu', {
          desktop: {
            position: 'left'
          }
        })


      // INITIALIZATION OF SHOW ANIMATIONS
      // =======================================================
      new HSShowAnimation('.js-animation-link')


      // INITIALIZATION OF BOOTSTRAP VALIDATION
      // =======================================================
      HSBsValidation.init('.js-validate', {
        onSubmit: data => {
          data.event.preventDefault()
          alert('Submited')
        }
      })


      // INITIALIZATION OF BOOTSTRAP DROPDOWN
      // =======================================================
      HSBsDropdown.init()


      // INITIALIZATION OF GO TO
      // =======================================================
      new HSGoTo('.js-go-to')


      // INITIALIZATION OF INPUT MASK
      // =======================================================
      HSCore.components.HSMask.init('.js-input-mask')


      // INITIALIZATION OF SELECT
      // =======================================================
      HSCore.components.HSTomSelect.init('.js-select', {
        render: {
          'option': function(data, escape) {
            return data.optionTemplate
          },
          'item': function(data, escape) {
            return data.optionTemplate
          }
        }
      })
    })()
  </script>

  <!-- ------------- Script Localisation ---------------------- -->
<script src="https://unpkg.com/es6-promise@4.2.4/dist/es6-promise.auto.min.js"></script>
<script src="https://unpkg.com/@mapbox/mapbox-sdk/umd/mapbox-sdk.min.js"></script>

<script>

  var mapboxAccessKey = '{{ env('MAPBOX_ACCESS_TOKEN') }}';
    mapboxgl.accessToken = mapboxAccessKey ;
    var mapboxClient = mapboxSdk({ accessToken: mapboxgl.accessToken });
    mapboxClient.geocoding.forwardGeocode({
        query: "{{ $projet->adresse }}",
        autocomplete: false,
        limit: 1,
      })
        .send()
        .then(function (response) {
            if (response && response.body && response.body.features && response.body.features.length) {
                var feature = response.body.features[0];
                var map = new mapboxgl.Map({
                    container: 'map',
                    style: 'mapbox://styles/mapbox/satellite-v9',
                    center: feature.center,
                    zoom: 16,
                    interactive: false,
                });

                new mapboxgl.Marker({
                  color: "#4c34e0",
                  draggable: true
                  })
                    .setLngLat(feature.center)
                    .addTo(map);
            }
        });

</script>

@endsection
