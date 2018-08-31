@extends('layouts.app')


@section('content')
<section id="main-content">
    <table id="example" class="display table table-striped table-advance table-hover">
        <h4> Ajouter un Formateur </h4>
    </table>
    <br>
    <br>
    <form action="{{-- url à indiquer ici --}}" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">Nom</label>
            <input type="textarea" class="form-control" id="exampleFormControlInput1" placeholder="Nom" required name="nom" value="{{$item->nom}}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Prénom</label>
            <input type="textarea" class="form-control" id="exampleFormControlInput1" placeholder="Prenom" required name="prenom" value="{{$item->prenom}}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Télèphone</label>
            <input type="textarea" class="form-control" id="exampleFormControlInput1" placeholder="exemple 06 34 55 22 11" name="telephone" value="{{$item->telephone}}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Mail</label>
            <input type="textarea" class="form-control" id="exampleFormControlInput1" placeholder="exemple@gmail.com" name="mail" value="{{$item->mail}}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Adresse</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="adresse">{{--variable à afficher ici--}}</textarea>
        </div>
        <div class="form-group">
            <label class="col-md-5 control-label" for="singlebutton"></label>
          <div class="col-md-5 center-block">
            <button type="submit" class="btn btn-primary center-block">Valider</button>
          </div>
        </div>
    </form>
</section>
@endsection
