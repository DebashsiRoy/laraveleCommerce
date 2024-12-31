<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PolicyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Page route
Route::get('/brandList',[BrandController::class,'BrandList']);
Route::get('/categoryList',[CategoryController::class,'categoryList']);
Route::get('/policy-list',[PolicyController::class,'policyList']);


// This section is for insert data
Route::post('/add-brand',[BrandController::class,'addBrand']);
Route::post('/add-category',[CategoryController::class,'addCategory']);


