<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Login extends Controller
{
    public function index()
    {
        return view('login/login');
    }


    public function authenticate(Request $request)
    {
        $validation = $request->validate([
            'email'             => 'required|email:dns',
            'password'          => 'required|min:6',
        ]);

        if (Auth::attempt($validation)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard')->with('sukses', 'Anda berhasil login ');
        }

        return back()->with('loginError', 'Login gagal! Silahkan login kembali...');
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/');
    }
}
