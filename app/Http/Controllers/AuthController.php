<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index()
    {
        return view('pages.login.index');
    }

    public function authanticate(Request $request)
    {

        $login = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        // dd($request);
        Session::put('name', $request->name);


        if (Auth::attempt($login)) {
            $request->session()->regenerate();

            $ud =Auth::user()->name;

            return redirect()->intended('/dashboard')->with('success', ' 👋 Welcome '. $ud .'!  You have successfully logged in to Policeasu. Now you can start to explore! ');
        }
            return back()->with('error', 'Login failed!
            Please check your email or password again');

    }

    public function logout(Request $request)
    {
        Auth::logout();
        Session::put('login',FALSE);
        Session::put('level','');
        return redirect('/');
    }


}
