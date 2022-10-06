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

Route::get('/struktur', function () {
    return view('struktur');
});

Route::get('/kontak', function () {
    return view('kontak');
});


Route::get('/', function () {
    return view('profil');
});


Route::get('/tambahkegiatan','kegiatancontroller@create')->middleware('auth');
Route::get('/detailkegiatan/{gso25a}','kegiatancontroller@show');
Route::post('/prosestambahkegiatan','kegiatancontroller@store')->middleware('auth');

Route::get('/kegiatanend','kegiatancontroller@index')->middleware('auth');

Route::delete('/kegiatanend/{gso25a}','kegiatancontroller@destroy')->middleware('auth');

Route::get('/kegiatan','kegiatancontroller@kegiatan');

Route::get('/main','kegiatancontroller@main')->middleware('auth');;




Route::post('/prosestambahgaleri','galericontroller@store')->middleware('auth');
Route::get('/tambahgaleri','galericontroller@create')->middleware('auth');
Route::get('/galeriend','galericontroller@index')->middleware('auth');
Route::delete('/galeriend/{galeri}','galericontroller@destroy')->middleware('auth');
Route::get('/galeri','galericontroller@galeri');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');









Route::get('/daftar', function () {
    return view('daftar');
});


Route::get('/anggotabaru','daftarcontroller@index')->middleware('auth');
Route::get('/tambahanggota','daftarcontroller@create');
Route::post('/prosestambahanggota','daftarcontroller@store');
Route::delete('/anggotabaru/{daftar}','daftarcontroller@destroy');