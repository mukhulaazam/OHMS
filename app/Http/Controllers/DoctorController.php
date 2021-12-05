<?php

namespace App\Http\Controllers;

use App\Models\User;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = User::where('is_doctor',1)->paginate(15)->withQueryString();
        return view('back-end.doctor_list',compact('doctors'));
    }
}
