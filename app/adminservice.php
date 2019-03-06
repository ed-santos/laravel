<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class adminservice extends Model
{
    //

    public function servLocation(){

        return $this->hasMany('App\servLocation');
    }
}
