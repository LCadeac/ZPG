<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enfants extends Model {
    protected $table = 'Enfant';



    public static function get_liste() {
        $enfants = self::all();

        return $enfants;
    }



    public static function get_enfant($id_enfant) {
        $enfant = self::whereCle($id_enfant)->first();

        if (!$enfant) {
            return null;
        }

        return $enfant;
    }


}