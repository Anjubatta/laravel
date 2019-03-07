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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::group(['middleware' => 'auth'], function() {

	Route::group(['middleware' => 'check-permission:admin', 'prefix' => 'admin'], function() {
		//Admin Dashboard 
		Route::get('/dashboard', 'Admin\DashboardController@index')->name('admin.dashboard.index');
		
		//web settings
		Route::resource('/settings', 'Admin\Web_settingsController', ['as' => 'admin']);
		
		
		
	});
});