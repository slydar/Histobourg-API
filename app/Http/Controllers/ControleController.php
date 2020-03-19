<?php

namespace App\Http\Controllers;
use App\Controle;
use stdClass;
use Illuminate\Http\Request;

class ControleController extends Controller
{

    public function getControle($numero){
        if ($numero=="all"){
            $controles = Controle::all();
        }
        else
        {
            $controles = Controle::getControle($numero);
        }
        if (!is_null($controles)) {
            $return = new stdClass();
            $return->message = 'ok';
            $return->data = $controles;
            return json_encode($return);
        } else {
            $return = new stdClass();
            $return->message = 'error';
            return json_encode($controles);
        }
    }
}
