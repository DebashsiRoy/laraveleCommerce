<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerProfileController;
use App\Http\Controllers\PolicyController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\TokenAuthenticate;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Page route

// Brand list
Route::get('/brandList',[BrandController::class,'BrandList']);

// Category list
Route::get('/categoryList',[CategoryController::class,'categoryList']);

// Policy list
Route::get('/policy-list',[PolicyController::class,'policyList']);
Route::post('/create-product',[ProductController::class,'CreateProduct']);

// Product list
Route::get('/ListProductByCategory/{id}',[ProductController::class,'ListProductByCategory']);
Route::get('/ListProductByRemark/{remark}',[ProductController::class,'ListProductByRemark']);
Route::get('/ListProductByBrand/{id}',[ProductController::class,'ListProductByBrand']);
// Slider
Route::get('/ListProductBySlider',[ProductController::class,'ListProductBySlider']);
// Product Details
Route::get('/ProductDetailsById/{id}',[ProductController::class,'ProductDetailsById']);
// Product Review
Route::get('/ListReviewByProduct/{product_id}',[ProductController::class,'ListReviewByProduct']);


// This section is for insert data
Route::post('/add-brand',[BrandController::class,'addBrand']);
Route::post('/add-category',[CategoryController::class,'addCategory']);

// User Auth
Route::get('/UserLogin/{UserEmail}', [UserController::class, 'UserLogin']);
Route::get('/VerifyLogin/{UserEmail}/{OTP}', [UserController::class, 'VerifyLogin']);
Route::get('/logout',[UserController::class,'UserLogout']);

// User Profile
Route::post('/create-profile',[CustomerProfileController::class,'createProfile'])->middleware([TokenAuthenticate::class]);
Route::get('/user-profile',[CustomerProfileController::class,'ReadProfile'])->middleware([TokenAuthenticate::class]);

// Product Review
Route::post('/create-product-review',[ProductController::class,'CreateProductReview'])->middleware([TokenAuthenticate::class]);
