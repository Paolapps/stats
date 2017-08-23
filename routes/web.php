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

Route::get('/', 'ResponsesController@index');
Route::get('test', 'ResponsesController@test');
Route::get('c1_avgMins', 'ResponsesController@c1_avgMins');
Route::get('c1_numOfVisits', 'ResponsesController@c1_numOfVisits');
