<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function store(Request $request)
    {

    }

    public function form()
    {
        $doctors = User::where('is_doctor', 1)->get();
        return view('back-end.appointment', compact('doctors'));
    }
}
