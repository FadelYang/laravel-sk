<?php

use App\Http\Controllers\articleController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


// controller
// route
// view

Route::get('/', function () {
    return view('welcome');
});

Route::resource('article', articleController::class);

// Route::get('/article', [articleController::class, 'index']);
// Route::post('/article', [articleController::class, 'store']);
// // dynamic route
// Route::get('/article/create', [articleController::class, 'create']);
// Route::get('/article/{slug}', [articleController::class, 'show']);
// Route::get('/article/{slug}', [articleController::class, 'show']);
// Route::get('/article/{id}/edit', [articleController::class, 'edit']);
// Route::put('/article/{id}', [articleController::class, 'update']);
// Route::delete('/article/{id}', [articleController::class, 'destroy']);

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

// Route::get('/article', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
