<?php

namespace App\Http\Controllers;

use App\EquipementPneumatique;
use Illuminate\Http\Request;
use stdClass;

class EquipementPneumatiqueController extends Controller
{
    public function getEquipementPneumatique($numero){
        if ($numero=="all"){
            $equipementsPneumatiques = EquipementPneumatique::all();
        }
        else
        {
            $equipementsPneumatiques = EquipementPneumatique::getEquipementPneumatique($numero);
        }
        if (!is_null($equipementsPneumatiques)) {
            $return = new stdClass();
            $return->message = 'ok';
            $return->data = $equipementsPneumatiques;
            return json_encode($return);
        } else {
            $return = new stdClass();
            $return->message = 'error';
            return json_encode($equipementsPneumatiques);
        }
    }
}
