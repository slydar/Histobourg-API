<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EquipementPneumatique extends Model
{
    protected $table = 'equipementPneumatique';

    protected $fillable = ['ID','machine_NUMERO','NUMLIGNE','LIBCOMPO','LIBMARQUE','LIBREFER'];

    public $timestamps=false;

    public static function getEquipementPneumatique($numero){

        return EquipementPneumatique::where('machine_NUMERO',$numero)->get();
    }

}
