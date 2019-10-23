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


Route::get('profile', 'HomeController@getProfile');
Route::get('pengumuman', 'HomeController@getPengumuman');

Route::get('cuti/history-cuti', 'PegawaiController@historyCuti');
Route::get('cuti/form-cuti', 'PegawaiController@getCuti');
Route::post('cuti/form-cuti', 'PegawaiController@simpanCuti');

Route::get('cuti/daftar-cuti', 'ManagerController@daftarCuti');
Route::get('cuti/approval-cuti', 'ManagerController@approvalCuti');
Route::get('cuti/deny-cuti', 'ManagerController@denyCuti');

Route::get('cuti/proses/{id?}', 'ManagerController@getProsesCuti');
Route::post('cuti/approve', 'ManagerController@doApprove');
Route::post('cuti/deny', 'ManagerController@doDeny');
