<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedicalHistoryController extends Controller
{
    public function index () {
        return view('home.patients.medical-history');
    }

    public function addMedicalHistory () {
        return redirect()->route('new-patient-surgical-history');
    }
}
