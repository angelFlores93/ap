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


Route::get('/', function () {
    $actos = \App\actos::all();
    $users = \App\user::all();
    $ordenes = \App\ordenPago::all();
    $certificaciones =  \App\certificaciones::all();
    $constancias = \App\constancias::all();
    return View::make('welcome')->with('constancias', $constancias);
});
