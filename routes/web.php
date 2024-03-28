<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::resource('cart', CartController::class);
