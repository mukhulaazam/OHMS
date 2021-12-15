<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        $patients = User::where('user_type','1X101')->paginate(11);
        return view('back-end.patient_list',compact('patients'));
    }
}
