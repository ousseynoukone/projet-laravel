
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
            <div class="card-header text-center ">Ajouter une phase</div>
  <div class="form-group">
    <label for="exampleInputEmail1">Phase</label>
    <input type="text" required  class="form-control" name="phase" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Date de debut</label>
    <input type="Date" required class="form-control" name="datedebut" id="exampleInputPassword1" placeholder="Date de debut de la phase">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Date de fin</label>
    <input type="Date" required class="form-control "  name = "datefin" id="exampleInputPassword1" placeholder="Date de fin de la phase">
  </div>

  <button type="submit" class="btn btn-primary col-md-3 offset-4 ">Ajouter</button>
  <a href="#" class="btn btn-primary col-md-3 offset-4 mt-2" onclick="history.back()">Liste des phases</a>


</form>

</div>
</div>
</body>
</html>