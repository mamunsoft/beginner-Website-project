<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ServiceModel;


class serviceController extends Controller
{
    function serviceIndex(){

    	return view('service');
    }


	function serviceData(){

		$result = json_encode(ServiceModel::all());

    	return $result;
    }

}
