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
        $credentials = $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if ( auth()->user()->jabatan_id == 2) {
            return redirect()->route('dashboard.checked')->with('success', ' You have successfully logged in to Policeasu. Now you can start to explore! ');
            } elseif( auth()->user()->jabatan_id == 3) {
                return redirect()->route('dashboard.checked')->with('success', ' You have successfully logged in to Policeasu. Now you can start to explore! ');
            } elseif( auth()->user()->jabatan_id == 4) {
                return redirect()->route('dashboard.approve')->with('success', ' You have successfully logged in to Policeasu. Now you can start to explore! ');
            }elseif( auth()->user()->jabatan_id == 5) {
                return redirect()->route('dashboard.general')->with('success', ' You have successfully logged in to Policeasu. Now you can start to explore! ');
            }elseif( auth()->user()->jabatan_id == 6) {
                return redirect()->route('dashboard.general')->with('success', ' You have successfully logged in to Policeasu. Now you can start to explore! ');
            }else{
                return redirect()->intended('/dashboard')->with('success', ' You have successfully logged in to Policeasu. Now you can start to explore! ');
            }

        };

            return back()->with('error', 'Login failed!
            Please check your email or password again');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }


}