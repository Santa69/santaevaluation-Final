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

Auth::routes();
 				Route::get('/', 'HomeController@index');
        Route::get('/contact', 'ContactController@index');
        Route::get('/message/{id}', 'MessageController@getOne');
        Route::get('/contact/','ContactController@index');
        Route::post('/contact/insertOne', 'MessageController@insertOne');
        Route::get('/message/{id}/delete', 'MessageController@deleteOne');
