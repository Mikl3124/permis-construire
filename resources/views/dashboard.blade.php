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

@include('dashboard.header')

<!-- ========== MAIN CONTENT ========== -->
<main id="content" role="main" class="bg-light">
  @include('dashboard.timeline')
  <div class="col-lg-9">
    @include('dashboard.card_project')
    @include('dashboard.card_informations')
    @include('dashboard.card_declarant')
    @include('dashboard.card_documents')
  </div>
</main>


@include('dashboard.modals.upload_document')
@include('dashboard.modals.edit_project')
@include('dashboard.modals.edit_declarant')

@include('dashboard.js')

@endsection
