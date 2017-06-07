@extends('layout')

<h1 style="color: blueviolet">
    L'historique de vos demandes de jeux
</h1>

<h2>Montant total : {{$montant_total}} €</h2>


@foreach($operations as $index => $operation)
    <div class="panel panel-primary col-md-3" style="padding: 0px ; margin-left : 50px ; margin-right: 50px">
        <div class="panel-body">
            <li>Opération : {{$operation->idOperation}}</li>
            <li>Date : {{$operation->dateOperation}}</li>
            <li>Montant : {{$operation->debit}}</li>


        </div>
    </div>
@endforeach