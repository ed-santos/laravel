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
        $locationid = $_POST['locationid'];


        //Create new object to pass data to DB
        $wifiusers = new wifiUser();
        //objects to pass to table attributes with assigned declared values above
        $wifiusers->fname = $name;
        $wifiusers->email = $email;
        $wifiusers->provider = $provider;
        $wifiusers->locationid = $locationid;

        $wifiUsers->save();

        //return redirect('/home');
    }

    public function showData(){

        $allTraffic = wifiUser::with('user')->get();

        return view('home')->with('wifiusers',$allTraffic);
    }


}
