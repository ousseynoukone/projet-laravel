
<!DOCTYPE html>
<html lang="fr">
<head>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('build/assets/bootstrap.css') }}" rel="stylesheet">


    <title>Document</title>
</head><body>


<form method="post">
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
  <a href="/projets" class="btn btn-primary col-md-3 offset-4 mt-2">Liste des projets</a>
</form>

</div>
</div>
</body>
</html>