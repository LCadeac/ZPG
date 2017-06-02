<?php
/**
 * Created by PhpStorm.
 * User: Lucien
 * Date: 02/06/2017
 * Time: 10:55
 */

namespace App\Http\Controllers;


use Illuminate\Support\Facades\App;

class AccueilController extends Controller {

    public static function accueil() {
        return view('accueil');
    }



    public static function fiche_famille($id_famille, $id_enfant) {
        return view('fiche_famille', compact('id_famille', 'id_enfant'));
    }



    public static function histo_garderie($id_famille, $id_compte) {
        return view('histo_garderie', compact('id_famille', 'id_compte'));
    }



    public static function histo_jeux() {
        return view('histo_jeux');
    }



    public static function histo_cafe() {
        return view('histo_cafe');
    }


}