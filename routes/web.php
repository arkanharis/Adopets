<?php
use App\Http\Controllers\HewanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});




// Route::get('/hewan/create', [HewanController::class, 'create'])->name('hewan.create');    TODO ganti '/hewan/create' dengan hewan form input hewan

Route::post('/hewan', [HewanController::class, 'store'])->name('hewan.store');
Route::get('/hewan', [HewanController::class, 'index'])->name('hewan.index');


