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

Route::view('/article/ajouter_un_article', 'article_edit');
Route::post('/article/store', 'ArticleController@store');
