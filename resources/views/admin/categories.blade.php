@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Content Section -->
<div class="container content-space-1">
  <div class="row">
    @include('admin.partials.sidebar')
    <!-- End Col -->
    <div class="col-lg-9">
      <h1 class="text-center mb-5">Gestion de catégories</h1>
      <h5>Liste des catégories</h5>
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nom</th>
            <th scope="col">Image</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($categories as $categorie)
          <tr>
            <td>{{ $categorie->id }}</td>
            <td>{{ $categorie->name }}</td>
            <td>""</td>
            <td><a class="btn btn-danger btn-sm" href="#">Supprimer</a></td>
          @endforeach
          <tr>
        </tbody>
      </table>

      <h5>Ajouter une catégorie</h5>
      <form action="{{ route('categorie-add') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6 col-sm-12 mt-1">
              <input class="form-control" type="text" name="name" placeholder="Nom de la catégorie" required>
            </div>
            <div class="col-md-6 col-sm-12 mt-1">
              <input type="file" name="document" class="form-control" class="@error('document') is-invalid @enderror" required>
              @error('document')
                  <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Enregistrer</button>
      </form>
    </div>
  </div>
</div>
@endsection
