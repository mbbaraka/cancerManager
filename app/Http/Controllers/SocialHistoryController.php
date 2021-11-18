<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SocialHistoryController extends Controller
{
    public function index () {
        return view('home.patients.social-history');
    }

    public function addSocialHistory () {
        return redirect()->route('new-patient-finish');
    }

    public function finish () {
        return view('home.patients.finish');
    }
}
