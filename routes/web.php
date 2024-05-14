<?php
use App\Http\Controllers\HewanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});




// Route::get('/hewan/create', [HewanController::class, 'create'])->name('hewan.create');    TODO ganti '/hewan/create' dengan hewan form input hewan

Route::post('/hewan', [HewanController::class, 'store'])->name('hewan.store');
Route::get('/hewan', [HewanController::class, 'index'])->name('hewan.index');  //  TODO ganti 'hewan.index' dengan halaman view hewan



