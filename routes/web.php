<?php

use Illuminate\Support\Facades\Route;

// TODO :: All Front-end routes start here
Route::get('/', function () {
    return view('front-end.index');
});

// TODO :: Auth and Back-end routes start here
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
