<?php

namespace App\Http\Controllers;

use App\Models\InPatient;
use Illuminate\Http\Request;

class InPatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $in_patient = InPatient::latest('id')->paginate('11');
        return $in_patient;
        return view('back-end.patient_list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InPatient  $inPatient
     * @return \Illuminate\Http\Response
     */
    public function show(InPatient $inPatient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InPatient  $inPatient
     * @return \Illuminate\Http\Response
     */
    public function edit(InPatient $inPatient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InPatient  $inPatient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InPatient $inPatient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InPatient  $inPatient
     * @return \Illuminate\Http\Response
     */
    public function destroy(InPatient $inPatient)
    {
        //
    }
}
