<?php

namespace App\Http\Controllers;

use App\Models\SurgicalHistory;
use Illuminate\Http\Request;

class SurgicalHistoryController extends Controller
{
    public function index ($id) {
        return view('home.patients.surgical-history', compact('id'));
    }

    public function addSurgicalHistory(Request $request, $id) {
        $this->validate($request, [
            'year' => 'required',
            'type' =>'required'
        ]);

        $surgery = new SurgicalHistory();
        $surgery->patient_id = $id;
        $surgery->year = $request->year;
        $surgery->type = $request->type;

        $save = $surgery->save();

        if ($save) {
            # code...
            toast('Successfully added medical history, continue to fill surgical history', 'success');
            return redirect()->route('new-patient-social-history', $id);
        }
    }
}
