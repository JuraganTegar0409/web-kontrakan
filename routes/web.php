<?php

use Illuminate\Support\Facades\Route;
// Login & Register
Auth::routes();
 
Route::get('/', 'HomeController@index')->name('home');

// Kalau routenya itu terdiri dari CRUD, tinggal pakai Route::resource() aja Tegar, lebih simple and elegant
// Dashboard
Route::group(["prefix" => "dashboard", "middlware" => ["auth"], "as" => "dashboard."], function(){
    Route::view('/', "index")->name("admin");
    Route::resource("kontrakan", "KontrakanController"); 
    Route::resource("penghuni", "PenghuniController"); 
    Route::resource("transaksi", "TransaksiController")->only(["index", "create"]); 
    Route::resource("laporan", "LaporanController")->only(["index", "create"]); 
    Route::resource("log", "LogController")->only(["index", "create"]); 
});
