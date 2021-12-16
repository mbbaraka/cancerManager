<?php

namespace App\Http\Controllers;

use App\Models\Diagnosis;
use App\Models\Patient;
use App\Models\Referral;
use Carbon\Carbon;
use Faker\Calculator\Luhn;
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
        $location = Patient::get()->count();
        
        if ($location <= 0) {
            $location = 1;
            $location_pajulu = 1;
            $location_adumi = 1;
            $location_logiri = 1;
            $location_oluko = 1;

        }else{
            $location_pajulu = Patient::get()->where('sub_county', 'Pajulu')->count();
            $location_oluko = Patient::get()->where('sub_county', 'Oluko')->count();
            $location_adumi = Patient::get()->where('sub_county', 'Adumi')->count();
            $location_logiri = Patient::get()->where('sub_county', 'Logiri')->count();
        }


        // cancer types
        $cancer = Diagnosis::get()->count();

        if ($cancer <= 0) {
            $cancer = 1;
            $lung_cancer = 1;
            $breast_cancer = 1;
            $skin_cancer = 1;
            $cervical_cancer = 1;
        }else{
            $lung_cancer = Diagnosis::get()->where('type', 'Lung Cancer')->count();
            $skin_cancer = Diagnosis::get()->where('type', 'Skin Cancer')->count();
            $breast_cancer = Diagnosis::get()->where('type', 'Breast Cancer')->count();
            $cervical_cancer = Diagnosis::get()->where('type', 'Cervical Cancer')->count();
        }

        //cancer by gender
        $get_lung_cancer = Diagnosis::where('type', 'Lung Cancer')->get();
        $get_skin_cancer = Diagnosis::where('type', 'SKin Cancer')->get();
        $get_cervical_cancer = Diagnosis::where('type', 'Cervical Cancer')->get();
        $get_breast_cancer = Diagnosis::where('type', 'Breast Cancer')->get();

        //get patient statistisc
        $treatment = Referral::get()->where('progress', '!=', 'cured')->count();
        $critical = Referral::where('progress', 'critical')->get()->count();
        $improving = Referral::where('progress', 'improving')->get()->count();


        $total_refs = Referral::get()->count();

        if ($total_refs >= 0) {
            $total_refs = 1;
        }
        if ($treatment >= 0) {
            $treatment = 1;
        }
        if ($critical >= 0) {
            $critical = 1;
        }
        if ($improving >= 0) {
            $improving = 1;
        }


        return view('home.index',
        compact(
            'location_pajulu', 'location_adumi', 'location_oluko', 'location_logiri', 'location',
            'lung_cancer', 'breast_cancer', 'skin_cancer', 'cervical_cancer', 'cancer',
            'get_lung_cancer', 'get_breast_cancer', 'get_skin_cancer', 'get_cervical_cancer',
            'improving', 'treatment', 'critical', 'total_refs'
            )
        );
    }
}
