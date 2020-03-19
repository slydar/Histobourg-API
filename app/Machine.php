<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{
    protected $table = 'machine';

    protected $fillable = ['NUMERO','NUMSERIE','TYPEMACH','DATESORTIE','DATEEXPED','MODEEXPED','NUMARC'];

    public $timestamps=false;

    public static function getMachine($numero){

        return Machine::where('NUMERO',$numero)->get();
    }
}
