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
      <div class="card-header bg-dark text-white text-center mt-4">Liste des etdudiants</div>
<table class="table bg-primary text-white">
  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Niveau</th>
      <th scope="col">Langue preférée</th>
      <th scope="col">age</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Kone</td>
      <td>Ousseynou</td>
      <td>Bon</td>
      <td>php</td>
      <td>22</td>
    </tr>

    <tr>
      <th scope="row">2</th>
      <td>Djaafar</td>
      <td>Elmane</td>
      <td>Excellent</td>
      <td>Java</td>
      <td>20</td>
    </tr>
  </tbody>
</table>
</div>
</div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

</body>
<script src="{{ asset('build/assets/jquery-3.6.0.js') }}"></script>
<script src="{{ asset('build/assets/bootstrap.js') }}"></script>

</html>
