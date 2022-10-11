<?php

namespace App\Http\Controllers;

use App\Models\User as ModelsUser;
use Illuminate\Http\Request;

class User extends Controller
{
    public function index()
    {
        $modeluser = new ModelsUser();

        $data = [
            'items' => $modeluser->All()
        ];

        return view('user/index', $data);
    }

    public function create()
    {
        return view('user/create');
    }
}
