<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PieceJointe extends Model
{
    protected $table = 'pieceJointe';

    protected $fillable = ['ID','machine_NUMERO','TYPE','NOM','CHEMIN'];

    public $timestamps=false;

    public static function getPiecejointe($numero){

        return PieceJointe::where('machine_NUMERO',$numero)->get();
    }

    //les fiches materiel
    public static function getAllFicheMateriel(){

        return PieceJointe::where('TYPE','FICHEMATERIEL')->get();
    }
    public static function getFicheMateriel($numero){

        return PieceJointe::where('machine_NUMERO',$numero)->where('TYPE','FICHEMATERIEL')->get();
    }

    //les fiches suiviSAV
    public static function getAllFicheSuiviSAV(){

        return PieceJointe::where('TYPE','FICHESUIVI')->get();
    }
    public static function getFicheSuiviSAV($numero){

        return PieceJointe::where('machine_NUMERO',$numero)->where('TYPE','FICHESUIVI')->get();
    }
    //les fiches garantie
    public static function getAllFicheGarantie(){

        return PieceJointe::where('TYPE','FICHEGARANTIE')->get();
    }
    public static function getFicheGarantie($numero){

        return PieceJointe::where('machine_NUMERO',$numero)->where('TYPE','FICHEGARANTIE')->get();
    }

    //les photos du chargement
    public static function getAllPhotoChargement(){

        return PieceJointe::where('TYPE','IMAGE')->get();
    }
    public static function getPhotoChargement($numero){

        return PieceJointe::where('machine_NUMERO',$numero)->where('TYPE','IMAGE')->get();
    }

}
