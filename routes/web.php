<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard.home', [
        'title' => 'Home'
    ]);
});

Route::get('/login',[LoginController::class, 'index'])->middleware('guest');
Route::post('/login',[LoginController::class, 'authenticate']);
Route::post('/logout',[LoginController::class, 'logout']);
