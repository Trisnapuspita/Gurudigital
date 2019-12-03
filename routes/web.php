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

//tiket
Route::get('/tiket', function(){
    return view('tiket');
});

Route::get('/cobaa', function(){
    return view('dua');
});

Route::get('/cobaaa', function(){
    return view('tiga');
});

Route::get('/details/1', function(){
    return view('landing/detailprogram');
});

Route::get('/details/2', function(){
    return view('landing/detailevent');
});

Route::get('/daftar', function(){
    return view('landing/daftar');
});

Route::get('/info', function () {
    return view('landing/info');
});

Route::get('/event', function () {
    return view('landing/event');
});

Route::get('/program', function () {
    return view('landing/program');
});

Route::get('/event/edit', function () {
    return view('eventedit');
});

Route::get('/program/edit', function () {
    return view('programedit');
});

Route::get('/lihatpendaftar', function(){
    return view('program/lihatpendaftar');
});

Route::get('/tentangkami', 'TestimoniController@tentangkami');

Route::get('/kegiatan', 'BeritaController@index');
Route::get('/kegiatan/{id}', 'BeritaController@show');

Route::get('/bimbel', 'HomeController@bimbel');

Route::get('/kontak', 'HomeController@kontak');

//guru digital - info
Route::get('/gurudigital/info/create', 'HomeController@create_info');
Route::post('/gurudigital/info', 'HomeController@store_info');
//guru digital - Program
Route::get('/gurudigital/program/create', 'HomeController@create_program');
Route::post('/gurudigital/program', 'HomeController@store_program');
Route::get('/gurudigital/programs', 'HomeController@program');
Route::get('/gurudigital/programs/pendaftar', 'HomeController@atttendeeprogram');
Route::get('/gurudigital/programs/semuapendaftar', 'HomeController@listattendee');
//guru digital - Berita
Route::get('/gurudigital/event/create', 'HomeController@create_event');
Route::post('/gurudigital/event', 'HomeController@store_event');
Route::get('/gurudigital/events', 'HomeController@event');
//karyawan
Route::get('/gurudigital/karyawan', 'HomeController@daftarkaryawan');
Route::get('/admin/informasi', 'adminController@infohome');
Route::get('/admin/berita', 'BeritaController@beritaadm');
Route::resource('profil', 'ProfilController');
Route::resource('misi', 'MisiController');
Route::resource('testimoni', 'TestimoniController');
Route::resource('kelas', 'KelasController');
Route::get('profil2', 'ProfilController@editprofil2');
Route::put('profil2', 'ProfilController@updateprofil2');
Route::get('visi', 'ProfilController@editvisi');
Route::put('visi', 'ProfilController@updatevisi');
//melihat data guru dan siswa
Route::get('/admin/data-guru', 'adminController@data_guru');
Route::get('/admin/data-siswa', 'adminController@data_siswa');
//melihat data pendaftar
Route::get('/admin/data-pendaftar', 'PendaftaranController@index');
Route::get('/admin/data-pendaftar/{id}', 'PendaftaranController@show');
//create berita
Route::get('/beritas/create', 'BeritaController@create');
Route::post('/beritas', 'BeritaController@store');
//edit berita
Route::get('/beritas/{id}/edit', 'BeritaController@edit');
Route::put('/beritas/{id}', 'BeritaController@update');
Route::delete('/beritas/{id}', 'BeritaController@destroy');

Route::get('/admin/informasi', 'adminController@infohome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
