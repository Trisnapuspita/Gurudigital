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
    return view('landing/welcome');
});
Route::get('/coba', function(){
    return view('satu');
});

Route::get('/cobaa', function(){
    return view('dua');
});

Route::get('/cobaaa', function(){
    return view('tiga');
});

Route::get('/details/1', function(){
    return view('guru/landing/detailprogram');
});

Route::get('/details/2', function(){
    return view('guru/landing/detailevent');
});

Route::get('/daftar', function(){
    return view('guru/landing/daftar');
});

Route::get('/info', function () {
    return view('guru/landing/info');
});

Route::get('/event', function () {
    return view('guru/landing/event');
});

Route::get('/program', function () {
    return view('guru/landing/program');
});

Route::get('/event/edit', function () {
    return view('guru/eventedit');
});

Route::get('/program/edit', function () {
    return view('guru/programedit');
});

//guru digital - info
Route::get('/gurudigital/info/create', 'GuruController@create_info');
Route::post('/gurudigital/info', 'GuruController@store_info');
//guru digital - Program
Route::get('/gurudigital/program/create', 'GuruController@create_program');
Route::post('/gurudigital/program', 'GuruController@store_program');
Route::get('/gurudigital/programs', 'GuruController@program');
//guru digital - Berita
Route::get('/gurudigital/event/create', 'GuruController@create_event');
Route::post('/gurudigital/event', 'GuruController@store_event');
Route::get('/gurudigital/events', 'GuruController@event');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
