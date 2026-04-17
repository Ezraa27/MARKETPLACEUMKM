<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BarangController;

//Route::get('/', function () { 
//  return view('welcome'); 
//}); 

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/barang', [BarangController::class, 'tampilkan']);
Route::get('/ezra', function () {
  return view('ezra');
});
