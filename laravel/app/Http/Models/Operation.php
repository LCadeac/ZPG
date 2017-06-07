<?php

namespace App;


class Operation extends \Illuminate\Database\Eloquent\Model {

    protected $table = 'Operation';



    public static function get_operation($idFamille, $idCompte) {
        $operation = Famille
            ::leftJoin('Operation', 'Operation.idFamille', "=", 'Famille.idFamille')
            ->where('Operation.idFamille', $idFamille)
            ->where('Operation.idCompte', $idCompte)
            ->get(['Operation.*']);

        return $operation;
    }


}