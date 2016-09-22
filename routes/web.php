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

Auth::routes();
Route::get('/','Auth\LoginController@showLoginForm');
Route::get('/home', ['as'=>'home', 'uses' => 'PagesController@getHome', 'middleware' => 'auth']);

//permission
Route::group(['prefix'=>'permission'], function() {
    Route::get('/create', [
        'as' => 'admin.create.permission',
        'middleware' => ['auth'],
        'uses' => 'PermissionsController@create'
    ]);
});
