<?php

namespace App\Http\Controllers;

use App\Models\SocialHistory;
use Illuminate\Http\Request;

class SocialHistoryController extends Controller
{
    public function index ($id) {
        return view('home.patients.social-history', compact('id'));
    }

    public function addSocialHistory (Request $request, $id) {
        $social = new SocialHistory();
        $social->patient_id = $id;
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
        return view('home.patients.finish');
    }
}
