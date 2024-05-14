<?php
use App\Http\Controllers\HewanController;
use Illuminate\Support\Facades\Route;

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
