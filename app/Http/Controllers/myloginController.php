<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

// use Illuminate\Foundation\Auth\AuthenticatesUsers;

class myloginController extends Controller
{
    // use AuthenticatesUsers;
    public function __construct()
    {
        // $this->middleware('auth');
    }
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('myhome');
    }


    public function myauth(Request $request)
    {

        $credentials = [
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'correct hashed pwd'=>'$2y$10$QsuYZTLLoJwiqqY9R6u.e.0GMVJyocnCfBoJ4E2Qr4tCieLzgd37q'
        ];
        dd($credentials);
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            dd($user->name);
            return redirect('/myhome')->with([
                'message' => "Welcome back, {$user->name}"
            ]);
        }
        else{
            dd('something wrong');
        }
    }
}
