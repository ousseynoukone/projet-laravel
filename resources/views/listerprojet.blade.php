
 @extends('layout.app')
 @section('content')
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
  @if(count($projets)!=0 )
    @foreach ($projets as $projet )
      
   
    <tr>
      
      <th scope="row">{{$projet->id}}</th>
      <td>{{$projet->description}}</td>
      <td>{{$projet->dateDebut}}</td>
      <td>{{$projet->dateFin}}</td>

      <td>  <a class="btn btn-dark" href="{{route('phases.show', ['phase' =>$projet->id])}}">Details</a>   </td>   


    </tr>
    @endforeach
    @else 
    <p class="text-center mt-3">Il n'y a pas de projet . </p>
    @endif





  </tbody>
</table>

</div>
<a href="{{route('projets.create')}}" class="btn btn-primary col-md-3 offset-4  mt-2">Ajouter un projet</a>

</div>

@endsection


