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



    Route::get('/new-patient/diagnosis', 'App\Http\Controllers\DiagnosisController@index')->name('new-patient-diagnosis');



});
