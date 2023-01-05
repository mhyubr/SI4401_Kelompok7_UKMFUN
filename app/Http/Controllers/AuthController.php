<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // TELUTIZEN
    public function index_telutizen()
    {
        return view('login-telutizen', [
            'title' => 'Login Telutizen' 
        ]);
    }

    public function authenticate_telutizen(Request $request)
    {
        // dd($request->all());
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (Auth::guard('user')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }
        return back()->with('LoginGagal', 'Username atau Password salah!');
    }

    // UKM
    public function index_ukm()
    {
        return view('login-ukm', [
            'title' => 'Login UKM'
        ]);
    }

    public function authenticate_ukm(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (Auth::guard('ukm')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }
        return back()->with('LoginGagal', 'Username atau Password salah!');
    }

    // LOGOUT
    public function logout(Request $request)
    {
        if (Auth::guard('user')->check()){
            
            Auth::guard('user')->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            
        } elseif (Auth::guard('ukm')->check()){
            
            Auth::guard('ukm')->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

        }

        return redirect('/');

    }
}
