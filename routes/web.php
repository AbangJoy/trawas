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
})->name('index');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');

Route::post('password/reset', 'Auth\ResetPasswordController@reset');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');

Route::get('home', 'HomeController@index')->name('home');
Route::get('menu', 'HomeController@menu')->name('menu');
Route::post('menu/edit', 'HomeController@editMenu')->name('edit.menu');

Route::resource('beranda', 'BerandaController');
Route::resource('staf', 'StafController');
Route::resource('desa', 'DesaController');
Route::resource('wisata', 'WisataController');
Route::resource('produk', 'ProdukController');
Route::resource('galeri', 'GaleriController');
Route::resource('berita', 'BeritaController');
Route::resource('profil', 'ProfilController');
Route::resource('informasi', 'InformasiController');
Route::resource('kontak', 'KontakController');