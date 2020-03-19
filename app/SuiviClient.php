<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuiviClient extends Model
{
    protected $table = 'suiviMachineCli';

    protected $fillable = ['ID','machine_NUMERO','LIBSUIVI'];

    public $timestamps=false;

    public static function getSuiviClient($numero){

        return SuiviClient::where('machine_NUMERO',$numero)->get();
    }
}
