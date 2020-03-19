<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Composant extends Model
{
    protected $table = 'composant';

    protected $fillable = ['ID','machine_NUMERO','NUMLIGNE','LIBCOMPO','LIBMARQUE','LIBREFER'];

    public $timestamps=false;

    public static function getComposant($numero){

        return Composant::where('machine_NUMERO',$numero)->get();
    }

    public static function deleteComposant($numero){

        return Composant::where('machine_NUMERO',$numero)->delete();
    }
}
