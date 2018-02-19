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

Auth::routes();

Route::get('/home', 'HomeController@home')->name('home');
Route::get('/map', 'HomeController@map');

Route::resource('/pitches', 'PitchController');

Route::get("/schools/{id}", 'schoolController@index');

//Route::get('/hello', 'HelloController@create');
//Route::post('/hello', 'HelloController@store');
