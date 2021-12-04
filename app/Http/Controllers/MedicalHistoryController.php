<?php

namespace App\Http\Controllers;

use App\Models\MedicalHistory;
use Illuminate\Http\Request;
use Alert;

class MedicalHistoryController extends Controller
{
    public function index ($id) {
        return view('home.patients.medical-history', compact('id'));
    }

    public function addMedicalHistory (Request $request, $id) {

        // $input = $request->all();
        // $input['disease'] = $request->input('disease');

        // $save = MedicalHistory::create($input);
        // if ($save) {
        //     # code...
        // toast('Successfully added medical history, continue to fill surgical history', 'success');
        // return redirect()->route('new-patient-surgical-history', $id);
        // }



        // foreach ((array)$request->disease as $value) {

        //     $disease = new MedicalHistory();
        //     $disease->patient_id = $id;
        //     $disease->disease = $value;

        // }
        // $save = $disease->save();

        // if ($save) {
        //     toast('Successfully added medical history, continue to fill surgical history', 'success');
        //     return redirect()->route('new-patient-surgical-history', $id);
        // }
        $diseases = $request->all();
        $disArray = implode(',', $request->input('disease'));

        // $diseases['diseases'] = $disArray;

        $value = new MedicalHistory();
        $value->pat_id = $id;
        $value->disease = $disArray;

        $save = $value->save();



        if ($save) {
            toast('Successfully added medical history, continue to fill surgical history', 'success');
            return redirect()->route('new-patient-surgical-history', $id);
        }

            // $value = new MedicalHistory();
            // $value->patient_id = $id;
            // $value->disease = $disease;

            // $save = $value->save();

            // if ($save) {
            //     toast('Successfully added medical history, continue to fill surgical history', 'success');
            //     return redirect()->route('new-patient-surgical-history', $id);
            // }

    }
}
