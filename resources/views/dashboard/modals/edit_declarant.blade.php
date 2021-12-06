<!-- Modal Edit Déclarant-->
<div class="modal fade" id="editDeclarant" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="upoladFileModal">Modifier vos informations</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="#" method="POST">
          @csrf
        <div class="row">
          <div class="form-group col-md-6 col-sm-12">
            <label for="declarantPrenom">Prénom du déclarant</label>
            <input type="text" name="document" class="form-control" value=" {{ $user->prenom }} " required>
          </div>
          <div class="form-group col-md-6 col-sm-12">
            <label for="declarantName">Nom du déclarant</label>
            <input type="text" name="document" class="form-control" value=" {{ $user->name }} " required>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-6 col-sm-12">
            <label for="declarantPrenom">Date de naissance</label>
            <input type="text" name="document" class="form-control" value=" {{ $user->prenom }} " required>
          </div>
          <div class="form-group col-md-6 col-sm-12">
            <label for="declarantName">Lieu de naissance</label>
            <input type="text" name="document" class="form-control" value=" {{ $user->name }} " required>
          </div>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Adresse du déclarant</label>
          <input type="search" id="declarant_adresse" name="declarant_adresse" class="form-control"  placeholder="{{ $projet->adresse }}" aria-label="City">
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
