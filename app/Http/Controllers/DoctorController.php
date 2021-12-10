<?php

namespace App\Http\Controllers;

use App\Models\User;

class DoctorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $doctors = User::where('is_doctor', 1)->paginate(15)->withQueryString();
        return view('back-end.doctor_list', compact('doctors'));
    }
}
