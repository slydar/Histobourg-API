<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Controle extends Model
{
    protected $table = 'controle';

    protected $fillable = ['ID','machine_NUMERO','NUMLIGNE','LIBVITORG','VITESTHEO','VITESCONT','LIBPRESORG','LIBPTARA','LIBREGL','LIBPVIDE','LIBPVIDEREL','FIELD13'];

    public $timestamps=false;

    public static function getControle($numero){

        return Controle::where('machine_NUMERO',$numero)->get();
    }
}
