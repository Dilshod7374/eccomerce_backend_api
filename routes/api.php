<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CategoryProductController;
use App\Http\Controllers\DeliveryMethodController;
use App\Http\Controllers\FavouriteController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentTypeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserAddressController;
use App\Http\Controllers\UserPaymentCardController;
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
    "products"            => ProductController::class,
    "favourites"          => FavouriteController::class,
    "orders"              => OrderController::class,
    "delivery-methods"    => DeliveryMethodController::class,
    "payment-types"       => PaymentTypeController::class,
    "user-addresses"      => UserAddressController::class,
    "user-payment-cards"  => UserPaymentCardController::class,
]);
