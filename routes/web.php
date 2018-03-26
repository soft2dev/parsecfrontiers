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
Route::get('/', function () {
    return view('campaigners.create');
});
Route::get('/again', function () {
    return view('campaigners.again');
});
Route::get('/admin', function () {
    return view('users.create');
});

Route::post('/login', 'HandleLoginController@handle')->name('login');
Route::get('/logout', 'HandleLoginController@logout')->name('logout');
//Auth::routes();
Route::resource('campaigners', 'CampaignersController');
Route::resource('users', 'UsersController');    
Route::resource('handlelogin', 'HandleLoginController');    
Route::resource('handleregisters', 'HandleRegisterController');



