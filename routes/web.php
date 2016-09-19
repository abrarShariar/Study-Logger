<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/', function () {
    return view('pages/header');
});

//routes dedicated to save links
Route::get('/save_links','SaveLinksController@index');
Route::post('/save_links/store','SaveLinksController@store');
