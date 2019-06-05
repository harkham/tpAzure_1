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

Route::get('/ex1', function(){
    return view('ex1');
});
Route::get('/', function () {
    return view('welcome');
});

Route::view('/pub/ajouter_une_image', 'ex1');
Route::post('/pub/post', 'pubController@create');
