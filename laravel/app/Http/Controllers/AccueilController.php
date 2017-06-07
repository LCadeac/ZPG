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
use App\Operation;
use Illuminate\Support\Facades\App;

class AccueilController extends Controller {

//    const COMPTE_GARDERIE = 2;
//    const COMPTE_JEUX = 3;
//    const COMPTE_CAFE = 4;


    public static function accueil($idFamille) {
        return view('accueil', compact('idFamille', 'idCompte'));
    }



    public static function fiche_famille($idFamille, $idEnfant) {
        $famille = Famille::get_famille($idFamille);

//        $enfants = $famille->get_enfants();
        return view('fiche_famille', compact('idFamille', 'idEnfant', 'famille'));
    }



    public static function ma_famille($idFamille) {

        $responsable_1 = Famille::get_responsable_1($idFamille);
        $responsable_2 = Famille::get_responsable_2($idFamille);
        $enfants = Enfants
            ::where('idFamille', $idFamille)
            ->leftJoin('Personne', 'Personne.idPersonne', "=", 'Enfant.idPersonne')
            ->get();


        $responsables = [$responsable_1, $responsable_2];


        return view('fiche_famille', compact('idFamille', 'responsables', 'enfants'));
    }



    /*public static function choix_historique($idFamille, $idCompte){
        switch ($idCompte) {
            case 1 :
            case 2 :
            case 3 :
                $redirection = self::histo_garderie($idFamille);
                break;
            case 4 :
                $redirection = self::histo_garderie($idFamille);
                break;
            case 5 :
                $redirection = self::histo_garderie($idFamille);
                break;

        }
        return view('historique', compact('redirection','idFamille','idCompte','operations'));
    }*/



    public static function histo_garderie($idFamille, $idCompte) {
//        $idCompte = self::COMPTE_GARDERIE;
        $operations = Operation::get_operation($idFamille, $idCompte);
        $montant_total = self::somme_montants_services($idFamille, $idCompte);

        return view('histo_garderie', compact('idFamille', 'idCompte','operations','montant_total'));
    }


    public static function histo_jeux($idFamille, $idCompte) {
        $operations = Operation::get_operation($idFamille, $idCompte);
        $montant_total = self::somme_montants_services($idFamille, $idCompte);

        return view('histo_jeux', compact('idFamille', 'idCompte','operations','montant_total'));
    }



    public static function histo_cafe($idFamille, $idCompte) {
        $operations = Operation::get_operation($idFamille, $idCompte);
        $montant_total = self::somme_montants_services($idFamille, $idCompte);

        return view('histo_cafe', compact('idFamille', 'idCompte','operations','montant_total'));
    }



    public static function somme_montants_services($idFamille, $idCompte){
        $operations = Operation::get_operation($idFamille, $idCompte);
        $montant_total = 0;
        foreach ($operations as $operation){
            $montant = $operation->debit;
            $montant_total = $montant + $montant_total;
        }
        return $montant_total;
    }

}