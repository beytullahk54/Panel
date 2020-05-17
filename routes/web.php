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

use App\Http\Middleware\Profil;
Auth::routes();

Route::get('/',  array('uses'=>'HomeController@index'));

Route::get('/panel',  array('as'=>'admin.panel','uses'=>'AdminController@index'));


Route::group(array('before'=>'auth'),function(){
	Route::post('password/reset/3', 'Auth\ForgotPasswordController@showLinkRequestForm3')->name('password.request3');
	Route::post('password/reset/2', 'Auth\ForgotPasswordController@showLinkRequestForm2')->name('password.request2');
});
