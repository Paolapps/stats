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

Route::get('/', 'SensorsController@index');
Route::get('sensor_01', 'SensorsController@sensor_01');
Route::get('sensor_02', 'SensorsController@sensor_02');
Route::get('sensor_03', 'SensorsController@sensor_03');
Route::get('sensor_04', 'SensorsController@sensor_04');
Route::get('general', 'GeneralController@index');
Route::get('test', 'SensorsController@test');
Route::get('c1_avgMins', 'SensorsController@c1_avgMins');
Route::get('c1_avgSignal', 'SensorsController@c1_avgSignal');
Route::get('c1_numOfVisits', 'SensorsController@c1_numOfVisits');
