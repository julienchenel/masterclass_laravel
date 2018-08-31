@extends('layouts.app')



@section('content')
<table class="table table-striped table-dark">
    <h4> Formateurs
        <a href="{{ url('/formulaireformateur') }}"><button type="button" class="btn btn-success"style="float:right;">Ajouter</button></a>
   </h4>
     <hr>

  <thead>
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
      <th scope="col">Mail</th>
      <th scope="col">Adresse</th>
      <th scope="col">Télèphone</th>
      <th></th>
    </tr>
  </thead>
      <tbody>
          @foreach($data as $item)
          <tr class="item{{$item->id}}">
              <td>{{--  url vers fiche perso formateur (view : visuformateur) --}}</td>
              <td>{{$item->prenom}}</td>
              <td>{{$item->mail}}</td>
              <td>{{$item->adresse}}</td>
              <td>{{$item->telephone}}</td>
              <td><a href="{{ url('/formulaireformateur/'.$item->id) }}"><button class="btn btn-info">
                  <span class="glyphicon glyphicon-edit"></span> Editer
              </button></a>
              <a href="{{ url('/formulaireformateur/'.$item->id.'/delete') }}"><button class="btn btn-danger">
              <span class="glyphicon glyphicon-trash"></span> Supprimer
              </button></a></td>
            </tr>
      </tbody>
      @endforeach
  </tbody>
</table>
@endsection
