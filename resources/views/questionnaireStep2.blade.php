@extends('layouts.app')
<script src="https://cdn.jsdelivr.net/npm/places.js@1.19.0"></script>

<!-- Mapbox  -->
<script src='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.css' rel='stylesheet' />

@section('content')

<!-- ========== HEADER ========== -->
<header id="header" class="navbar navbar-expand-lg navbar-end navbar-absolute-top navbar-light navbar-show-hide">
    <nav class="js-mega-menu navbar-nav-wrap">
      <!-- Default Logo -->
      <a class="navbar-brand" href="{{ route('home') }}" aria-label="Front">
        <img class="navbar-brand-logo" src="../assets/img/logopc.svg" alt="Logo">
      </a>
      <!-- End Default Logo -->
    </nav>
</header>
<!-- ========== END HEADER ========== -->

<!-- Content -->
<div class="container content-space-2">
  <!-- Step Form -->
  <div class="js-step-form">
    <div class="row">
      <div class="col-lg-4">
        <!-- Sticky Block -->
        <div id="stickyBlockStartPoint">
          <div class="js-sticky-block">
            <!-- Step -->
            <ul id="uploadResumeStepFormProgress" class="js-step-progress step step-icon-xs step-border-last-0 mt-5">
              <li class="step-item">
                <a class="step-content-wrapper" href="{{ route('questionnaireStep1') }}">
                  <span class="step-icon step-icon-soft-dark">1</span>
                  <div class="step-content">
                    <span class="step-title text-secondary">Inscription</span>
                  </div>
                </a>
              </li>

              <li class="step-item">
                <div class="step-content-wrapper">
                  <span class="step-icon step-icon-soft-primary">2</span>
                  <div class="step-content">
                    <span class="step-title text-primary">Votre Projet</span>
                  </div>
                </div>
              </li>
            </ul>
            <!-- End Step -->
          </div>
        </div>
        <!-- End Sticky Block -->
      </div>
      <!-- End Col -->

      <div id="formContainer" class="col-lg-8">
        <!-- End affichage des erreurs -->
        <!-- Content Step Form -->
        <div id="uploadResumeStepFormContent">
          <!-- Card -->
          <div id="uploadResumeStepBasics" class="card active">
            <!-- Header -->
            <div class="card-header bg-img-start" style="background-image: url(../assets/svg/components/card-1.svg);">
              <div class="flex-grow-1">
                <span class="d-lg-none">Etape 2 sur 2</span>
                <h3 class="card-header-title">Votre Projet</h3>
              </div>
            </div>
            <!-- End Header -->

            <!-- Body -->
            <div class="card-body">
              <div id='map' style='width: 100%; height: 400px;'></div>
              <!-- Adresse -->
              <p><small><i>{{ $projet->adresse }}</i></small></p>
              <form action="{{ route('questionnaire-create') }}" method="POST">
                @csrf
                <div class="row mt-3">
                  <div class="mb-4 field">
                      <input type="search" id="adresse" name="adresse" value="{{ old('adresse')}}" class="form-control" placeholder="Veuillez saisir l'adresse du projet" required>
                        @if ($errors->has('adresse'))
                          <div class="text-danger">
                            <small><i>{{ $errors->first('adresse') }}</i></small></span>
                          </div>
                        @endif
                  </div>
                  <div class="form-group col-sm-12 col-md-6">
                    <div class="mb-4 field">
                      <input type="search" id="prenom" name="prenom" is-invalid value="{{ old('prenom')}}" class="form-control" placeholder="Prénom" required>
                        @if ($errors->has('prenom'))
                          <div class="text-danger">
                            <small><i>{{ $errors->first('prenom') }}</i></small></span>
                          </div>
                        @endif
                    </div>
                  </div>
                  <div class="form-group col-sm-12 col-md-6">
                    <div class="mb-4 field">
                      <input type="search" name="nom" id="nom" is-invalid value="{{ old('nom')}}" class="form-control" placeholder="Nom" required>
                        @if ($errors->has('nom'))
                          <div class="text-danger">
                            <small><i>{{ $errors->first('nom') }}</i></small></span>
                          </div>
                        @endif
                    </div>
                  </div>
                                    <div class="form-group col-sm-12 col-md-6">
                    <div class="mb-4 field">
                      <input type="text" id="telephone" name="telephone" is-invalid value="{{ old('telephone')}}" class="form-control" placeholder="Téléphone" required>
                        @if ($errors->has('telephone'))
                          <div class="text-danger">
                            <small><i>{{ $errors->first('telephone') }}</i></small></span>
                          </div>
                        @endif
                    </div>
                  </div>
                  <div class="form-group col-sm-12 col-md-6">
                    <div class="mb-4 field">
                      <input type="email" id="email" is-invalid name="email" value="{{ old('email')}}" class="form-control" placeholder="Adresse e-mail" required>
                        @if ($errors->has('email'))
                          <div class="text-danger">
                            <small><i>{{ $errors->first('email') }}</i></small></span>
                          </div>
                        @endif
                    </div>
                  </div>
                </div>

                <!-- Footer -->
                <div class="card-footer pt-0">
                  <div class="d-flex justify-content-between align-items-center">
                    <a href="{{ route('questionnaireStep1') }}" class="btn btn-outline-secondary btn-sm"> <i class="bi-chevron-left small ms-1"></i> Précédent
                    </a>
                    <button type="submit" class="btn btn-primary submit-btn">Suivant <i class="bi-chevron-right small ms-1"></i>
                    </button>
                  </div>
                </div>
                <!-- End Footer -->
              </form>

            </div>
            <!-- End Body -->


          </div>
          <!-- End Card -->
          @if (Auth::guest())
            <div class="mt-3">
              <a href="{{ route('login') }}"><p>Déjà client? Connectez-vous</p></a>
            </div>
          @endif
        </div>
      </div>
      <!-- End Col -->
    </div>
    <!-- End Row -->
  </div>
  <!-- End Step Form -->
</div>
<!-- End Content -->

  <script>
(function() {
  var placesAutocomplete = places({
   appId: '{{ env('ALGOLIA_APP_ID') }}',
  apiKey: '{{ env('ALGOLIA_SECRET') }}',
    container: document.querySelector('#adresse')
  });

  placesAutocomplete.on('clear', function() {
    $address.textContent = 'none';
  });

})();
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
        limit: 1
    })
        .send()
        .then(function (response) {
            if (response && response.body && response.body.features && response.body.features.length) {
                var feature = response.body.features[0];
                var map = new mapboxgl.Map({
                    container: 'map',
                    style: 'mapbox://styles/mapbox/streets-v11',
                    center: feature.center,
                    zoom: 8
                });
                new mapboxgl.Marker()
                    .setLngLat(feature.center)
                    .addTo(map);
            }
        });
</script>

@endsection
