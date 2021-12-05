<?php

use Illuminate\Support\Facades\Route;

// TODO :: All Front-end routes start here
Route::get('/', function () {
    return view('front-end.index');
});

// TODO :: Auth and Back-end routes start here
Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/doctor-list', [App\Http\Controllers\DoctorController::class, 'index'])->name('doctor.list');
Route::get('/appointment', [App\Http\Controllers\AppointmentController::class, 'form'])->name('appointment');
