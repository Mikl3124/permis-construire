@extends('layouts.app')

@section('content')

<!-- ========== HEADER ========== -->
<header id="header" class="navbar navbar-expand-lg navbar-end navbar-absolute-top navbar-light navbar-show-hide"
    data-hs-header-options='{
      "fixMoment": 1000,
      "fixEffect": "slide"
    }'>
    <nav class="js-mega-menu navbar-nav-wrap">
      <!-- Default Logo -->
      <a class="navbar-brand" href="{{ route('home') }}" aria-label="Front">
        <img class="navbar-brand-logo" src="../assets/img/logopc.svg" alt="Logo">
      </a>
      </div>
    </nav>
</header>
<!-- ========== END HEADER ========== -->


<div class="container content-space-2 content-space-lg-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="">
              <!-- Heading -->
              <div class="text-center mb-5 mb-md-7">
                <h1 class="h2">Bienvenue</h1>
                <p>Login to manage your account.</p>
              </div>
              <!-- End Heading -->
                <div class="">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                         <div class="mb-4">
        <label class="form-label" for="signupSimpleLoginEmail">Your email</label>
        <input type="email" class="form-control form-control-lg" name="email" value="{{ old('email') }}" id="signupSimpleLoginEmail" placeholder="email@site.com" aria-label="email@site.com" required>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
      </div>
      <!-- End Form -->

      <!-- Form -->
      <div class="mb-4">
        <div class="d-flex justify-content-between align-items-center">
          <label class="form-label" for="signupSimpleLoginPassword">Mot de passe</label>

          <a class="form-label-link" href="{{ route('password.request') }}">Mot de passe oublié ?</a>
        </div>

        <div class="input-group input-group-merge" data-hs-validation-validate-class>
          <input type="password" class="js-toggle-password form-control form-control-lg" @error('password') is-invalid @enderror" name="password" id="signupSimpleLoginPassword" required
                data-hs-toggle-password-options='{
                 "target": "#changePassTarget",
                 "defaultClass": "bi-eye-slash",
                 "showClass": "bi-eye",
                 "classChangeTarget": "#changePassIcon"
               }'>
          <a id="changePassTarget" class="input-group-append input-group-text" href="javascript:;">
            <i id="changePassIcon" class="bi-eye"></i>
          </a>
        </div>

        <span class="invalid-feedback">Veuillez saisir un mot de passe valide</span>
      </div>
      <!-- End Form -->
                            <div class="d-grid mb-3">
                                <button type="submit" class="btn btn-primary">
                                    Connexion
                                </button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- JS Plugins Init. -->
<script>
  (function() {

    // INITIALIZATION OF TOGGLE PASSWORD
    // =======================================================
    new HSTogglePassword('.js-toggle-password')
  })()
</script>

@endsection
