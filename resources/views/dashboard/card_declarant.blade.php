<div class="card mt-3">
  <!-- Header -->
  <div class="card-header-dashboard">
    <div class="d-flex justify-content-between row">
      <div class="col-md-6 col-sm-12 mb-2">
        <h3 class="card-header-title text-dark">
          <i class="fas fa-address-card text-primary"></i> Le déclarant
        </h3>
      </div>
      <div class="col-md-6 col-sm-12 text-center mb-2">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editDeclarant">
          Modifier le déclarant
        </button>
      </div>
    </div>
  </div>
  <!-- End Header -->
  <!-- Body -->
  <div class="card-body-dashboard">
    <div class="row">
      <div class="col-md-6 col-sm-12">
        <h5>Prénom:</h5>
        @if (isset($declarant->prenom))
          <p>{{ $declarant->prenom }}</p>     
        @else
          <p>{{ $user->prenom }}</p>
        @endif
      </div>
      <div class="col-md-6 col-sm-12">
        <h5>Nom:</h5>
        @if (isset($declarant->nom))
        <p>{{ $declarant->nom }}</p>
        @else
          <p>{{ $user->name }}</p>
        @endif
      </div>
      <div class="col-md-6 col-sm-12 mt-2">
        <h5>Date de naissance:</h5>
        @if (isset($declarant->date))
          {{ $declarant->date }}
        @else
          <p class="text-secondary"><i>Veuillez renseigner cette information</i></p>
        @endif
      </div>
      <div class="col-md-6 col-sm-12 mt-2">
        <h5>Lieu de naissance:</h5>
          @if (isset($declarant->lieu))
            {{ $declarant->lieu }}
          @else
            <p class="text-secondary"><i>Veuillez renseigner cette information</i></p>
          @endif
      </div>
      <div class="col-md-6 col-sm-12">
        <h5>Adresse:</h5>
          @if (isset($declarant->adresse))
            {{ $declarant->adresse }}
          @else
            {{ $user->adresse }}
          @endif
      </div>
    </div>
  </div>
</div>
<!-- End Card -->
