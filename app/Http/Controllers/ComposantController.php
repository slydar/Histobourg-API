<?php

namespace App\Http\Controllers;
use stdClass;
use App\Composant;
use Illuminate\Http\Request;

class ComposantController extends Controller
{
    public function getComposant($numero){
        if ($numero=="all"){
            $composants = Composant::all();
        }
        else
        {
            $composants = Composant::getComposant($numero);
        }
        if (!is_null($composants)) {
            $return = new stdClass();
            $return->message = 'ok';
            $return->data = $composants;
            return json_encode($return);
        } else {
            $return = new stdClass();
            $return->message = 'error';
            return json_encode($composants);
        }
    }
}
