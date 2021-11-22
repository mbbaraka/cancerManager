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
            'status' => 'required',
            'file' => 'csv,txt,xlx,xls,pdf|max:2048'
        ]);

        $officer_id = Auth::user()->id;

        $diagnosis = new Diagnosis();
        $diagnosis->patient_id = $patient_id;
        $diagnosis->officer_id = $officer_id;
        $diagnosis->refered_by = $request->name;
        $diagnosis->status = $request->status;
        $diagnosis->stage = $request->stage;
        $diagnosis->description = $request->description;

        if ($request->attachments != "") {
            # code...
            $name = $request->file('attachments')->getClientOriginalName();

            $path = $request->file('attachments')->store('public/attachments');

            $diagnosis->attachments = $name;
        }else{
            $diagnosis->attachments = "";
        }

        $save = $diagnosis->save();

        if ($save) {

            toast('Patient diagnosis saved successfully', 'success');

            return redirect()->route('new-patient-medical-history', $patient_id);

        }

    }
}
