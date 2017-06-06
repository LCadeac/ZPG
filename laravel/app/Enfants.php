<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enfants extends Model {
    protected $table = 'Enfant';



    public static function get_liste() {
        $enfants = self::all();

        return $enfants;
    }



    public static function get_enfant($idEnfant) {
        $enfant = self::where('idEnfant', '==', $idEnfant)->first();

        if (!$enfant) {
            return null;
        }

        return $enfant;
    }



    public static function get_enfants($idEnfant) {
        $prenomEnfant = Enfants
            ::leftJoin('Personne', 'Personne.idPersonne', "=", 'Enfant.idPersonne')
            ->where('Enfant.idEnfant', '=', $idEnfant)
            ->get(['Personne.*']);

        return $prenomEnfant;
    }

}