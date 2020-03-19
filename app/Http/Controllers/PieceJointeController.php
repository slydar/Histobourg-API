<?php

namespace App\Http\Controllers;
use App\PieceJointe;
use stdClass;
use Illuminate\Http\Request;

class PieceJointeController extends Controller
{
    //toutes les pieces jointes
    public function getPieceJointe($numero){
        if ($numero=="all"){
            $piecesJointes = PieceJointe::all();
        }
        else
        {
            $piecesJointes = PieceJointe::getPiecejointe($numero);
        }
        if (!is_null($piecesJointes)) {
            $return = new stdClass();
            $return->message = 'ok';
            $return->data = $piecesJointes;
            return json_encode($return);
        } else {
            $return = new stdClass();
            $return->message = 'error';
            return json_encode($piecesJointes);
        }
    }

    //les fiches materiel
    public function getFicheMateriel($numero){
        if ($numero=="all"){
            $piecesJointes = PieceJointe::getAllFicheMateriel();
        }
        else
        {
            $piecesJointes = PieceJointe::getFicheMateriel($numero);
        }
        if (!is_null($piecesJointes)) {
            $return = new stdClass();
            $return->message = 'ok';
            $return->data = $piecesJointes;
            return json_encode($return);
        } else {
            $return = new stdClass();
            $return->message = 'error';
            return json_encode($piecesJointes);
        }
    }

    //les fiches garantie

    public function getFicheGarantie($numero){
        if ($numero=="all"){
            $piecesJointes = PieceJointe::getAllFicheGarantie();
        }
        else
        {
            $piecesJointes = PieceJointe::getFicheGarantie($numero);
        }
        if (!is_null($piecesJointes)) {
            $return = new stdClass();
            $return->message = 'ok';
            $return->data = $piecesJointes;
            return json_encode($return);
        } else {
            $return = new stdClass();
            $return->message = 'error';
            return json_encode($piecesJointes);
        }
    }

    //les fiches suivi SAV
    public function getFicheSuiviSAV($numero){
        if ($numero=="all"){
            $piecesJointes = PieceJointe::getAllFicheSuiviSAV();
        }
        else
        {
            $piecesJointes = PieceJointe::getFicheSuiviSAV($numero);
        }
        if (!is_null($piecesJointes)) {
            $return = new stdClass();
            $return->message = 'ok';
            $return->data = $piecesJointes;
            return json_encode($return);
        } else {
            $return = new stdClass();
            $return->message = 'error';
            return json_encode($piecesJointes);
        }
    }

    //les photos du chargement
    public function getPhotoChargement($numero){
        if ($numero=="all"){
            $piecesJointes = PieceJointe::getAllPhotoChargement();
        }
        else
        {
            $piecesJointes = PieceJointe::getPhotoChargement($numero);
        }
        if (!is_null($piecesJointes)) {
            $return = new stdClass();
            $return->message = 'ok';
            $return->data = $piecesJointes;
            return json_encode($return);
        } else {
            $return = new stdClass();
            $return->message = 'error';
            return json_encode($piecesJointes);
        }
    }






}
