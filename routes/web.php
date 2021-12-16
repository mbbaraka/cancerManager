<?php

use App\Http\Controllers\PatientController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// // Route::get('/', '[HomeController::index]')->name('home');
// Route::get('/', function () {

// });

Route::middleware(['auth'])->group(function () {

    Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');
    // users

    Route::get('/users', 'App\Http\Controllers\UserController@index')->name('user.index');

    Route::get('/new-user', 'App\Http\Controllers\UserController@create')->name('new.user');

    Route::post('/new-user/add', 'App\Http\Controllers\UserController@store')->name('add.user');


    Route::get('patient/new', 'App\Http\Controllers\PatientController@particulars')->name('new-patient');

    Route::post('/patient/add', 'App\Http\Controllers\PatientController@addParticulars')->name('add-particulars');



    Route::get('/patient/diagnosis/{id}', 'App\Http\Controllers\DiagnosisController@index')->name('new-patient-diagnosis');

    Route::post('/patient/diagnosis/add/{id}', 'App\Http\Controllers\DiagnosisController@addDiagnosis')->name('diagnosis-add');


    Route::get('/patient/medical-history/{id}', 'App\Http\Controllers\MedicalHistoryController@index')->name('new-patient-medical-history');

    Route::post('/patient/medical-history/add/{id}', 'App\Http\Controllers\MedicalHistoryController@addMedicalHistory')->name('medical-history-add');


    Route::get('/patient/surgical-history/{id}', 'App\Http\Controllers\SurgicalHistoryController@index')->name('new-patient-surgical-history');

    Route::post('/patient/surgical-history/add/{id}', 'App\Http\Controllers\SurgicalHistoryController@addSurgicalHistory')->name('surgical-history-add');


    Route::get('/patient/social-history/{id}', 'App\Http\Controllers\SocialHistoryController@index')->name('new-patient-social-history');

    Route::post('/patient/social-history/add/{id}', 'App\Http\Controllers\SocialHistoryController@addSocialHistory')->name('social-history-add');

    Route::get('/patient/finish/{id}', 'App\Http\Controllers\SocialHistoryController@finish')->name('new-patient-finish');


    /** Referred patient routes */
    Route::get('/referred/patients', 'App\Http\Controllers\ReferralController@index')->name('referred-patients');
    // Refer patient to UCI

    Route::get('/referred/patient/{id}', 'App\Http\Controllers\ReferralController@refer')->name('refer-patient');

    Route::get('/patient/all', 'App\Http\Controllers\PatientController@index')->name('patient-index');

    // View single patient

    Route::get('/patient/{id}', 'App\Http\Controllers\PatientController@single')->name('patient-single');

    Route::post('/patient/change-status', 'App\Http\Controllers\UCIController@changeStatus')->name('change.status');

    // // Create Pdf
    // Route::get('/patient/pdf/{id}', [PatientController::class, 'createPDF'])->name('create-pdf');
    // Route::get('/patient/pdf/{id}', [PatientController::class, 'createPDF'])->name('create-pdf');








});


    // UCI Routes

    // login
    // Route::get('/uci/login', 'App\Http\Controllers\UCIController@login')->name('uci-login');

    Route::post('/uci/login/check', 'App\Http\Controllers\Auth\UCILoginController@login')->name('uci-login-check');

    // homepage uci

    Route::get('/uci', 'App\Http\Controllers\UCIController@index')->name('uci-home');

    // patients referred
    Route::get('/uci/referred-patients', 'App\Http\Controllers\UCIController@referred')->name('uci-patient-referred');

    // View single patient

    Route::get('/uci/patients/{id}', 'App\Http\Controllers\UCIController@singlePatient')->name('patient-single-uci');


    // Create Pdf
    Route::get('/patient/pdf/{id}', [PatientController::class, 'createPDF'])->name('create-pdf');
    // Route::get('/patient/pdf/{id}', [PatientController::class, 'createPDF'])->name('create-pdf');

    Route::get('/uci/login', function () {
        return view('uci.auth.login');
    });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
