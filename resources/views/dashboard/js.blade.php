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

<script>
  (function() {
  var placesAutocomplete = places({
  appId: '{{ env('ALGOLIA_APP_ID') }}',
  apiKey: '{{ env('ALGOLIA_SECRET') }}',
  container: document.querySelector('#declarant_adresse'),
  }).configure({
    countries: ['fr']
  });


  placesAutocomplete.on('clear', function() {
    $address.textContent = 'none';
  });

  })();
  </script>

<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>

<script text="text/javascript">
$(document).ready(function(){
  $('#type_document').change(function(){
      var val = $('#type_document').val();
      if (val == 0) {
          $('#buttonDocumentBtn').attr('disabled','disabled');
      }else{
          $('#buttonDocumentBtn').removeAttr('disabled');
      }
  });
});



</script>
