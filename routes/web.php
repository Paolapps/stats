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

Route::get('/', 'GeneralController@index');
Route::get('general', 'GeneralController@general');
Route::get('test', 'GeneralController@test');

Route::get('sensor_01', 'Sensor_01_Controller@sensor_01');
Route::get('c1_avgMins', 'Sensor_01_Controller@c1_avgMins');
Route::get('c1_avgSignal', 'Sensor_01_Controller@c1_avgSignal');
Route::get('c1_numOfVisits', 'Sensor_01_Controller@c1_numOfVisits');

Route::get('sensor_02', 'Sensor_02_Controller@sensor_02');
Route::get('sensor_03', 'Sensor_03_Controller@sensor_03');
Route::get('sensor_04', 'Sensor_04_Controller@sensor_04');



