<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CategoryProductController;
use App\Http\Controllers\FavouriteController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('logout', 'logout');
    Route::post('register', 'register');
    Route::get('user', 'user')->middleware('auth:sanctum');
});
Route::apiResources([
    "categories.products" => CategoryProductController::class,
    "categories"          => CategoryController::class,
    "favourites"          => FavouriteController::class,
    "products"            => ProductController::class,
]);
