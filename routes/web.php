<?php

use App\Staf;
use App\Wisata;
use App\Produk;
use App\Berita;
use App\Kontak;
use App\Beranda;
use App\Profil;
use App\Informasi;
use App\Desa;

use App\Galeri;
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
    $staf = Staf::all();
    $wisata = Wisata::all();
    $produk = Produk::all();
    $berita = Berita::all();
    $beranda = Beranda::all();
    $profil = Profil::all();
    $informasi = Informasi::all();
    $desa = Desa::all();
    $galeri = Galeri::all();
    return view('welcome', compact('staf', 'wisata', 'produk', 'berita', 'beranda', 'profil', 'informasi', 'desa', 'galeri'));
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
Route::post('menu/edit', 'SettingController@editMenu')->name('menu.edit');
Route::post('menu1/edit', 'SettingController@editMenu1')->name('menu1.edit');
Route::post('menu5/edit', 'SettingController@editMenu5')->name('menu5.edit');
Route::post('menu4/edit', 'SettingController@editMenu4')->name('menu4.edit');
Route::post('menu2/edit', 'SettingController@editMenu2')->name('menu2.edit');
Route::post('menu3/edit', 'SettingController@editMenu3')->name('menu3.edit');
Route::post('menu6/edit', 'SettingController@editMenu6')->name('menu6.edit');
Route::post('menu7/edit', 'SettingController@editMenu7')->name('menu7.edit');
Route::post('menu8/edit', 'SettingController@editMenu8')->name('menu8.edit');
Route::post('menu9/edit', 'SettingController@editMenu9')->name('menu9.edit');
Route::post('menu10/edit', 'SettingController@editMenu10')->name('menu10.edit');


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