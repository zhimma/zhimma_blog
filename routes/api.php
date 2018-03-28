<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['namespace' => 'Admin' ,'middleware' => ['api', 'cors']], function () {
    Route::post('/login', 'LoginController@login');
    Route::group(['middleware' => ['jwt.refresh']], function () {
        Route::post('/index','IndexController@index');
    });
});


