<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\InPatient;
use App\Models\Prescription;
use Illuminate\Http\Request;

class PrescriptionController extends Controller
{

    public function index()
    {
        return view('back-end.prescription.index');
    }


    public function create()
    {
        $ip = InPatient::where('is_discharged', '=', 0)
            ->latest()
            ->get();
        $doc = Doctor::latest()->get();
        return view('back-end.prescription.create', compact('ip','doc'));
    }



    public function store(Request $request)
    {
//        return $request->all();
//        $this->validate($request, [
//            'in_patient_id' => 'required',
//            'doctor_id' => 'required',
//            'prescription_date' => 'required',
//            'prescription_time' => 'required',
//            'prescription_details' => 'required',
//        ]);

        try {
            $p = Prescription::create($request->all());
            return $p;

//            if ($prescription->save()){
//               for ($i=0; $i<($request->row_no); $i++){
//                   $disgonosis[] = [
//                       'prescription_id' => $prescription->id,
//                       'diagnosis' => $request->diagnosis_name[$i],
//                       'instructions' => $request->instructions[$i],
//                   ];
//               }
//               if (isset($disgonosis)){
//                   $prescription->diagnosis()->createMany($disgonosis);
//               }
//                return redirect()->route('prescription.index')->with('success', 'Prescription created successfully');
//            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Prescription $prescription
     * @return \Illuminate\Http\Response
     */
    public function show(Prescription $prescription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Prescription $prescription
     * @return \Illuminate\Http\Response
     */
    public function edit(Prescription $prescription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Prescription $prescription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prescription $prescription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Prescription $prescription
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prescription $prescription)
    {
        //
    }
}
