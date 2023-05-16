<?php

use Illuminate\Support\Facades\Route;
// Login & Register
Auth::routes();
 
Route::get('/', 'HomeController@index')->name('home');

// Kalau routenya itu terdiri dari CRUD, tinggal pakai Route::resource() aja Tegar, lebih simple and elegant
// Dashboard
Route::group(["prefix" => "dashboard", "middleware" => ["auth"], "as" => "dashboard."], function(){
    Route::view('/', "index")->name("admin");
    Route::resource("kontrakan", "KontrakanController"); 
    Route::resource("penghuni", "PenghuniController"); 
    Route::resource("transaksi", "TransaksiController"); 
    Route::resource("laporan", "LaporanController"); 
    Route::get("print", "LaporanController@cetak")->name('print'); 
    Route::get("halamanPrint/{tglawal}/{tglakhir}", "LaporanController@cetakLaporanPertanggal")->name("halamanPrint"); 
    Route::resource("log", "LogController");  
    // Route::get("showTransaksi", "LogController@showLogTransaksi")->name('showTransaksi'); 
});
