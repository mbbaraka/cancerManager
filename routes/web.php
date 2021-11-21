<?php

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

    Route::get('/new-patient', 'App\Http\Controllers\PatientController@index')->name('new-patient');

    Route::post('/new-patient/add', 'App\Http\Controllers\PatientController@addParticulars')->name('add-particulars');



    Route::get('/new-patient/diagnosis/{id}', 'App\Http\Controllers\DiagnosisController@index')->name('new-patient-diagnosis');

    Route::post('/new-patient/diagnosis/add{id}', 'App\Http\Controllers\DiagnosisController@addDiagnosis')->name('diagnosis-add');


    Route::get('/new-patient/medical-history', 'App\Http\Controllers\MedicalHistoryController@index')->name('new-patient-medical-history');

    Route::post('/new-patient/medical-history/add', 'App\Http\Controllers\MedicalHistoryController@addMedicalHistory')->name('medical-history-add');


    Route::get('/new-patient/surgical-history', 'App\Http\Controllers\SurgicalHistoryController@index')->name('new-patient-surgical-history');

    Route::post('/new-patient/surgical-history/add', 'App\Http\Controllers\SurgicalHistoryController@addSurgicalHistory')->name('surgical-history-add');


    Route::get('/new-patient/social-history', 'App\Http\Controllers\SocialHistoryController@index')->name('new-patient-social-history');

    Route::post('/new-patient/social-history/add', 'App\Http\Controllers\SocialHistoryController@addSocialHistory')->name('social-history-add');

    Route::get('/new-patient/finish', 'App\Http\Controllers\SocialHistoryController@finish')->name('new-patient-finish');


    /** Referred patient routes */
    Route::get('/referred-patients', 'App\Http\Controllers\ReferredController@index')->name('referred-patients');


});
