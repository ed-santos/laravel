<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mailingAdd extends Model
{
    //

    public function invoice(){

        return $this->hasMany('App\invoice');
    }

    public function user(){

        return $this->belongsTo('App\User', 'userid');

    }
}
