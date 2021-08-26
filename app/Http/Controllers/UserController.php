<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    function login(Request $req)
    {
        $user = User::where(['name' => $req->username])->first();
        if (!$user || !Hash::check($req->password, $user->password)) {
            return "Username or password is nor matched";
        } else {
            $req->session()->put('user', $user);
            return redirect('/');
        }
    }
}
