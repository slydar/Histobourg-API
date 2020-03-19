<?php

namespace App\Http\Controllers;

use App\Machine;
use stdClass;
use Illuminate\Http\Request;

class MachineController extends Controller
{
    public function getMachine($numero){
        if ($numero=="all"){
            $machine = Machine::all();
        }
        else
        {
            $machine = Machine::getMachine($numero);
        }
        if (!is_null($machine)) {
            $return = new stdClass();
            $return->message = 'ok';
            $return->data = $machine;
            return json_encode($return);
        } else {
            $return = new stdClass();
            $return->message = 'error';
            return json_encode($machine);
        }
    }
}
