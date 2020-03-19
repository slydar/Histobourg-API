<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EquipementOption extends Model
{
    protected $table = 'equipementOption';

    protected $fillable = ['ID','machine_NUMERO','NUMLIGNE','LIBOPTION','LIBOPTION2'];

    public $timestamps=false;

    public static function getEquipementOption($numero){

        return EquipementOption::where('machine_NUMERO',$numero)->get();
    }

}
