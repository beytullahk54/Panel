<?php

use App\Http\Middleware\Profil;


Auth::routes();



Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/Admin', 'AdminController@index')->name('home');


Route::get('Admin/role',array('as'=>'role.index','uses'=>'RoleController@index'));
Route::get('Admin/role/create',array('as'=>'role.create','uses'=>'RoleController@create'));
Route::post('Admin/role/store',array('as'=>'role.store','uses'=>'RoleController@store'));
Route::get('Admin/role/edit/{id}', array('as'=>'role.edit','uses'=>'RoleController@edit'));
Route::post('Admin/role/update/{id}',array('as'=>'role.update','uses'=>'RoleController@update'));
Route::get('Admin/role/destroy/{id}', array('as'=>'role.destroy','uses'=>'RoleController@destroy'));

Route::get('Admin/User', array('as'=>'user','uses'=>'UserController@index'));
Route::patch('User/update/{id}',array('as'=>'user.update','uses'=>'UserController@update'));


