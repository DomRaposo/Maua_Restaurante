<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\orderController;
use App\Http\Controllers\MenuItemController;
use App\Http\Controllers\CartController;

Route::get('/home', function () {
    return view('home');
});

Route::post('/order', [orderController::class, 'store']);


Route::get('/menu', [MenuItemController::class, 'index']);




Route::prefix('cart')->group(function () {
    Route::get('/', [CartController::class, 'show']);

    Route::post('/add/{id}', [CartController::class, 'add']);
    Route::delete('/remove/{id}', [CartController::class, 'remove']);
    Route::delete('/clear', [CartController::class, 'clear']);
});

Route::post('/orders/finalize', [OrderController::class, 'finalize']);
