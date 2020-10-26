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

Route::get('/','LoguinController@index')->name('top');
Route::group(['middleware'=>'auth'],function(){
Route::get('menta','LoguinController@menta')->name('syousai');
Route::post('menta', 'LoguinController@send')->name('send');
});
Route::get('complete','LoguinController@send');







Route::auth();
Route::get('/home', 'HomeController@index')->name('home');
