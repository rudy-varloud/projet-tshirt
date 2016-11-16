<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::get('/', function () { return view('page'); });


Route::get('blade', function () {
    return view('page2',array('nom' => 'BTS SIO ','jour' => "Aujoud'hui"));
});

Route::get('blade3', function () {
    return view('page3',array('nom' => 'Christian ','jour' => "Vendredi"));
});

Route::get('blade4', function () {
    $mesBoissons = array('Vodka','Gin','Brandy');
    return view('page4',array('nom' => 'BTS SIO Option SLAM','jour' => 'Jeudi','mesBoissons' => $mesBoissons));
});
