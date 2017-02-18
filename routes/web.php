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

Route::get('/','todoController@todowelc');
Route::post('/dbsave','todoController@savetodo');

Route::get('/dbshow','todoController@viewtodo');