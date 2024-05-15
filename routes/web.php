<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardProfileController;

Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard.home', [
        'title' => 'Home'
    ]);
});

Route::get('/contact', function () {
    return view('contactUs', [
        'title' => 'Contact'
    ]);
});

Route::get('dashboard/profile',[DashboardProfileController::class, 'show'])->middleware('auth');
Route::get('dashboard/profile/edit',[DashboardProfileController::class, 'edit'])->middleware('auth');
Route::post('dashboard/profile',[DashboardProfileController::class, 'update'])->middleware('auth');


Route::get('/register',[RegisterController::class, 'index'])->middleware('guest');
Route::post('/register',[RegisterController::class, 'store']);

Route::get('/login',[LoginController::class, 'index'])->middleware('guest');
Route::post('/login',[LoginController::class, 'authenticate']);
Route::post('/logout',[LoginController::class, 'logout']);
