@extends('layouts.app')

<!-- Mapbox  -->
<script src='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.css' rel='stylesheet' />
<script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.0/mapbox-gl-geocoder.min.js'></script>
<link rel='stylesheet' href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.0/mapbox-gl-geocoder.css' type='text/css' />
<link rel="stylesheet" href="./assets/vendor/tom-select/dist/css/tom-select.bootstrap5.css">
<script src="./assets/vendor/tom-select/dist/js/tom-select.complete.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/places.js@1.19.0"></script>

@section('content')
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

          <!-- Button -->
          <li class="nav-item">
            @if (Auth::check())
                <a class="btn btn-danger btn-transition" href="{{ route('logout') }}">Déconnexion</a>
            @endif
            </li>

          <!-- End Button -->
        </ul>
      </div>
      <!-- End Collapse -->
    </nav>
</header>

<!-- ========== END HEADER ========== -->

  <!-- ========== MAIN CONTENT ========== -->
  @if ($message = Session::get('success'))      
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
    </div>
  @endif
  @if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Un problème est survenu.
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
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
              <h3 class="card-header-title text-dark"><i class="fas fa-home text-primary"></i> Votre projet</h3>
            </div>
            <!-- Body -->
            <div class="card-body-dashboard">
              <div class="row">
                <div class="col-sm-6 mb-5">
                  <!-- Card -->
                  <div class="card card-dashed">
                    <div class="card-body card-dashed-body">
                      <h5>
                        Titre: <sup style="font-size: 10px"><a class="text-secondary" href="javascript:;" data-bs-toggle="modal" data-bs-target="#RenameProject"><i class="fas fa-edit"></i></a></sup>
                      </h5>
                      <p>{{ $projet->title }}</p>
                      <h5>Adresse:
                        <sup style="font-size: 10px"><a class="text-secondary" href="javascript:;" data-bs-toggle="modal" data-bs-target="#ChangeAdresseProject"><i class="fas fa-edit"></i></a></sup>
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
             <i class="fas fa-info-circle text-primary"></i> Informations importantes</h3>
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
                <i class="fas fa-folder text-primary"></i> Vos documents
              </h3>
            </div>
            <!-- End Header -->
            <!-- Body -->
            <div class="card-body-dashboard">
              <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    
                    <!-- Button trigger send Document -->
                    <div class="d-flex justify-content-between">
                        <a class="text-dark" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-plus"></span> </i> <h6><i class="fas fa-chevron-down"></i> Documents téléchargés </h6> </a>
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#upoladFileModal">
                      Envoyer un document
                      </button>
                    </div>
                  </div>

                  <div id="collapseOne" class="panel-collapse collapse">
                    <div class="panel-body">
                      <ul class="list-unstyled list-py-2">
                        @forelse ($documents_download as $document)
                          <div class="d-flex justify-content-start">
                            <p class="text-secondary ml-3"><li class="mx-2">{{ $document->title }}</li></p>
                            <a href="{{ route('document.download', ['id' => $document->id]) }}">
                              <li class="mx-2"><i class="far fa-eye text-secondary"></i></li>
                            </a>
                            <a href="{{ route('document.delete', ['id' => $document->id]) }}" onclick="return confirm('Etes-vous su^r de vouloir supprimer ce document ?');">
                              <li class="ml-5 mx-2"><i class="fas fa-trash text-danger"></i></li>
                            </a>
                          </div>
                        @empty
                          <small>(Aucun document téléchargé)</small>
                        @endforelse

                      </ul>
                    </div>
                  </div>
                </div>
            </div>
                            <div class="panel panel-default">
                  <div class="panel-heading">
                    
                    <!-- Button trigger send Document -->
                    <div class="d-flex justify-content-between">
                        <a class="text-dark" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-plus"></span> </i> <h6><i class="fas fa-chevron-down"></i> Documents reçus</h6> </a>
                    </div>
                  </div>

                  <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="panel-body">
                      
                      <small>(Aucun document reçu)</small>

                      </ul>
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

 

  <!-- Rename Project Modal -->
  <div class="modal fade" id="RenameProject" tabindex="-1" aria-labelledby="RenameProjectLabel" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <!-- Header -->
        <div class="modal-header">
          <h4 class="modal-title" id="RenameProjectLabel">Renommez votre projet</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <!-- End Header -->
        <!-- Body -->
        <div class="modal-body">
          <!-- Form -->
            <form action="{{ route('rename-project') }}" method="POST">
              @csrf
            <!-- Form -->
            <div class="mb-1">
              <div class="col-sm-12">
                <div class="mb-2">
                  <input type="text" class="form-control" name="project_name" id="projectName" placeholder="{{ $projet->title }}" aria-label="City">
                  <input type="hidden" name="project_id" value = {{ $projet->id }}>
                </div>
              </div>
            </div>
          </div>
         <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Modifier</button>
        </div>
        </form>
        <!-- End Form -->
        <!-- End Body -->
      </div>
    </div>
  </div>

  <!-- Change adresse Modal -->
  <div class="modal fade" id="ChangeAdresseProject" tabindex="-1" aria-labelledby="ChangeAdresseProjectLabel" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <!-- Header -->
        <div class="modal-header">
          <h4 class="modal-title" id="ChangeAdresseProjectLabel">Modifiez l'adresse du projet</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <!-- End Header -->
        <!-- Body -->
        <div class="modal-body">
          <!-- Form -->
            <form action="{{ route('change-adresse-project') }}" method="POST">
              @csrf
            <!-- Form -->
            <div class="mb-1">
              <div class="col-sm-12">
                <div class="mb-2">
                  <input type="search" id="project_adresse" name="project_adresse" class="form-control"  placeholder="{{ $projet->adresse }}" aria-label="City">
                  <input type="hidden" name="project_id" value = {{ $projet->id }}>
                </div>
              </div>
            </div>
          </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Modifier</button>
        </div>
        </form>
        <!-- End Form -->
        <!-- End Body -->
      </div>
    </div>

  </div>

  <!-- Modal -->
<div class="modal fade" id="upoladFileModal" tabindex="-1" role="dialog" aria-labelledby="upoladFileModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="upoladFileModal">Envoyer un Document</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ route('document-upload') }}" method="POST" enctype="multipart/form-data">
            @csrf
              <div class="col-md-12">
                  <input type="file" name="document" class="form-control">
                  <input type="hidden" name="projet_id" value="{{ $projet->id }}">
                  <input type="text" name="title" placeholder="Donnez un nom à ce document" class="form-control mt-2" required>               
              </div>
      </div>
      <div class="modal-footer">
        <button type="submit" id='buttonDocumentBtn' class="btn btn-primary">Envoyer</button>
      </form>
      </div>
    </div>
  </div>
</div>
<!-- End Modal -->
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

<script>
(function() {
  var placesAutocomplete = places({
  appId: '{{ env('ALGOLIA_APP_ID') }}',
  apiKey: '{{ env('ALGOLIA_SECRET') }}',
  container: document.querySelector('#project_adresse'),
  }).configure({
    countries: ['fr']
  });
 

  placesAutocomplete.on('clear', function() {
    $address.textContent = 'none';
  });

})();
</script>

@endsection
