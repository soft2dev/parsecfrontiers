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

//Route::get('/', 'HomeController@index')->name("main");
Auth::routes();

Route::get('/', function () {
    return view('auth.login');
})->name('landing');
    

// Route::post('/login', 'HandleLoginController@handle')->name('login');
// Route::get('/logout', 'HandleLoginController@logout')->name('logout');

Route::resource('campaigners', 'CampaignersController');
Route::resource('users', 'UsersController');    

Auth::routes();

Route::resource('handlelogin', 'HandleLoginController');    
Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');
Route::get('/home', 'HomeController@index');
Route::get('/home', 'HomeController@index');
