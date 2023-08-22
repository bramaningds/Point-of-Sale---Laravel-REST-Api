<?php

use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\SaleController;
use App\Http\Controllers\Api\SaleItemController;
use App\Http\Controllers\Api\SupplierController;
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

// Route::middleware([OnlyAllowJson::class])->group(function() {

Route::apiResource('/product'       , ProductController::class);
Route::apiResource('/customer'      , CustomerController::class);
Route::apiResource('/sale'          , SaleController::class);
Route::apiResource('/sale.item'     , SaleItemController::class);
Route::apiResource('/supplier'      , SupplierController::class);
Route::apiResource('/purchase'      , PurchaseController::class);
Route::apiResource('/purchase.item' , PurchaseItemController::class);

// });
