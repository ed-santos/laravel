<?php

namespace App\Http\Controllers;

use App\wifiUser;
use Illuminate\Http\Request;

class WifiUserInfo extends Controller
{
    //

    public function receiveData(){

        return response('Hello World', 200)
            ->header('Content-Type', 'text/plain');
        return response('hello');
        $userData = $_POST['client'];

        $name = $element['name'];
        $email = $element['email'];
        $provider = $element['provider'];
        $locationid = $element['loctionid'];



        //Create new object to pass data to DB
        $wifiUsers = new wifiUser();
        //objects to pass to table attributes with assigned declared values above
        $wifiUsers->fname = $name;
        $wifiUsers->email = $email;
        $wifiUsers->provider = $provider;
        $wifiUsers->locationid = $locationid;

        $wifiUsers-> save();

        //return redirect('/home');
    }

}
