<div class="card mt-3">
  <!-- Header -->
  <div class="card-header-dashboard">
    <!-- Button trigger send Document -->
    <div class="d-flex justify-content-between row">
      <div class="col-md-6 col-sm-12 mb-2">
        <h3 class="card-header-title text-dark">
          <i class="fas fa-folder text-primary"></i> Vos documents
        </h3>
      </div>
      <div class="col-md-6 col-sm-12 mb-2 text-center">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#upoladFileModal">
          Envoyer un document
        </button>
      </div>
    </div>
  </div>
  <!-- End Header -->
  <!-- Body -->
  <div class="card-body-dashboard">
    <div class="panel-group" id="accordion">
      <div class="panel panel-default">
        <div class="panel-heading">
          <a class="text-dark" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-plus"></span> </i> <h6><i class="fas fa-chevron-down"></i> Documents attendus </h6> </a>
        </div>

        <div id="collapseOne" class="panel-collapse collapse">
          <div class="panel-body">
            <ul class="list-unstyled">
              <a href="">
                <li class="d-flex justify-content-start">
                  <i class="fas fa-times-circle mx-3 text-muted mt-1"></i>
                  <p class="text-muted">Croquis de votre projet <span>(0/1</span> </p>
                </li>
              </a>
                <li class="d-flex justify-content-start">
                  <i class="fas fa-check-circle mx-3 text-success mt-1"></i>
                  <p class="text-success">Photo environnement proche</p>
                </li>
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
