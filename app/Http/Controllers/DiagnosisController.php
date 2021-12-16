<?php

namespace App\Http\Controllers;

use App\Models\Diagnosis;
use Illuminate\Http\Request;
use Alert;
use Illuminate\Support\Facades\Auth;

class DiagnosisController extends Controller
{
    public function index($id) {
        // $diagnosis = Diagnosis::where('pat_id', $id)->first();
        return view('home.patients.diagnosis', compact('id'));
    }

    public function addDiagnosis (Request $request, $patient_id) {
        $this->validate($request, [
            'status' => 'required',
            'file' => 'file|image|mimes:jpeg,png,gif,jpg|csv,txt,xlx,xls,pdf|max:2048'
        ]);



        $officer_id = Auth::user()->id;

        // check if patient already in db to update to avoid dyplicates
        $check = Diagnosis::where('pat_id', $patient_id)->first();
        if ($check) {
            $diagnosis = Diagnosis::find($check->id);
            $diagnosis->pat_id = $patient_id;
            $diagnosis->officer_id = $officer_id;
            $diagnosis->refered_by = $request->name;
            $diagnosis->status = $request->status;
            $diagnosis->type = $request->type;
            $diagnosis->stage = $request->stage;
            $diagnosis->treatment = $request->treatment;
            $diagnosis->description = $request->description;

            if ($request->attachments != "") {
                # code...
                // $name = $request->file('attachments')->getClientOriginalName();

                // $path = $request->file('attachments')->store('public/attachments');


                $file = $request->file('attachments');

                // Generate a file name with extension
                $fileName = 'file-'.time().'.'.$file->getClientOriginalExtension();

                // Save the file
                $path = $file->storeAs('public/attachments', $fileName);

                $diagnosis->attachments = $fileName;

            }else{
                $diagnosis->attachments = "";
            }

            $save = $diagnosis->save();

            if ($save) {
                toast('Updated Patient diagnosis details', 'success');
                return redirect()->back();
            }
        }

        $diagnosis = new Diagnosis();
        $diagnosis->pat_id = $patient_id;
        $diagnosis->officer_id = $officer_id;
        $diagnosis->refered_by = $request->name;
        $diagnosis->status = $request->status;
        $diagnosis->type = $request->type;
        $diagnosis->stage = $request->stage;
        $diagnosis->treatment = $request->treatment;
        $diagnosis->description = $request->description;

        if ($request->attachments != "") {
            # code...
            // $name = $request->file('attachments')->getClientOriginalName();

            // $path = $request->file('attachments')->store('public/attachments');


            $file = $request->file('attachments');

            // Generate a file name with extension
            $fileName = 'file-'.time().'.'.$file->getClientOriginalExtension();

            // Save the file
            $path = $file->storeAs('public/attachments', $fileName);

            $diagnosis->attachments = $fileName;

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
