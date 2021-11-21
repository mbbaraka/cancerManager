<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReferredController extends Controller
{
    /**
     * Display the referred patients
     */

     public function index () {
         return view('home.referred.index');
     }
}
