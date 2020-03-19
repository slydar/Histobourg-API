<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/machine/{numero}/','MachineController@getMachine')->name('getMachine');

Route::get('/machine/{numero}/composants/','ComposantController@getComposant')->name('getComposant');

Route::get('/machine/{numero}/controles/','ControleController@getControle')->name('getControle');

Route::get('/machine/{numero}/equipementsOptions/','EquipementOptionController@getequipementOption')->name('getEquipementOption');

Route::get('/machine/{numero}/equipementsPneumatiques/','EquipementPneumatiqueController@getEquipementPneumatique')->name('getEquipementPneumatique');

Route::get('/machine/{numero}/suivisClient','SuiviClientController@getSuiviClient')->name('getSuiviClient');



Route::get('/machine/{numero}/piecesJointes/','PieceJointeController@getPieceJointe')->name('getPiecejointe');

Route::get('/machine/{numero}/piecesJointes/fichesMateriels/','PieceJointeController@getFicheMateriel')->name('getFicheMateriel');

Route::get('/machine/{numero}/piecesJointes/fichesGaranties/','PieceJointeController@getFicheGarantie')->name('getFicheGarantie');

Route::get('/machine/{numero}/piecesJointes/fichesSuivisSAV/','PieceJointeController@getFicheSuiviSAV')->name('getFicheSuiviSAV');

Route::get('/machine/{numero}/piecesJointes/photosChargements/','PieceJointeController@getPhotoChargement')->name('getPhotoChargement');
