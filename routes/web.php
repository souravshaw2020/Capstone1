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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'MainController@index');
Route::post('checklogin', 'MainController@checkLogin');
Route::get('dashboard/', 'MainController@successLogin');
Route::get('visitorform/', 'MainController@visitorForm');
Route::post('checkOTP', 'MainController@send_OTP');
Route::post('datacheck', 'MainController@visitorInfo');
Route::get('upload/', 'MainController@dataUpload');
Route::get('logout', 'MainController@logout');
