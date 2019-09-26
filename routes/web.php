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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
Route::get('my-captcha', 'HomeController@myCaptcha')->name('myCaptcha');

Auth::routes();

Route::post('my-captcha', 'HomeController@myCaptchaPost')->name('myCaptcha.post');

Auth::routes();
Route::get('refresh_captcha', 'HomeController@refreshCaptcha')->name('refresh_captcha');

Route::get('/kategori_artikel', 'kategori_artikelcontroller@index')->name('kategori_artikel.index');
Route::get('/artikel', 'artikelcontroller@index')->name('artikel.index');

Route::get('/kategori_berita', 'kategori_beritacontroller@index')->name('kategori_berita.index');
Route::get('/berita', 'beritacontroller@index')->name('berita.index');

Route::get('/kategori_galeri', 'kategori_galericontroller@index')->name('kategori_galeri.index');
Route::get('/galeri', 'galericontroller@index')->name('galeri.index');

Route::get('/kategori_pengumuman', 'kategori_pengumumancontroller@index')->name('kategori_pengumuman.index');
Route::get('/pengumuman', 'pengumumancontroller@index')->name('pengumuman.index');
