<?php

namespace App\Http\Controllers;

use App\Models\Diagnosis;
use App\Models\MedicalHistory;
use App\Models\Patient;
use App\Models\SocialHistory;
use App\Models\SurgicalHistory;
use Illuminate\Http\Request;

class SocialHistoryController extends Controller
{
    public function index ($id) {
        return view('home.patients.social-history', compact('id'));
    }

    public function addSocialHistory (Request $request, $id) {
        $social = new SocialHistory();
        $social->pat_id = $id;
        $social->marital_status = $request->status;
        $social->tobaco_use = $request->tobaco_use;
        $social->duration_of_use = $request->duration_of_use;
        $social->packs_per_day = $request->packs_per_day;
        $social->alcohol_use = $request->alcohol_use;
        $social->bottles_per_day = $request->bottles_per_day;

        $save = $social->save();

        if ($save) {
            toast('Successfully added social history, continue to finish', 'success');
            return redirect()->route('new-patient-finish', $id);
        }
    }

    public function finish ($id) {

        //getting patient information.
        $pat = Patient::where('patient_id', $id)->first();
        // Getting patient diagnosis
        $diag = Diagnosis::where('pat_id', $id)->first();
        // Medical history
        $history = MedicalHistory::get()->where('pat_id', $id)->pluck('disease');
        $history = explode(',', $history);
        // var_dump($history);
        // exit();
        // Surgical history
        $surgical = SurgicalHistory::get()->where('pat_id', $id);
        // social history
        $social = SocialHistory::where('pat_id', $id)->first();
        return view('home.patients.finish',
            compact('pat', 'diag', 'history', 'surgical', 'social')
        );
    }
}
