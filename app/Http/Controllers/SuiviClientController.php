<?php

namespace App\Http\Controllers;


use App\SuiviClient;
use Illuminate\Http\Request;
use stdClass;

class SuiviClientController extends Controller
{
    public function getSuiviClient($numero){
        if ($numero=="all"){
            $suivisClient = SuiviClient::all();
        }
        else
        {
            $suivisClient = SuiviClient::getSuiviClient($numero);
        }
        if (!is_null($suivisClient)) {
            $return = new stdClass();
            $return->message = 'ok';
            $return->data = $suivisClient;
            return json_encode($return);
        } else {
            $return = new stdClass();
            $return->message = 'error';
            return json_encode($suivisClient);
        }
    }
}
