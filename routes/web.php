<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['as' => 'home.', 'namespace' => 'Home'], function () {
    Route::get('/', 'IndexController@index')->name('index');
    Route::get('login','UserController@login')->name('login');
    Route::post('login','UserController@sign')->name('sign');
    Route::get('register','UserController@register')->name('register');
    Route::post('register','UserController@store')->name('registerStore');
    Route::get('resetPassword/validateEmail','ResetPasswordController@validateEmail')->name('validateEmail');
    Route::get('resetPassword/{confirm_code}','ResetPasswordController@index')->name('resetPassword');
    Route::post('sendEmail','ResetPasswordController@sendEmail')->name('resetPassword.sendEmail');
    Route::get('email/active','UserController@active')->name('emailActive');
    Route::get('logout','UserController@logout')->name('logout');

    Route::resource('article', 'ArticleController');
    Route::post('article/comment','ArticleController@comment')->name('article.comment');
    Route::get('contact', 'ContactController@index')->name('contact');
    Route::post('contact', 'ContactController@store')->name('contact.store');
    Route::get('about', 'AboutController@index')->name('about');
    Route::resource('tag', 'TagController');
    Route::get('category/{id?}', 'ArticleController@index')->name('category');
});
