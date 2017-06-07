@extends('layout')

<h2 style="color: #f91ecc">
    Fiche de la famille {{$responsables[0][0]->nom}}
</h2>

<div class="row">
@foreach($responsables as $index => $responsable)
    <div id="personne" class="panel panel-primary col-md-3" style="padding: 0px ; margin-left : 50px ; margin-right: 50px">
        <div class="panel-heading">
            <h3 class="panel-title">Responsable n° {{$index + 1}}</h3>
        </div>
        <div class="panel-body">
            <li>Nom : {{$responsables[$index][0]->nom}}</li>
            <li>Prenom : {{$responsables[$index][0]->prenom}}</li>
            <li>Personne : {{$responsables[$index][0]->idPersonne}} </li>
            <li>Sexe : {{$responsables[$index][0]->codeSexe}} </li>
        </div>
    </div>
@endforeach
</div>


<div class="row">
@foreach($enfants as $index => $enfant)
    <div id="personne" class="panel panel-primary col-md-3" style="padding: 0px ; margin-left : 50px ; margin-right: 50px">
        <div class="panel-heading">
            <h3 class="panel-title">Enfant n° {{$index + 1}}</h3>
        </div>
        <div class="panel-body">
            <li>Nom : {{$enfant->nom}}</li>
            <li>Prénom : {{$enfant->prenom}}</li>
            <li>Date de naissance : {{$enfant->dateNaissance}}</li>
        </div>
    </div>
@endforeach
</div>