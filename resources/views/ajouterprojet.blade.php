
@extends('layout.app')
@section('content')

<form method="post" action="{{route('projets.store')}}">
    @csrf
    <div class="container mt-5">
        <div class="card">
            <div class="card-header text-center ">Ajouter un projet</div>
  <div class="form-group">
    <label for="exampleInputEmail1">Description</label>
    <input type="text"  name="description" required pattern="[\p{L}\p{N}\s]+" title="La descriptions ne peut contenir que des chiffres , lettres et espaces" class="form-control">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Date de debut</label>
    <input type="Date" required class="form-control" name="datedebut" id="exampleInputPassword1" placeholder="Date de debut du projet">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Date de fin</label>
    <input type="Date" required class="form-control "  name = "datefin" id="exampleInputPassword1" placeholder="Date de fin du projet">
  </div>

  <button type="submit" class="btn btn-primary col-md-3 offset-4 ">Ajouter</button>
  <a href="{{route('projets.index')}}" class="btn btn-primary col-md-3 offset-4 mt-2">Liste des projets</a>
</form>

@endsection