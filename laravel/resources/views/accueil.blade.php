@extends('layout')

<h1 style="color: #e22aaf">
    Bienvenue sur l'espace personnel de votre famille {{$idFamille}} !
</h1>
<div class="row container">
    <div class="panel panel-primary col-md-3" style="padding: 0px ; margin-right: 50px">
        <div class="panel-heading">
            <h3 class="panel-title">
                <input type="button" class="btn-primary" value="Fiche famille"
                       onclick="javascript:location.href='/dossier/{{$idFamille}}'"></h3>
        </div>
        <div class="panel-body">
            <li>Responsables</li>
            <li>Enfants</li>
        </div>
    </div>
    <div class="panel panel-primary col-md-3" style="padding: 0px ; margin-right: 50px">
        <div class="panel-heading">
            <h3 class="panel-title"><input type="button" class="btn-primary" value="Historique garderie"
                                           onclick="javascript:location.href='/historique/{{$idFamille}}/{{$idCompte}}/1'"></h3>
        </div>
        <div class="panel-body">
            <li>Date</li>
            <li>Durée</li>
            <li>Montant</li>
        </div>
    </div>
    <div class="panel panel-primary col-md-3" style="padding: 0px ; margin-right: 50px">
        <div class="panel-heading">
            <h3 class="panel-title"><input type="button" class="btn-primary" value="Historique jeux"
                                           onclick="javascript:location.href='/historique/{{$idFamille}}/{{$idCompte}}/3'"></h3>
        </div>
        <div class="panel-body">
            <li>Date</li>
            <li>Durée</li>
            <li>Montant</li>
        </div>
    </div>
    <div class="panel panel-primary col-md-3" style="padding: 0px ; margin-right: 50px">
        <div class="panel-heading">
            <h3 class="panel-title"><input type="button" class="btn-primary" value="Historique café"
                                           onclick="javascript:location.href='/historique/{{$idFamille}}/{{$idCompte}}/4'"></h3>
        </div>
        <div class="panel-body">
            <li>Date</li>
            <li>Durée</li>
            <li>Montant</li>
        </div>
    </div>
</div>