<!-- Modal Upload document-->
<div class="modal fade" id="upoladFileModal" tabindex="-1" role="dialog" aria-labelledby="upoladFileModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="upoladFileModal">Envoyer un Document</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ route('document-upload') }}" method="POST" enctype="multipart/form-data">
            @csrf
              <div class="col-md-12">
                <div class="form-group">
                  <input type="file" name="document" class="form-control" required>
                  <input type="hidden" name="projet_id" value="{{ $projet->id }}">
                </div>
                <div class="form-group">
                  <div class="tom-select-custom">
                    <select class="form-select" id="type_document" required>
                      <option value="0" selected>Veuillez choisir le type de document...</option>
                      <option value="1">Croquis du projet</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                </div>
              </div>
      </div>
      <div class="modal-footer">
        <button type="submit" id='buttonDocumentBtn' class="btn btn-primary" disabled>Envoyer</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- End Modal -->
