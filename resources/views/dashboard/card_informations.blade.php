<!-- Begin Card Information Card -->
    @if ( (!isset($projet->description)) || 
          (!isset($projet->ref_cadastrales)) ||
          (!isset($projet->surface)) ||
          (!isset($declarant->date_naissance)) ||
          (!isset($declarant->lieu_naissance))
          )
      <div class="card text-white bg-danger mt-3">
        <div class="card-header-dashboard">
          <h3 class="card-header-title text-white">
          <i class="fas fa-info-circle text-white"></i> Informations importantes</h3>
        </div>
        <div class="card-body-dashboard">
          <p>Afin de recevoir votre devis, veuillez compléter les informations manquantes:</p>
          <ul>
            @if (!isset($projet->description))
              <li>Description du projet</li>
            @endif
            @if (!isset($projet->ref_cadastrales))
              <li>Références Cadastrales</li>
            @endif
            @if (!isset($projet->surface))
              <li>Surface du terrain</li>
            @endif
            @if (!isset($declarant->date_naissance))
              <li>Date de naissance du déclarant</li>
            @endif
            @if (!isset($declarant->lieu_naissance))
              <li>Lieu de naissance du déclarant</li>
            @endif
          </ul>
        </div>
      </div>
    @else
      <div class="card text-white bg-success mt-3">
        <div class="card-header-dashboard">
          <h3 class="card-header-title text-white">
          <i class="far fa-check-circle"></i> Toutes les informations son complétées</h3>
        </div>
        <div class="card-body-dashboard">
          <p>Surveillez vos emails, vous allez recevoir votre devis dans la journée</p>
        </div>
      </div>
        
    @endif

<!-- End Card Information -->

