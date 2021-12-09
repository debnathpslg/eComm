<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    //

    function login(Request $req)
    {
        $user = User::where(['email' => $req->email])->first();

        if (!$user || !Hash::check($req->password, $user->password)) {
            return "User name or password does not match...";
        } else {
            $req->session()->put('user',$user);
            // Session::put('user', $user);
            return redirect("/");
        }
    }
}
