<?php

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

/*Route::group(['namespace' => 'Admin' ,'middleware' => ['api', 'cors']], function () {
    Route::post('/login', 'LoginController@login');
    Route::group(['middleware' => ['jwt.refresh']], function () {
        Route::post('/index','IndexController@index');
        Route::resource('/menu','MenuController');
    });
});*/
$api = app('Dingo\Api\Routing\Router');
$api->version('v1', function ($api) {
    $api->group(['namespace' => 'App\Http\Controllers\Api'], function ($api) {
        $api->get('login', 'LoginController@login');
        $api->group(['middleware' => 'jwt.auth'], function ($api) {
            $api->get('index', 'LoginController@Index');
        });
    });
});

