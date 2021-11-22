<?php

namespace App\Http\Controllers;

use App\Models\Diagnosis;
use App\Models\Patient;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        /** Managing dashboard */

        // location
        $location_pajulu = Patient::get()->where('sub_county', 'Pajulu')->count();
        $location_oluko = Patient::get()->where('sub_county', 'Oluko')->count();
        $location_adumi = Patient::get()->where('sub_county', 'Adumi')->count();
        $location_logiri = Patient::get()->where('sub_county', 'Logiri')->count();
        $location = Patient::get()->count();

        // cancer types
        $cancer = Diagnosis::get()->count();
        $lung_cancer = Diagnosis::get()->where('type', 'Lung Cancer')->count();
        $skin_cancer = Diagnosis::get()->where('type', 'Skin Cancer')->count();
        $breast_cancer = Diagnosis::get()->where('type', 'Breast Cancer')->count();
        $cervical_cancer = Diagnosis::get()->where('type', 'Cervical Cancer')->count();

        return view('home.index',
        compact(
            'location_pajulu', 'location_adumi', 'location_oluko', 'location_logiri', 'location',
            'lung_cancer', 'breast_cancer', 'skin_cancer', 'cervical_cancer', 'cancer'
            )
        );
    }
}
