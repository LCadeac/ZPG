<?php

namespace App;


use Faker\Provider\Person;

class Famille extends \Illuminate\Database\Eloquent\Model {
    protected $table = 'Famille';




    public static function get_famille($idFamille) {
        $famille = self::where('idFamille', $idFamille)->first();

        if (!$famille) {
            return null;
        }

        return $famille;
    }



    public static function get_responsable_1($idFamille) {
        $idResponsable1 = Famille
            ::leftJoin('Personne', 'Personne.idPersonne', "=", 'Famille.idResponsable1')
            ->where('Famille.idFamille', '=', $idFamille)
            ->get(['Personne.*']);

        return $idResponsable1;
    }



    public static function get_responsable_2($idFamille) {
        $idResponsable2 = Famille
            ::leftJoin('Personne', 'Personne.idPersonne', "=", 'Famille.idResponsable2')
            ->where('Famille.idFamille', '=', $idFamille)
            ->get(['Personne.*']);

        return $idResponsable2;
    }




}