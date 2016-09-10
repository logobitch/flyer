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


Route::get('/test', 'TestController@index');



Route::get('/', 'PagesController@home');

//登录相关
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

//Route::get('test', 'TestController@index');

Route::resource('flyers' , 'FlyersController');

Route::resource('article', 'ArticleController');

Route::get('article', ['as'=>'add_photo_article', 'uses'=>'PhotosController@store']);

Route::get('{zip}/{street}', ['as'=> 'show_flyer_info','uses'=> 'FlyersController@show']);


Route::post('{zip}/{street}/photos', ['as'=>'store_photo_path', 'uses'=>'PhotosController@store']);



