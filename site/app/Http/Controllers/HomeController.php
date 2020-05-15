<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\visitorModel;
use App\ServiceModel;


class HomeController extends Controller
{
    function HomeIndex(){
        $userIp = $_SERVER['REMOTE_ADDR'];
        date_default_timezone_set("Asia/Dhaka");
        $timeDate = date("y-m-d h:i:sa");
        visitorModel::insert(['ip_address'=>$userIp,'visit_time'=>$timeDate]);

        $serviceData = json_decode(ServiceModel::all());

        return view('home',[
        'serviceData'=>$serviceData

        ]);
    }
}
