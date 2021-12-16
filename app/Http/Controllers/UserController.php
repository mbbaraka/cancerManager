<?php

namespace App\Http\Controllers;

use AfricasTalking\SDK\AfricasTalking;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Str;

class UserController extends Controller
{
    public function index () {
        $users = User::where('id', '!=', Auth::user()->id)->paginate(10);
        return view('users.index', compact('users'));
    }

    public function create () {
        return view('users.add');
    }

    public function store (Request $request) {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/(07)[0-9]/|size:10',
        ]);

        $random = Str::random(10);
        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        // generate password for new user and send it to them via sms
        $user->password = bcrypt($random); //generates a random string as a password which is sent to the user via sms

        $save = $user->save();

        if ($save) {
            $username = 'smsReminder'; //
            $apiKey   = '863a87ae9c7504d87c1667c90b16bd5809bf33fc9ba28043bf9becea550d2aa9'; //
            $AT       = new AfricasTalking($username, $apiKey);

            $sender      = $AT->sms();

            $result   = $sender->send([
                'enqueue' => 'true',
                'to'      => '+256' . intval($request->phone),
                'message' => "Hello". $request->first_name. ", You have been registered to use ". env('APP_NAME') ." as a user. Please use ". $request->email ." as the login email and ".$random . " as the password. To login, click on this link http://" . env('APP_URL')."/login"
            ]);
            toast('Added User Successfully', 'success');
            return redirect()->back();
        }

        toast('An error has occured', 'warning');
        return redirect()->back();
    }
}
