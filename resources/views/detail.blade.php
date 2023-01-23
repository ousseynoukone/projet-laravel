@extends('layout.app')
@section('content')
  <div class="container mt-5 ">
    <div class="card">
      <div class="card-header bg-dark text-white text-center mt-4">Liste des phases</div>
<table class="table bg-primary text-white">
  <thead>
    <tr>
      <th scope="col">N°</th>
      <th scope="col">Phase</th>
      <th scope="col">Date de debut</th>
      <th scope="col">Date de fin</th>

    </tr>
  </thead>
  <tbody>

  @if (count($tab[0]) > 0)
  @foreach ($tab[0] as $phase)
    <tr>
      <th scope="row">{{ $phase->id }}</th>
      <td>{{ $phase->phase }}</td>
      <td>{{ $phase->dateDebut }}</td>
      <td>{{ $phase->dateFin }}</td>
    </tr>
  @endforeach
@else
  <p class="text-center mt-3">Il n'y a pas de phases dans ce projet.</p>
@endif

  </tbody>
</table>

</div>
  <a href="/phasesajout?id={{$tab[1]}}" class="btn btn-primary col-md-3 offset-4  mt-2">Ajouter une phase</a>

<a href="/projets" class="btn btn-primary col-md-3 offset-4  mt-2">Liste des projets</a>

</div>

@endsection