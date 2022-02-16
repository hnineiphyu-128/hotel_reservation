<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Frontend 
Route::get('/', 'FrontendController@index')->name('index');
Route::get('/booking', 'FrontendController@booking')->name('booking');
Route::post('/store_booking', 'FrontendController@store_booking')->name('store_booking');
Route::get('/bookingsuccess', 'FrontendController@bookingsuccess')->name('bookingsuccess');

//Backend

//Admin
Route::group(['middleware'=> 'role:super_admin'||'role:manager' ,'prefix' => 'backside','as' => 'backside.'],function(){

Route::get('/dashboard', 'BackendController@index')->name('dashboard');
Route::get('/user_list', 'BackendController@user_list')->name('user_list');
Route::resource('/reservation','ReservationController');

});


