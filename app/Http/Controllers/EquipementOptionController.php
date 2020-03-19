<?php

namespace App\Http\Controllers;
use App\EquipementOption;
use stdClass;
use Illuminate\Http\Request;

class EquipementOptionController extends Controller
{
    public function getEquipementOption($numero){
        if ($numero=="all"){
            $equipementOptions = EquipementOption::all();
        }
        else
        {
            $equipementOptions = EquipementOption::getEquipementOption($numero);
        }
        if (!is_null($equipementOptions)) {
            $return = new stdClass();
            $return->message = 'ok';
            $return->data = $equipementOptions;
            return json_encode($return);
        } else {
            $return = new stdClass();
            $return->message = 'error';
            return json_encode($equipementOptions);
        }
    }
}
