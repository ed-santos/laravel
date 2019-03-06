<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class servLocation extends Model
{
    //

    public function invoice(){

        return $this->hasMany('App\invoice');
    }

    public function adminService(){

        return $this->hasMany('App\adminService');
    }

    public function user(){

        return $this->belongsTo('App\User', 'userid');

    }
}
