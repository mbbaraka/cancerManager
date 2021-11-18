<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiagnosisController extends Controller
{
    public function index() {
        return view('home.patients.diagnosis');
    }

    public function addDiagnosis () {
        return redirect()->route('new-patient-medical-history');
    }
}
