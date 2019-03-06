<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function mailingAdd(){

        return $this->hasMany('App\mailingAdd');
    }

    public function servLocation(){

        return $this->hasMany('App\servLocation');
    }

    public function loginLogs(){

        return $this->hasMany('App\loginLogs');
    }

    public function invoice(){

        return $this->hasMany('App\invoice');
    }
}
