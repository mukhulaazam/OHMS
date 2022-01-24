<?php

namespace App\Http\Controllers;

use App\Models\BedFloor;
use Illuminate\Http\Request;

class BedFloorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('back-end.floor.floor');
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
        return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BedFloor  $bedFloor
     * @return \Illuminate\Http\Response
     */
    public function show(BedFloor $bedFloor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BedFloor  $bedFloor
     * @return \Illuminate\Http\Response
     */
    public function edit(BedFloor $bedFloor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BedFloor  $bedFloor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BedFloor $bedFloor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BedFloor  $bedFloor
     * @return \Illuminate\Http\Response
     */
    public function destroy(BedFloor $bedFloor)
    {
        //
    }
}
