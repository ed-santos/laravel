<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loginLog extends Model
{
    //

    public function user(){

        return $this->belongsTo('App\User', 'userid');

    }
}
