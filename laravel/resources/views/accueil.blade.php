@extends('layout')

<h1 style="color: #e22aaf">
    Bienvenue sur l'espace personnel de votre famille !
</h1>
<div class="row container">
    <div class="panel panel-primary col-md-3" style="padding: 0px ; margin-right: 50px">
        <div class="panel-heading">
            <h3 class="panel-title">
                <input type="button" value="Fiche famille"
                       onclick="javascript:location.href='/dossier/20001/29786'"></h3>
        </div>
        <div class="panel-body">
            <li>Responsables</li>
            <li>Enfants</li>
        </div>
    </div>
    <div class="panel panel-primary col-md-3" style="padding: 0px ; margin-right: 50px">
        <div class="panel-heading">
            <h3 class="panel-title">Historique garderie</h3>
        </div>
        <div class="panel-body">
            <li>Date</li>
            <li>Durée</li>
            <li>Montant</li>
        </div>
    </div>
    <div class="panel panel-primary col-md-3" style="padding: 0px ; margin-right: 50px">
        <div class="panel-heading">
            <h3 class="panel-title">Historique jeux</h3>
        </div>
        <div class="panel-body">
            <li>Date</li>
            <li>Durée</li>
            <li>Montant</li>
        </div>
    </div>
    <div class="panel panel-primary col-md-3" style="padding: 0px ; margin-right: 50px">
        <div class="panel-heading">
            <h3 class="panel-title">Historique café</h3>
        </div>
        <div class="panel-body">
            <li>Date</li>
            <li>Durée</li>
            <li>Montant</li>
        </div>
    </div>
</div>