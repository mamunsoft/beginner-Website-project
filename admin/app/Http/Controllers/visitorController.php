<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\visitorModel;

class visitorController extends Controller
{
     function visitorIndex(){
     	$visitorData = json_decode(visitorModel::orderby('id','desc')->take(5)->get());

    	return View('visitor',['visitorData'=>$visitorData]);
    }
}

