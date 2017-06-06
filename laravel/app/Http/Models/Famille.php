<?php


class Famille extends \Illuminate\Database\Eloquent\Model {
    protected $table = 'Famille';



    public static function get_liste() {
        $familles = self::all();

        return $familles;
    }



    public static function get_famille($id_famille) {
        $famille = self::whereCle($id_famille)->first();

        if (!$famille) {
            return null;
        }

        return $famille;
    }



    public function get_enfants($enfants) {
        $enfants = \App\Personne
            ::leftJoin('Enfant', 'Enfant.id', '=', 'Personne.Enfant_id')
            ->whereConsommateurId($this->id)
            ->get(['Enfant.*']);

        return $enfants;
    }



    public static function get_enfant($id_famille, $id_enfant) {
        $famille = Famille::get_famille($id_famille);

        if (!$famille) {
            dd("Famille $id_famille non trouvée");
        }

        $enfant = Enfants::get_enfant($id_famille);

        if (!$enfant) {
            dd("Enfant $id_enfant non trouvé");
        }

        $personne = \App\Personne
            ::whereConsommateurId($famille->id)
            ->whereCommercantId($enfant->id)
            ->first();

        if (!$personne) {
            dd("Consommateur $id_famille / $id_enfant non trouvé chez le commerçant");
        }


        // retour
        $retour = new \stdClass();

        $retour->famille = $personne->toArray();


        return $retour;
    }


}