<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'homeController@homeIndex');

Route::get('/visitor', 'visitorController@visitorIndex');

Route::get('/service', 'serviceController@serviceIndex');

Route::get('/serviceData', 'serviceController@serviceData');

