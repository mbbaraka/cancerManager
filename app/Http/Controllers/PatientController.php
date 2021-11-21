<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Alert;
use App\Models\Patient;

class PatientController extends Controller
{
    public function index (){
        return view('home.patients.particular');
    }

    public function addParticulars (Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'village' => 'required',
            'subcounty' => 'required',
            'next_of_kin' => 'required',
            'next_of_kin_phone' => 'required'
        ]);

        $particulars = new Patient();

        $patient_id = 'ID-'.random_int(10000, 99999);

        $particulars->pat_id = $patient_id;
        $particulars->name = $request->name;
        $particulars->date_of_birth = $request->dob;
        $particulars->gender = $request->gender;
        $particulars->phone = $request->phone;
        $particulars->village = $request->village;
        $particulars->sub_county = $request->subcounty;
        $particulars->next_of_kin = $request->next_of_kin;
        $particulars->next_of_kin_phone = $request->next_of_kin_phone;

        $save = $particulars->save();

        if ($save) {
            # code...
            toast('Patient details saved. Continue to diagnosis!','success');

            return redirect()->route('new-patient-diagnosis', $patient_id);
        }


    }
}
