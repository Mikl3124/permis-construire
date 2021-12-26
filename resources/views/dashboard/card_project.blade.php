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
            <p>{{ $projet->type->name }}</p>
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
    <div class="row">
      <div class="col-6">
        <h5>Description du projet:</h5>
          @if (isset($projet->description))
            <p> {{ $projet->description }} </p>  
          @else
              <p class="text-danger"><i>Exemple: Construction d'une maison d'habitation à étage, toiture 2 pentes en tuile de type romane vieillies, avant-toit et menuiseries en PVC de couleur blanc...</i></p>
          @endif
      </div>

      <div class="col-6">
        <h5>Terrain:</h5>
          <p><u>Références Cadastrales:</u>
          @if (isset($projet->ref_cadastrales))
            {{ $projet->ref_cadastrales }}   
          @else
            <span class="text-danger"><i>Veuillez renseigner cette information</i></span>
          @endif
          </p>
          <p><u>Surface du terrain:</u>
          @if (isset($projet->surface))
            {{ $projet->surface }}
          @else
            <span class="text-danger"><i>Veuillez renseigner cette information</i></span>
          @endif
          </p>	
      </div>
      
    </div>
    
      
  </div>
  <!-- End Body -->
</div>
<!-- End Card -->