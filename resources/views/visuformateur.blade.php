@extends('layouts.app')


@section('content')
<section id="main-content">
    <section class="wrapper">
    <div class="row mt">
            <div class="col-md-12">
                <div class="content-panel" style="text-align: center;">
                        <h1><a href="{{ url('/formateur') }}"><button type="button" class="btn btn-secondary" style="float:left; margin-left:2%;">Retour</button></a>
                            Formateur   
                        </h1>
                </div>
            </div>
    </div>
    <br>
    <br>
    <div class="row mt">
        <div class="col-md-12">
            <div class="content-panel">
                <div class="container">
                    <div class="row">
                        <div class="col-sm"></div>
                        <div class="col-sm">
                            <h4> Nom: </h4> 
                        </div>
                        <div class="col-sm">
                            <p>{{$item->nom}}</p>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm"></div>
                        <div class="col-sm">
                            <h4> Prénom: </h4>
                        </div>
                        <div class="col-sm">
                            <p>{{$item->prenom}}</p>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm"></div>
                        <div class="col-sm">
                            <h4> Télèphone: </h4>
                        </div>
                        <div class="col-sm">
                            <p>{{$item->telephone}}</p>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm"></div>
                        <div class="col-sm">
                            <h4> Mail: </h4>
                        </div>
                        <div class="col-sm">
                            <p>{{$item->mail}}</p>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm"></div>
                        <div class="col-sm">
                            <h4> Adresse: </h4>
                        </div>
                        <div class="col-sm">
                            <p>{{$item->adresse}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
</section> 
@endsection