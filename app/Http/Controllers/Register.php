<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Register extends Controller
{
    public function index()
    {
        return view('register/register');
    }

    public function daftar(Request $request)
    {
        $validated = $request->validate([
            'name'              => 'required',
            'email'             => 'required|unique:users|email:dns',
            'password'          => 'required|min:6',
            'retypepassword'    => 'required|min:6|same:password',
        ]);

        // User::create($validated);

        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password'])
        ]);


        return redirect('/')->with('sukses', 'Pendaftaran berhasil ! Silahkan login ');
    }
}
