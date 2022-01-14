<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\User;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function __construct()
    {
        $this->middleware(middleware:'auth');
    }

    public function store(Request $request)
    {
        $appoint = Appointment::create([
            'user_id' => \Auth::user()->id,
            'doctor_id' => $request->doctor_id,
            'appointment_date' => $request->date,
            'appointment_slot' => $request->slot,
        ]);

        return redirect()->route('appointment.list');
    }

    public function list()
    {
        return view('back-end.appointment_list');
    }

    public function form()
    {
        $doctors = User::where('is_doctor', 1)->get();
        return view('back-end.appointment', compact('doctors'));
    }
}
