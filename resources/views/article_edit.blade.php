@extends('layouts.app')

@section('content')
    <form action="/article/store" method="POST">
    @csrf
    <div class="form-group">
      <label for="name">Nom</label>
      <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="Entrer le nom de l'image">
    </div>
    <div class="form-group">
      <label for="price">Prix (€)</label>
      <input type="number" class="form-control" id="price" placeholder="Entrer le prix du produit">
    </div>
    <div class="form-group">
        <label for="picture">Importer une image</label>
        <input type="file" class="form-control" id="picture">
    </div>
    <button type="submit" class="btn btn-primary">Valider</button>
  </form>

@endsection
