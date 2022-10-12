<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserApi extends Controller
{
    public function index()
    {
        $users = User::all();

        // $data =  response()->json([
        //     'status' => 'success',
        //     'message' => 'Data User',
        //     'data' => $users
        // ]);

        // return view('user.api-user', $data);

        return view('user.api-user', ['data' => json_encode(
            response()->json([
                'status' => 'success',
                'message' => 'Data User',
                'data' => $users
            ]),
            JSON_PRETTY_PRINT
        )]);
    }
}
