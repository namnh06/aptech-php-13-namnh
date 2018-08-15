<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //
    function users()
    {
        $users = User::get();

        return view('welcome', ['users' => $users]);
    }
}
