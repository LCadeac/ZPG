<?php
/**
 * Created by PhpStorm.
 * User: Lucien
 * Date: 02/06/2017
 * Time: 10:55
 */

namespace App\Http\Controllers;


use App\Famille;
use Illuminate\Support\Facades\App;

class AccueilController extends Controller {

    public static function accueil() {
        return view('accueil');
    }



    public static function fiche_famille($idFamille, $idEnfant) {
        $famille = Famille::get_famille($idFamille);

//        $enfants = $famille->get_enfants();
        return view('fiche_famille', compact('idFamille', 'idEnfant', 'famille'));
    }



    public static function ma_famille($idFamille) {

        $responsable_1 = Famille::get_id_respondable_1($idFamille);
        $responsable_2 = Famille::get_id_respondable_2($idFamille);

        $responsables = [$responsable_1, $responsable_2];


        return view('fiche_famille', compact('idFamille', 'familles', 'responsables'));
    }



    public static function histo_garderie($idFamille, $id_compte) {
        return view('histo_garderie', compact('$idFamille', 'id_compte'));
    }



    public static function histo_jeux() {
        return view('histo_jeux');
    }



    public static function histo_cafe() {
        return view('histo_cafe');
    }


}