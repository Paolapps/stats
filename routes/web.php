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
//-----------------------------------------------General Controller routes-----
Route::get('/', 'GeneralController@index');
Route::get('general', 'GeneralController@general');
Route::get('test', 'GeneralController@test');

//------------------------------------------------------Sensor 01 routes--------
Route::get('sensor_01', 'Sensor_01_Controller@sensor_01');
Route::get('c1_avgMins', 'Sensor_01_Controller@c1_avgMins');
Route::get('c1_timeSignal', 'Sensor_01_Controller@c1_timeSignal');
Route::get('c1_avgSignal', 'Sensor_01_Controller@c1_avgSignal');
Route::get('c1_numOfVisits', 'Sensor_01_Controller@c1_numOfVisits');

//------------------------------------------------------Sensor 02 routes--------
Route::get('sensor_02', 'Sensor_02_Controller@sensor_02');
Route::get('c2_avgMins', 'Sensor_02_Controller@c2_avgMins');
Route::get('c2_avgSignal', 'Sensor_02_Controller@c2_avgSignal');
Route::get('c2_numOfVisits', 'Sensor_02_Controller@c2_numOfVisits');

//------------------------------------------------------Sensor 03 routes--------
Route::get('sensor_03', 'Sensor_03_Controller@sensor_03');
Route::get('c3_avgMins', 'Sensor_03_Controller@c3_avgMins');
Route::get('c3_avgSignal', 'Sensor_03_Controller@c3_avgSignal');
Route::get('c3_numOfVisits', 'Sensor_03_Controller@c3_numOfVisits');

//------------------------------------------------------Sensor 04 routes--------
Route::get('sensor_04', 'Sensor_04_Controller@sensor_04');
Route::get('c4_avgMins', 'Sensor_04_Controller@c4_avgMins');
Route::get('c4_avgSignal', 'Sensor_04_Controller@c4_avgSignal');
Route::get('c4_numOfVisits', 'Sensor_04_Controller@c4_numOfVisits');


