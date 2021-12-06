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
          <p>{{ $user->prenom }}</p>
        </div>
        <div class="col-md-6 col-sm-12">
          <h5>Nom:</h5>
          <p>{{ $user->name }}</p>
        </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-sm-12">
        <h5>Date de naissance:</h5>
        <p>{{ $user->prenom }}</p>
      </div>
      <div class="col-md-6 col-sm-12">
        <h5>Lieu de naissance:</h5>
        <p>{{ $user->name }}</p>
      </div>
  </div>

    <h5>Adresse:</h5>
    <p class="text-secondary">Veuillez compléter cette information</p>
  </div>
</div>
<!-- End Card -->
