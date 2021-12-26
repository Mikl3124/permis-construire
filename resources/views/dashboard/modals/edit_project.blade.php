<!-- Modal Edit Project-->
<div class="modal fade" id="editProject" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="upoladFileModal">Modifier le projet</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ route('project-edit') }}" method="POST">
          <input type="hidden" name="project_id" value="{{ $projet->id }}">
          @csrf
          <div class="row">
            <div class="form-group col-md-6 col-sm-12">
              <label for="exampleInputEmail1">Titre</label>
              <input type="text" name="title" class="form-control" value=" {{$projet->title}} " required>
            </div>
            <div class="form-group col-md-6 col-sm-12">
                <label for="type">Nature du projet</label>
                <select class="form-select" id="type" name="type_id" required>
                  @foreach ($types as $type)
                    <option value="{{ $type->id }}"
                      @if ($projet->type_id === $type->id)
                          selected
                      @endif >
                      {{ $type->name }}
                    </option>
                  @endforeach

                </select>
            </div>
          </div>
          <div class="form-group">
            <label for="project_adresse">Adresse</label>
            <input type="search" id="project_adresse" name="adresse" class="form-control"  placeholder="{{ $projet->adresse }}" value="{{ $projet->adresse }}" aria-label="City" required>
          </div>
          <div class="form-group">
            <div class="form-group">
              <label for="descriptionProjet">Description du projet</label>
              <textarea class="form-control" name="description" id="descriptionProjet" rows="3">{{ $projet->description }}</textarea>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-6 col-sm-12">
              <label for="exampleInputEmail1">Références cadastrales</label>
              <input type="text" name="ref_cadastrales" class="form-control" placeholder="Si inconnu mettre 0" value="{{($projet->ref_cadastrales)}}">
            </div>
            <div class="form-group col-md-6 col-sm-12">
              <label for="exampleInputEmail1">Surface du terrain</label>
              <input type="text" name="surface_terrain" class="form-control" placeholder="Si inconnu mettre 0" value="{{ $projet->surface }}">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" id='buttonDocumentBtn' class="btn btn-primary">Enregistrer</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Modal -->
