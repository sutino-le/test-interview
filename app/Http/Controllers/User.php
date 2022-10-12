<?php

namespace App\Http\Controllers;

use App\Models\User as ModelsUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class User extends Controller
{
    public function index()
    {
        return view('user/index', [
            'items' => ModelsUser::all()
        ]);
    }

    // form create
    public function create()
    {
        return view('user/create');
    }

    // simpan user baru
    public function userSimpan(Request $request)
    {
        $validated = $request->validate([
            'name'              => 'required',
            'email'             => 'required|unique:users|email:dns',
            'password'          => 'required|min:6',
        ]);

        ModelsUser::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password'])
        ]);


        return redirect('/user')->with('sukses', 'Data berhasil diinput ');
    }

    // form edit
    public function edit(ModelsUser $user)
    {
        return view(
            'user.edit',
            [
                'user' => $user,
                'items' => ModelsUser::all()
            ]
        );
    }

    // update data user
    public function update(Request $request, ModelsUser $user)
    {
        $validated = [
            'name'              => 'required',
            'password'          => 'required|min:6',
        ];

        if ($request->email != $user->email) {
            $validated['email'] = 'required|unique:users|email:dns';
        }

        $validateData = $request->validate($validated);

        ModelsUser::where(
            'id',
            $user->id
        )->update(
            [
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]
        );


        return redirect('/user')->with('sukses', 'Data berhasil diedit ');
    }


    // menghapus user
    public function destroy($id)
    {
        $useraktif = auth()->user()->id;

        if ($id == $useraktif) {
            //redirect dengan pesan error
            return redirect()->route('user.index')->with(['gagal' => 'Data Gagal Dihapus!']);
        } else {
            $user = ModelsUser::findOrFail($id);
            $user->delete();
        }

        if ($user) {
            //redirect dengan pesan sukses
            return redirect()->route('user.index')->with(['sukses' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('user.index')->with(['gagal' => 'Data Gagal Dihapus!']);
        }
    }
}
