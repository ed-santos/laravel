<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class invoice extends Model
{
    //

    public function user(){

        return $this->belongsTo('App\User', 'userid');

    }

    public function mailingAdd(){

        return $this->belongsTo('App\mailingAdd', 'mailid');

    }

    public function servLocation(){

        return $this->belongsTo('App\servLocation', 'servid');

    }
}
