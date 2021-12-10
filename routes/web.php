<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{HomeController,AppointmentController,DoctorController};

Route::get('/', function () {
    return view('front-end.index');
});

// TODO :: Auth and Back-end routes start here
Auth::routes();

Route::get('/dashboard', [HomeController::class, 'index'])->name('home');
Route::get('/doctor-list', [DoctorController::class, 'index'])->name('doctor.list');
Route::get('/appointment', [AppointmentController::class, 'form'])->name('appointment');
