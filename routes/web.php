<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('/', function () {
   if(!Auth::guest())
       return redirect('home');
    else
        return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['middleware' => 'admin'], function () {
    Route::get('/users-list', 'AdminController@usersList');
    Route::get('/edit-user/{id}', 'AdminController@edit');
    Route::get('/delete-user/{id}', 'AdminController@deleteUser');
    Route::get('/add-user', 'AdminController@addUser');
    Route::post('/add-user', 'AdminController@createUser');
});

Route::group(['middleware' => 'member'], function(){
    Route::get('/profile-edit', 'AdminController@profileEdit');
});

Route::group(['middleware' => 'auth'], function(){
    Route::post('/update-user/{id}', 'AdminController@updating');
});

