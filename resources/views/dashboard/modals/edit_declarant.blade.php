<!-- Modal Edit Déclarant-->
<div class="modal fade" id="editDeclarant" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="upoladFileModal">Modifier vos informations</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ route('declarant-create') }}"" method="POST">
          <input type="hidden" name="project_id" value='{{ $projet->id }}'>
          @csrf
        <div class="row">
          <div class="form-group col-md-6 col-sm-12">
            <label for="declarantPrenom">Prénom du déclarant</label>
            <input type="text" name="prenom" class="form-control" value="{{ isset($declarant->prenom) ? "$declarant->prenom" : "$user->prenom" }}" required>
          </div>
          <div class="form-group col-md-6 col-sm-12">
            <label for="declarantName">Nom du déclarant</label>
            <input type="text" name="nom" class="form-control" value="{{ isset($declarant->nom) ? "$declarant->nom" : "$user->name" }}" required>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-6 col-sm-12">
            <label for="declarantPrenom">Date de naissance</label>
            <input type="text" name="date" class="form-control" value="{{ isset($declarant->date_naissance) ? "$declarant->date_naissance" : "" }}"">
          </div>
          <div class="form-group col-md-6 col-sm-12">
            <label for="declarantName">Lieu de naissance</label>
            <input type="text" name="lieu" class="form-control" value="{{ isset($declarant->lieu_naissance) ? "$declarant->lieu_naissance" : "" }}"">
          </div>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Adresse du déclarant</label>
          <input type="search" id="declarant_adresse" name="adresse" class="form-control"  placeholder="{{ isset($declarant->adresse) ? "$declarant->adresse" : "$user->adresse" }}"" aria-label="City">
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" id='buttonDocumentBtn' class="btn btn-primary">Modifier</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End Modal -->
