@extends('layouts.app')

<!-- Mapbox  -->
<script src='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.css' rel='stylesheet' />
<link rel="stylesheet" href="./assets/vendor/tom-select/dist/css/tom-select.bootstrap5.css">
<script src="./assets/vendor/tom-select/dist/js/tom-select.complete.min.js"></script>

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
              <form action="{{ route('questionnaire-create') }}" method="POST">
                @csrf
                {{--<div class="row mt-5">
                  <div class="mb-4 field">
                      <!-- Select -->
                      <div class="tom-select-custom">
                        <select class="js-select form-select" autocomplete="off"
                              data-hs-tom-select-options='{
                                "placeholder": "Quel est votre projet ?...",
                                "hideSearch": true
                              }' onchange="showDiv(this)">
                          <option value="">Quel est votre projet ?</option>
                          <option value="1">Construire</option>
                          <option value="2">Agrandir</option>
                          <option value="3">Aménager</option>
                          <option value="4">Rénover</option>
                          <option value="5">Autre</option>
                        </select>
                      </div>
                      <!-- End Select -->
                        @if ($errors->has('type'))
                          <div class="text-danger">
                            <small><i>{{ $errors->first('type') }}</i></small></span>
                          </div>
                        @endif
                  </div>
                  <div id="maison" style="display:none;">
                    <div class="mb-4 field">
                          <input type="text" id="surface" name="surface" value="{{ $projet->surface }}" class="form-control" placeholder="Quelle sera la surface de la maison?">
                            @if ($errors->has('surface'))
                              <div class="text-danger">
                                <small><i>{{ $errors->first('surface') }}</i></small></span>
                              </div>
                            @endif
                      </div>
                  </div>
                </div> --}}
                <div class="row gx-3 mt-5">
                  <h3 class="text-center">Quel est votre projet ?</h3>
                  <div class="col-6 col-md-3 mb-3">
                    <!-- Radio Check -->
                    <div class="form-check form-check-card text-center">
                      <input class="form-check-input" type="radio" name="typeOfListing" id="typeOfListing1">
                      <label class="form-check-label" for="typeOfListing1">
                        <img class="w-50 mb-3" src="../assets/svg/illustrations/maison.png" alt="maison">
                        <span class="d-block">Maison</span>
                      </label>
                    </div>
                    <!-- End Radio Check -->
                  </div>
                  <!-- End Col -->

                  <div class="col-6 col-md-3 mb-3">
                    <!-- Radio Check -->
                    <div class="form-check form-check-card text-center">
                      <input class="form-check-input" type="radio" name="typeOfListing" id="typeOfListing2" checked>
                      <label class="form-check-label" for="typeOfListing2">
                        <img class="w-50 mb-3" src="../assets/svg/illustrations/garage.png" alt="garage">
                        <span class="d-block">Garage</span>
                      </label>
                    </div>
                    <!-- End Radio Check -->
                  </div>
                  <!-- End Col -->

                  <div class="col-6 col-md-3 mb-3">
                    <!-- Radio Check -->
                    <div class="form-check form-check-card text-center">
                      <input class="form-check-input" type="radio" name="typeOfListing" id="typeOfListing3">
                      <label class="form-check-label" for="typeOfListing3">
                        <img class="w-50 mb-3" src="../assets/svg/illustrations/piscine.png" alt="piscine">
                        <span class="d-block">Piscine</span>
                      </label>
                    </div>
                    <!-- End Radio Check -->
                  </div>
                  <!-- End Col -->

                  <div class="col-6 col-md-3 mb-3">
                    <!-- Radio Check -->
                    <div class="form-check form-check-card text-center">
                      <input class="form-check-input" type="radio" name="typeOfListing" id="typeOfListing4">
                      <label class="form-check-label" for="typeOfListing4">
                        <img class="w-50 mb-3" src="../assets/svg/illustrations/farm-land.svg" alt="SVG">
                        <span class="d-block">Farms/Land</span>
                      </label>
                    </div>
                    <!-- End Radio Check -->
                  </div>
                  <!-- End Col -->
                </div>
                <!-- End Row -->

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

<script type="text/javascript">
function showDiv(select){
   if(select.value==1){
    document.getElementById('maison').style.display = "block";
   } else{
    document.getElementById('hidden_div').style.display = "none";
   }
}
</script>

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
                    zoom: 15,
                    interactive: false
                });
                new mapboxgl.Marker()
                    .setLngLat(feature.center)
                    .addTo(map);
            }
        });

</script>

<script>
  (function() {
    // INITIALIZATION OF SELECT
    // =======================================================
    HSCore.components.HSTomSelect.init('.js-select')
  });
</script>



@endsection
