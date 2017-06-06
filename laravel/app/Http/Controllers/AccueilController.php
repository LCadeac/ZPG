<?php
/**
 * Created by PhpStorm.
 * User: Lucien
 * Date: 02/06/2017
 * Time: 10:55
 */

namespace App\Http\Controllers;


use App\Enfants;
use App\Famille;
use Illuminate\Support\Facades\App;

class AccueilController extends Controller {


    public static function accueil($idFamille) {
        $idCompte = 2;

        return view('accueil', compact('idFamille', 'idCompte'));
    }



    public static function fiche_famille($idFamille, $idEnfant) {
        $famille = Famille::get_famille($idFamille);

//        $enfants = $famille->get_enfants();
        return view('fiche_famille', compact('idFamille', 'idEnfant', 'famille'));
    }



    public static function ma_famille($idFamille) {

        $responsable_1 = Famille::get_id_respondable_1($idFamille);
        $responsable_2 = Famille::get_id_respondable_2($idFamille);
        $liste_enfants = Enfants::get_liste()->where('idFamille', '==', $idFamille);
        foreach ($liste_enfants as $index => $liste_enfant) {
            $idEnfant = $liste_enfant->idEnfant;
            $enfants[$index] = Enfants::get_enfants($idEnfant);

        }
        $responsables = [$responsable_1, $responsable_2];




        return view('fiche_famille', compact('idFamille', 'familles', 'responsables', 'enfants'));
    }



    public static function get_enfant($idFamille) {
        $enfants = Enfants::get_liste()->where('idFamille', '==', $idFamille);

        return $enfants;
    }



    public static function histo_garderie($idFamille, $idCompte) {
        return view('histo_garderie', compact('idFamille', 'idCompte'));
    }



    public static function histo_jeux() {
        return view('histo_jeux');
    }



    public static function histo_cafe() {
        return view('histo_cafe');
    }


}