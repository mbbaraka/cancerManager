<?php

namespace App\Http\Controllers;

use App\Models\Diagnosis;
use Illuminate\Http\Request;
use Alert;
use Illuminate\Support\Facades\Auth;

class DiagnosisController extends Controller
{
    public function index($id) {
        return view('home.patients.diagnosis', compact('id'));
    }

    public function addDiagnosis (Request $request, $patient_id) {
        $this->validate($request, [
            'status' => 'required'
        ]);

        $officer_id = Auth::user()->id;

        $diagnosis = new Diagnosis();
        $diagnosis->patient_id = $patient_id;
        $diagnosis->officer_id = $officer_id;
        $diagnosis->refered_by = $request->name;
        $diagnosis->status = $request->status;
        $diagnosis->stage = $request->stage;
        $diagnosis->description = $request->description;
        $diagnosis->attachments = $request->attachments;

        $save = $diagnosis->save();

        if ($save) {
            # code...
            toast('Patient diagnosis saved successfully', 'success');
            return redirect()->route('new-patient-medical-history');
        }

    }
}
