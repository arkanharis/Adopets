<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetController;

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

Route::get('/dashboard/rehome', function () {
    return view('dashboard.rehome', [
       'title' => 'Rehome'
    ]);
});


Route::post('/pets', [PetController::class, 'store'])->name('animal.store');