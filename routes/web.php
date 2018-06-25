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
    return view('welcome');
});

Route::get('first-page', 'PageController@firstPage');
Route::get('second-page', 'PageController@secondPage');
Route::get('third-page', 'PageController@thirdPage');
Route::get('fourth-page', 'PageController@fourthPage');
Route::get('fifth-page', 'PageController@fifthPage');