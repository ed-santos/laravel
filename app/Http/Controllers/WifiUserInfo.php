<?php

namespace App\Http\Controllers;

use App\wifiUser;
use Illuminate\Http\Request;

class WifiUserInfo extends Controller
{
    //

    public function receiveData(){


        return response()->json('hloeeee',444);
        $name = $_POST['name'];
        $email = $_POST['email'];
        $provider = $_POST['provider'];
        $locationid = $_POST['loctionid'];



        //Create new object to pass data to DB
        $wifiUsers = new wifiUser();
        //objects to pass to table attributes with assigned declared values above
        $wifiUsers->fname = $name;
        $wifiUsers->email = $email;
        $wifiUsers->provider = $provider;
        $wifiUsers->locationid = $locationid;

        $wifiUsers->save();

        //return redirect('/home');
    }


}
