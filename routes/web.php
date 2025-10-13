<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::view('/buatlaporan', 'buatlaporan')->name('buatlaporan');
Route::view('/laporansaya', 'laporansaya')->name('laporansaya');
Route::view('/notifikasi', 'notifikasi')->name('notifikasi');
Route::view('/kotaktinjauan', 'kotaktinjauan')->name('kotaktinjauan');
