<?php

use App\Http\Controllers\articleController;
use Illuminate\Support\Facades\Route;

// controller
// route
// view

Route::get('/', function () {
    return view('welcome');
});

Route::get('/artikel', [articleController::class, 'index']);
// dynamic route
Route::get('/artikel/{slug}', [articleController::class, 'show']);
