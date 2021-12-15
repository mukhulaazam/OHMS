<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{HomeController,AppointmentController,DoctorController,PatientController};

Route::get('/', function () {
    return view('front-end.index');
});

// TODO :: Auth and Back-end routes start here
Auth::routes();

Route::get('/dashboard', [HomeController::class, 'index'])->name('home');
Route::get('/doctor-list', [DoctorController::class, 'index'])->name('doctor.list');
Route::get('/patient-list', [PatientController::class, 'index'])->name('patient.list');
Route::get('/appointment', [AppointmentController::class, 'form'])->name('appointment');
Route::post('/appointment', [AppointmentController::class, 'store'])->name('appointment.post');
Route::get('/appointment-list', [AppointmentController::class, 'list'])->name('appointment.list');
