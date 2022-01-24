<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\
{HomeController,AppointmentController,DoctorController,BedFloorController,InPatientController,DepartmentController,OutPatientController};

Route::get('/', function () {
    return view('front-end.index');
});

// TODO :: Auth and Back-end routes start here
Auth::routes();

Route::middleware(['web'])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('home');

    Route::get('/in-patient', [InPatientController::class, 'index'])->name('in.patient.list');
    Route::get('/appointment', [AppointmentController::class, 'form'])->name('appointment');
    Route::post('/appointment', [AppointmentController::class, 'store'])->name('appointment.post');
    Route::get('/appointment-list', [AppointmentController::class, 'list'])->name('appointment.list');

    Route::controller(DoctorController::class)->group(function () {
        Route::get('/doctor-list', 'index')->name('doctor.list');
        Route::get('/doctor', 'create')->name('doctor.add');
        Route::post('/doctor', 'store');
    });

    Route::controller(BedFloorController::class)->group(function(){
        Route::get('/floor','index')->name('bed.floor');
        Route::post('/floor','create')->name('bed.floor');
    });

    Route::controller(DepartmentController::class)->group(function (){
        Route::get('/departments', 'index')->name('departments');
        Route::get('/department', 'show')->name('department');
        Route::post('/department',  'store')->name('department.create');
    });

    Route::controller(OutPatientController::class)->group(function (){
        Route::get('out-patient','index');
    });
});


