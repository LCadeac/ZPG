@extends('layout')

<h2 style="color: #f91ecc">
    Voici votre fiche familliale !
</h2>

@foreach($responsables as $index => $responsable)
<div id="personne_{{$responsable}}" class="panel panel-primary col-md-3" style="padding: 0px ; margin-right: 50px">
    <div class="panel-heading">
        <h3 class="panel-title">Membre n° {{$index + 1}}</h3>
    </div>
    <div class="panel-body">
        {{--<li>Famille : {{$familles[0]->idFamille}}</li>--}}
        <li>Nom : {{$responsables[$index][0]->nom}}</li>
        <li>Prenom : {{$responsables[$index][0]->prenom}}</li>
        <li>Personne : {{$responsables[$index][0]->idPersonne}} </li>
    </div>
</div>
@endforeach



<script src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>

{{--
<script>
    jQuery.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });

    jQuery('#container_{{$idFamille}}')
        .load('/dossier/{{$idFamille}}', {});
</script>--}}
