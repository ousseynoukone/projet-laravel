<!DOCTYPE html>
<html lang="fr">
<head>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('build/assets/bootstrap.css') }}" rel="stylesheet">


    <title>Document</title>
</head>
<body class="bg-dark">
  <div class="container mt-5 ">
    <div class="card">
      <div class="card-header bg-dark text-white text-center mt-4">Liste des projets</div>
<table class="table bg-primary text-white">
  <thead>
    <tr>
      <th scope="col">N°</th>
      <th scope="col">Description</th>
      <th scope="col">Date de debut</th>
      <th scope="col">Date de fin</th>
      <th scope="col">Actions </th>

    </tr>
  </thead>
  <tbody>
    
    @foreach ($tabProjet as $projet )
      
   
    <tr>
      
      <th scope="row">{{$projet->id}}</th>
      <td>{{$projet->description}}</td>
      <td>{{$projet->dateDebut}}</td>
      <td>{{$projet->dateFin}}</td>
      <td><a class="btn btn-dark" href="/details?id={{$projet->id}}" >Details</a> </td>


    </tr>
    @endforeach



  </tbody>
</table>

</div>
<a href="/projetsajout" class="btn btn-primary col-md-3 offset-4  mt-2">Ajouter un projet</a>

</div>


</body>
<script src="{{ asset('build/assets/jquery-3.6.0.js') }}"></script>
<script src="{{ asset('build/assets/bootstrap.js') }}"></script>

</html>
