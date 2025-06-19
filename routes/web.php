<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\orderController;
use App\Http\Controllers\MenuItemController;


Route::get('/home', function () {
    return view('home');
});

Route::post('/order', [orderController::class, 'store']);

Route::resource('menu', MenuItemController::class);
Route::get('/menu', [MenuItemController::class, 'index']);
