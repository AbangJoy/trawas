<?php

use App\Setting;

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
    $setting = Setting::firstOrFail();
    return view('welcome', compact('setting'));
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

Route::get('staf', 'HomeController@staf')->name('staf');
Route::get('staf/create', 'HomeController@createStaf')->name('create.staf');
Route::get('staf/edit', 'HomeController@editStaf')->name('edit.staf');

Route::get('desa', 'HomeController@desa')->name('desa');
Route::get('desa/create', 'HomeController@createDesa')->name('create.desa');
Route::get('desa/edit', 'HomeController@editDesa')->name('edit.desa');

Route::get('wisata', 'HomeController@wisata')->name('wisata');
Route::get('wisata/create', 'HomeController@createWisata')->name('create.wisata');
Route::get('wisata/edit', 'HomeController@editWisata')->name('edit.wisata');

Route::get('produk', 'HomeController@produk')->name('produk');
Route::get('produk/create', 'HomeController@createProduk')->name('create.produk');
Route::get('produk/edit', 'HomeController@editProduk')->name('edit.produk');

Route::get('galeri', 'HomeController@galeri')->name('galeri');
Route::get('galeri/create', 'HomeController@createGaleri')->name('create.galeri');
Route::get('galeri/edit', 'HomeController@editGaleri')->name('edit.galeri');

Route::get('berita', 'HomeController@berita')->name('berita');
Route::get('berita/create', 'HomeController@createBerita')->name('create.berita');
Route::get('berita/edit', 'HomeController@editBerita')->name('edit.berita');