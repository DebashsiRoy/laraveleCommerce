<?php

use App\Http\Controllers\BrandController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Page route
Route::get('/getBrandList',[BrandController::class,'BrandList']);


// This section is for insert data
Route::post('/add-brand',[BrandController::class,'addBrand']);


