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

Route::get('/', function () {
    return response()->json(['error' => 'access denied.'], 403);
});
Route::post('userlog', 'UserlogController@store');
Route::get('userlog', 'UserlogController@index');//list
Route::get('userlog/{id}', 'UserlogController@show');
Route::post('userlog/{id}', 'UserlogController@update');
Route::delete('userlog/{id}', 'UserlogController@destroy');



