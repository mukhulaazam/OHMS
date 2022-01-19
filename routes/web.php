<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\
{HomeController,AppointmentController,DoctorController,InPatientController,DepartmentController,OutPatientController};

Route::get('/', function () {
    return view('front-end.index');
});

// TODO :: Auth and Back-end routes start here
Auth::routes();

Route::middleware(['web'])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('home');
    Route::get('/doctor-list', [DoctorController::class, 'index'])->name('doctor.list');
    Route::get('/doctor', [DoctorController::class, 'create'])->name('doctor.add');
    Route::post('/doctor', [DoctorController::class, 'store']);
    Route::get('/in-patient', [InPatientController::class, 'index'])->name('in.patient.list');
    Route::get('/appointment', [AppointmentController::class, 'form'])->name('appointment');
    Route::post('/appointment', [AppointmentController::class, 'store'])->name('appointment.post');
    Route::get('/appointment-list', [AppointmentController::class, 'list'])->name('appointment.list');
    Route::get('/departments', [DepartmentController::class, 'index'])->name('departments');
    Route::get('/department', [DepartmentController::class, 'show'])->name('department');
    Route::post('/department', [DepartmentController::class, 'store'])->name('department.create');

    Route::controller(OutPatientController::class)->group(function (){
        Route::get('out-patient','index');
    });
});


