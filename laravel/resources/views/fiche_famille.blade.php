@extends('layout')

<h2 style="color: blueviolet">
    Voici votre fiche familliale, famille {{$id_famille}}
</h2>


<div class="panel panel-primary col-md-3" style="padding: 0px ; margin-right: 50px">
    <div class="panel-heading">
        <h3 class="panel-title">Informations relatives à votre famille :</h3>
    </div>
    <div class="panel-body">
        <li>Famille : {{$id_famille}}</li>
        <li>Responsable 1 : {{$id_famille}}</li>
        <li>Responsable 2 : {{$id_famille}}</li>
        <li>Foyer : {{$id_famille}}</li>
        <li>Enfants : {{$id_enfant}}</li>
    </div>
</div>


<div id="#container_{{$id_enfant}}">
</div>

<script>
    jQuery.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });

    jQuery('#container_{{$id_enfant}}')
        .load('/dossier/{{$id_famille}}', {});
</script>