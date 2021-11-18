<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SurgicalHistoryController extends Controller
{
    public function index () {
        return view('home.patients.surgical-history');
    }

    public function addSurgicalHistory() {
        return redirect()->route('new-patient-social-history');
    }
}
