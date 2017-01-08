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

Route::group(['middleware' => 'auth'], function (){
	Route::resource('tour','TourController');
    Route::resource('data','DataController');
    Route::resource('holiday','HolidayController');
    Route::resource('pilih','PilihController');
});

Route::get('/', function () {
    return view('home');
});
Route::get('/home', function () {
    return view('admin');
});
Route::get('/tentang', function () {
    return view('tentang');
});
Route::get('/galeri', function () {
    return view('galeri');
});
Route::get('/pkt', function () {
    return view('pakettour');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/login', function () {
    return view('login.auth');
});

Route::get('/create', function () {
    return view('holiday.create');
});







Route::get('/paket','PaketController@create')->name('paket.create');
Route::post('/paket','PaketController@store')->name('paket.store');
Auth::routes();

