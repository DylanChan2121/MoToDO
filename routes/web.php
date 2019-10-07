<?php
# @Date:   2019-10-07T18:19:56+01:00
# @Last modified time: 2019-10-07T19:23:19+01:00




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

Route::get('helloooworld', function () {
    return '<h1>Helloworld<h1>';

});

Route::get('about', function () {
    return view('about');

});

Route::get('/hello','HelloController@hello') ;
