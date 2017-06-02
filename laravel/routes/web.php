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

Route::get('/accueil', 'AccueilController@accueil');
Route::get('/dossier/{id_famille}', 'AccueilController@fiche_famille');


Route::get('/historique/{id_famille}/{id_compte}/1', 'AccueilController@histo_garderie');
Route::get('/historique/{id_famille}/{id_compte}/3', 'AccueilController@histo_jeux');
Route::get('/historique/{id_famille}/{id_compte}/4', 'AccueilController@histo_cafe');
