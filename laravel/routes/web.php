<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/accueil/{idFamille}', 'AccueilController@accueil');
Route::get('/dossier/{idFamille}/{idEnfant}', 'AccueilController@fiche_famille');

Route::post('/dossier/{idFamille}', 'AccueilController@fiche_famille');



Route::get('/dossier/{idFamille}', 'AccueilController@ma_famille');





Route::get('/historique/{idFamille}/{idCompte}/2', 'AccueilController@histo_garderie');

Route::get('/historique/{idFamille}/{idCompte}/3', 'AccueilController@histo_jeux');
Route::get('/historique/{idFamille}/{idCompte}/4', 'AccueilController@histo_cafe');


Route::get('/historique/{idFamille}/{idCompte}', 'AccueilController@choix_historique');



