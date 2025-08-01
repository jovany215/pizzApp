<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\SimpleCartController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Routes publiques pour les catégories
Route::prefix('categories')->group(function () {
    Route::get('/', [CategoryController::class, 'index']);
    Route::get('{category}', [CategoryController::class, 'show']);
});

// Routes publiques pour les produits
Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class, 'index']);
    Route::get('search', [ProductController::class, 'search']);
    Route::get('{product}', [ProductController::class, 'show']);
});

// Routes pour le panier (sans sessions Laravel)
Route::prefix('cart')->group(function () {
    Route::get('/', [SimpleCartController::class, 'index']);
    Route::post('add', [SimpleCartController::class, 'add']);
    Route::patch('{cartItemId}', [SimpleCartController::class, 'update']);
    Route::delete('{cartItemId}', [SimpleCartController::class, 'remove']);
    Route::delete('/', [SimpleCartController::class, 'clear']);
    Route::get('total', [SimpleCartController::class, 'getTotal']);
});
