<?php

namespace App;


use Faker\Provider\Person;

class Famille extends \Illuminate\Database\Eloquent\Model {
    protected $table = 'Famille';



    public static function get_liste() {
        $familles = self::all();

        return $familles;
    }



    public static function get_famille($idFamille) {
        $famille = self::get()->where('idFamille', "==", $idFamille)->first();

        if (!$famille) {
            return null;
        }

        return $famille;
    }



    public static function get_id_respondable_1($idFamille) {
        $idResponsable1 = Famille
            ::leftJoin('Personne', 'Personne.idPersonne', "=", 'Famille.idResponsable1')
            ->where('Famille.idFamille', '=', $idFamille)
            ->get(['Personne.*']);

        return $idResponsable1;
    }



    public static function get_id_respondable_2($idFamille) {
        $idResponsable2 = Famille
            ::leftJoin('Personne', 'Personne.idPersonne', "=", 'Famille.idResponsable2')
            ->where('Famille.idFamille', '=', $idFamille)
            ->get(['Personne.*']);

        return $idResponsable2;
    }



    public static function get_respondable_1($idResponsable) {
        $responsable = Famille
            ::leftJoin('Personne', 'Famille.idResponsable1', '=', 'Personne.idPersonne')
            ->where("idPersonne", "=", $idResponsable)
            ->get(['Personne.*']);

        return $responsable;
    }


    /*public function get_enfants($enfants) {
        $enfants = Personne
            ::leftJoin('Enfant', 'Enfant.id', '=', 'Personne.Enfant_id')
            ->whereConsommateurId($this->id)
            ->get(['Enfant.*']);

        return $enfants;
    }



    public static function get_enfant($idFamille, $id_enfant) {
        $famille = Famille::get_famille($idFamille);

        if (!$famille) {
            dd("Famille $id_famille non trouvée");
        }

        $enfant = Enfants::get_enfant($idFamille);

        if (!$enfant) {
            dd("Enfant $id_enfant non trouvé");
        }

        $personne = Personne
            ::whereConsommateurId($famille->id)
            ->whereCommercantId($enfant->id)
            ->first();

        if (!$personne) {
            dd("Consommateur $idFamille / $id_enfant non trouvé chez le commerçant");
        }


        // retour
        $retour = new \stdClass();

        $retour->famille = $personne->toArray();


        return $retour;
    }*/


}