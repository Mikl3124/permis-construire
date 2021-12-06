<!-- Card -->
<div class="card">
  <div class="card-header-dashboard">
    <!-- Button trigger send Document -->
    <div class="d-flex justify-content-between row">
      <div class="col-md-6 col-sm-12 mb-1">
        <h3 class="card-header-title text-dark">
          <i class="fas fa-home text-primary"></i> Votre projet
        </h3>
      </div>
      <div class="col-md-6 col-sm-12 mb-2 text-center">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editProject">
          Modifier le projet
        </button>
      </div>
    </div>
  </div>
  <!-- Body -->
  <div class="card-body-dashboard">
    <div class="row">
      <div class="col-sm-6 mb-3">
        <!-- Card -->
        <div class="card card-dashed">
          <div class="card-body card-dashed-body">
            <h5>Titre:</h5>
            <p>{{ $projet->title }}</p>
            <h5>Adresse:</h5>
            <p>{{ $projet->adresse }}</p>
            <h5>Nature du projet:</h5>
              @if ($projet->type->name == 'Garage')
                <p>Yahoooooo !!!!</p>
              @elseif ($projet->type->name == 'Piscine')
                <p>Goooooogle !!!!</p>
              @endif
          </div>
        </div>
        <!-- End Card -->
      </div>
      <!-- End Col -->

      <div class="col-sm-6 mb-3">
        <div class="rounded" id='map' style='width: 100%; height: 100%;'></div>
        <!-- End Card -->
      </div>

      <!-- End Col -->
    </div>
    <!-- End Row -->
    <h5>Description du projet:</h5>
    <p class="text-secondary"><i>Exemple: It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here</i></p>
  </div>
  <!-- End Body -->
</div>
<!-- End Card -->
