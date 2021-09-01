<?php

// use Illuminate\Support\Facades\Auth; 
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Login & Register
Auth::routes();
Route::get('/', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/', 'Auth\LoginController@login')->name('login');
Route::get('/homepage_admin', function () {
    return view('index');
});

 
// Kalau routenya itu terdiri dari CRUD, tinggal pakai Route::resource() aja Tegar, lebih simple and elegant
// Dashboard
Route::group(["prefix" => "dashboard", "middlware" => ["auth"]], function(){
       Route::resource("kontrakan", "KontrakanController"); 
       Route::resource("penghuni", "PenghuniController"); 
       Route::resource("transaksi", "TransaksiController")->only(["index", "create"]); 
       Route::resource("laporan", "LaporanController")->only(["index", "create"]); 
       Route::resource("log", "LogController")->only(["index", "create"]); 
});


// // pendefinisian route lama (yg dibawah ini) gw comment-in ya!
//  // CRUD Kontrakan
// Route::get('/dashboard/kontrakan', 'KontrakanController@index')->name('kontrakan.index');
// Route::get('/dashboard/kontrakan/create', 'KontrakanController@create')->name('kontrakan.create');
// Route::get('/dashboard/kontrakan/{kontrakan}', 'KontrakanController@show')->name('kontrakan.show');
// Route::post('/dashboard/kontrakan', 'KontrakanController@store')->name('kontrakan.store');
// Route::delete('/dashboard/kontrakan/{kontrakan}', 'KontrakanController@destroy')->name('kontrakan.destroy');
// Route::get('/dashboard/kontrakan/{kontrakan}/edit', 'KontrakanController@edit')->name('kontrakan.edit');
// Route::patch('/dashboard/kontrakan/{kontrakan}', 'KontrakanController@update')->name('kontrakan.update'); 
// Route::get('/search','KontrakanController@search'); 

// // // CRUD Penghuni
// Route::get('/dashboard/penghuni', 'PenghuniController@index')->name('penghuni.index');
// Route::get('/dashboard/penghuni/create', 'PenghuniController@create')->name('penghuni.create');
// Route::get('/dashboard/penghuni/{penghuni}', 'PenghuniController@show')->name('penghuni.show');
// Route::post('/dashboard/penghuni', 'PenghuniController@store')->name('penghuni.store');
// Route::delete('/dashboard/penghuni/{penghuni}', 'PenghuniController@destroy')->name('penghuni.destroy');
// Route::get('/dashboard/penghuni/{penghuni}/edit', 'PenghuniController@edit')->name('penghuni.edit');
// Route::patch('/dashboard/penghuni/{penghuni}', 'PenghuniController@update')->name('penghuni.update'); 

// // CRUD Transaksi
// Route::get('/dashboard/transaksi', 'TransaksiController@index')->name('transaksi.index');
// Route::get('/dashboard/transaksi/create', 'TransaksiController@create')->name('transaksi.create');

// // CRUD Laporan
// Route::get('/dashboard/laporan', 'LaporanController@index')->name('laporan.index');
// Route::get('/dashboard/laporan/create', 'LaporanController@create')->name('laporan.create');

// // CRUD Log Activty
// Route::get('/dashboard/log', 'LogController@index')->name('log.index');
// Route::get('/dashboard/log/create', 'LogController@create')->name('log.create'); 

Route::get('/home', 'HomeController@index')->name('home');
