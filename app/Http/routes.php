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

//Route::get('/tampil', 'CobaController@getData');

Route::auth();

Route::get('/', 'HomeController@index');
//Route::get('/warung', 'WarungController@create');

/*Route::get('/cari', 'HomeController@cari');

Route::get('/hasil', 'HomeController@hasil');*/

Route::resource('warung','WarungController');