<?php

namespace App\Http\Controllers;

use App\Models\Referral;
use Illuminate\Http\Request;
use AfricasTalking\SDK\AfricasTalking;
use App\Models\Patient;

class ReferralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index () {
        $referrals = Referral::get();
        return view('home.referred.index', compact('referrals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Referral  $referral
     * @return \Illuminate\Http\Response
     */
    public function show(Referral $referral)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Referral  $referral
     * @return \Illuminate\Http\Response
     */
    public function edit(Referral $referral)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Referral  $referral
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Referral $referral)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Referral  $referral
     * @return \Illuminate\Http\Response
     */
    public function destroy(Referral $referral)
    {
        //
    }

    public function refer($id) {


        $username = 'smsReminder'; //
        $apiKey   = '863a87ae9c7504d87c1667c90b16bd5809bf33fc9ba28043bf9becea550d2aa9'; //
        $AT       = new AfricasTalking($username, $apiKey);

        $check = Referral::where('pat_id', $id)->first();
        if ($check >= 1) {
            toast('Patient already referred!','warning');
            return redirect()->back();
        }
        $refer = new Referral();
        $refer->pat_id = $id;

        $save = $refer->save();

        $patient = Patient::findOrFail($id);
        if ($save) {
            // Get one of the services
            $sender      = $AT->sms();
            $receiver     = $AT->sms();

            // Use the service

            //send message to patient
            $result   = $sender->send([
                'enqueue' => 'true',
                'to'      => '+256' . intval($patient->phone),
                'message' => 'Hello ' . $patient->name . ', You have been addmitted to Uganda Cancer Institute for further medication. Thank you'
            ]);

             //send message to next of kin
             $result   = $sender->send([
                'enqueue' => 'true',
                'to'      => '+256' . intval($patient->next_of_kin_phone),
                'message' => 'Hello ' . $patient->next_of_kin . ', '. $patient->name .' who is your next of kin has been addmitted to Uganda Cancer Institute for further medication. Thank you'
            ]);

            if ($result) {
                return redirect()->back();
            }

            toast('Patient referred to UCI for further medication!','success');

            return redirect()->route('patient-index');
        }
    }
}
