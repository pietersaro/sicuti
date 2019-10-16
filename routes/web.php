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
	return redirect('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/input-user', 'HomeController@addUser');

Route::get('user/', 'UserController@showUser');
Route::get('user/form/{id?}', 'UserController@detailUser');
Route::post('user/form/{id?}', 'UserController@simpanUser');

Route::post('test', 'UserController@test');

Route::get('cuti/', 'CutiController@showCuti');
Route::get('cuti/form/{id_cuti?}', 'CutiController@detailCuti');
Route::post('cuti/form/{id_cuti?}', 'CutiController@simpanCuti');


