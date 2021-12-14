<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Alert;
use App\Models\Diagnosis;
use App\Models\MedicalHistory;
use App\Models\Patient;
use App\Models\Referral;
use App\Models\SocialHistory;
use App\Models\SurgicalHistory;
use PDF;

class PatientController extends Controller
{
    public function index (){
        $patients = Patient::latest()->paginate(10);
        return view('home.patients.all', compact('patients'));
    }

    public function particulars(){
        return view('home.patients.particular');
    }

    public function addParticulars (Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'phone' => 'required|regex:/(07)[0-9]/|size:10',
            'village' => 'required',
            'subcounty' => 'required',
            'next_of_kin' => 'required',
            'next_of_kin_phone' => 'required|regex:/(07)[0-9]/|size:10'
        ]);

        $particulars = new Patient();

        $patient_id = 'ID-'.random_int(10000, 99999);

        $particulars->patient_id = $patient_id;
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

    // show single patient
    public function single ($id) {
        $patient = Patient::findOrFail($id);
        // Getting patient diagnosis
        $diag = Diagnosis::where('pat_id', $id)->first();
        // Medical history
        $history = MedicalHistory::first()->where('pat_id', $id)->pluck('disease');
        $history = explode(',', $history);
        // $history = json_decode($history);

        // Surgical history
        $surgical = SurgicalHistory::get()->where('pat_id', $id);
        // social history
        $social = SocialHistory::where('pat_id', $id)->first();
        return view('home.patients.view',
            compact('patient', 'diag', 'history', 'surgical', 'social')
        );

    }

    // Create pdf
    public function createPDF (Request $request, $id) {
        // $id = 'ID-92106';
        // retreive all records from db
        $patient = Patient::findOrFail($id);
        // Getting patient diagnosis
        $diag = Diagnosis::where('pat_id', $id)->first();
        // Medical history
        $history = MedicalHistory::first()->where('pat_id', $id)->pluck('disease');
        $history = explode(',', $history);
        // $history = json_decode($history);

        // Surgical history
        $surgical = SurgicalHistory::get()->where('pat_id', $id);
        // social history
        $social = SocialHistory::where('pat_id', $id)->first();

        // // share data to view
        // view()->share('employee',$patient, $diag, $history, $surgical, $social);
        // $pdf = PDF::loadView('home.patients.pdf', ['patient' =>$patient, 'diag'=> $diag, 'history' => $history, 'surgical'=>$surgical, 'social' => $social]);

        // // download PDF file with download method
        // return $pdf->download($patient->name.'-form.pdf');
        if($request->has('download'))
        {
            // $pdf = PDF::loadView('home.patients.pdf',compact('patient', 'diag', 'history', 'surgical', 'social'));
            $pdf = PDF::loadView('home.patients.pdf', compact('patient', 'diag', 'history', 'surgical', 'social'))->setOptions(['defaultFont' => 'sans-serif']);
            return $pdf->download($patient->name.'-form.pdf');
        }
    }
}
