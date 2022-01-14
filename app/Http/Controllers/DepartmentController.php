<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::latest('id')->paginate('11');

        return view('back-end.depart-list',compact('departments'));
    }

    public function show()
    {
        return view('back-end.departments');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'des' => 'required',
        ]);

        $data = [
            'name' => $request->name,
            'des' => $request->des,
            'slug' => \Str::slug($request->name,'-')
        ];

        Department::create($data);

        return view('back-end.departments');
    }
}
