<?php
/**
 * Created by PhpStorm.
 * User: Lucien
 * Date: 02/06/2017
 * Time: 10:55
 */

namespace App\Http\Controllers;


class AccueilController {

    public function accueil(){
        return view('accueil');
    }
    public function fiche_famille($id_famille){
        return view('fiche_famille', compact('id_famille'));
    }
    public function histo_garderie($id_famille, $id_compte){
        return view('histo_garderie', compact('id_famille', 'id_compte'));
    }
    public function histo_jeux(){
        return view('histo_jeux');
    }
    public function histo_cafe(){
        return view('histo_cafe');
    }


}