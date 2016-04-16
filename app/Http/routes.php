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
    return view('welcome');
});

Route::auth();

Route::get('admin', 'HomeController@index');
Route::get('admin/urls', 'HomeController@urllist');

Route::get('admin/urls/new', 'HomeController@create');
Route::post('admin/urls/new', 'HomeController@store');

Route::get('admin/urls/logs', 'HomeController@logs');


Route::get('/{url}', 'UrlController@go');
