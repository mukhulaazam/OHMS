<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\
{HomeController,AppointmentController,BedController,BedCategoryController,DoctorController,BedFloorController,InPatientController,DepartmentController,OutPatientController};

Route::get('/', function () {
    return view('front-end.index');
});

// TODO :: Auth and Back-end routes start here
Auth::routes();

Route::middleware(['web'])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('home');

    Route::get('/in-patient', [InPatientController::class, 'index'])->name('in.patient.list');


    Route::controller(AppointmentController::class)->group(function () {
        Route::get('/appointment', 'form')->name('appointment');
        Route::post('/appointment', 'store')->name('appointment.post');
        Route::get('/appointment-list', 'index')->name('appointment.list');
        Route::get('/appointment/{id}', 'destroy')->name('appointment.destroy');
    });

    Route::controller(DoctorController::class)->group(function () {
        Route::get('/doctor-list', 'index')->name('doctor.list');
        Route::get('/doctor', 'create')->name('doctor.add');
        Route::post('/doctor', 'store');
        Route::get('/doctor/{id}','destroy')->name('doctor.destroy');
    });

    Route::controller(BedFloorController::class)->group(function(){
        Route::get('/floor','index')->name('bed.floor');
        Route::post('/floor','store')->name('bed.floor');
        Route::get('/floor/{id}/edit','show')->name('bed.floor.edit');
        Route::get('/floor/{id}','destroy')->name('bed.destroy');
    });

    Route::controller(BedCategoryController::class)->group(function(){
        Route::get('/bed-category','index')->name('bc.index');
        Route::post('/bed-category','store')->name('bc.store');
        Route::get('/bed-category/{id}','destroy')->name('bc.destroy');
    });
    Route::controller(BedController::class)->group(function(){
        Route::get('/bed','index')->name('b.index');
        Route::post('/bed','store')->name('b.store');
        Route::get('/bed/{id}','destroy')->name('b.destroy');
    });

    Route::controller(DepartmentController::class)->group(function (){
        Route::get('/departments', 'index')->name('departments');
        Route::get('/department', 'show')->name('department');
        Route::post('/department',  'store')->name('department.create');
        Route::get('/department/{id}', 'destroy')->name('department.destroy');
    });

    Route::controller(OutPatientController::class)->group(function (){
        Route::get('out-patient','index')->name('out.patient.list');
        Route::post('out-patient','store')->name('out.patient.store');
        Route::get('out-patient/{id}','destroy')->name('out.patient.destroy');
    });
});


