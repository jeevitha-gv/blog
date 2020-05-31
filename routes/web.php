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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/test',function()
{
	return "welcome";
})->middleware('userlogin');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/registered', 'RegisteredController@registered');
Route::get('/user-edit/{id}','RegisteredController@show');
Route::post('/user-edit','RegisteredController@update')->name('user-edit');
Route::get('/user-delete/{id}','RegisteredController@delete');



