<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class Usercontroller extends Controller
{
    //
    public function login(Request $request) {
        $user = User::where(['email'=>$request->email])->first();

        if(!$user || !Hash::check($request->password,$user->password))
        {
            return "Username or Password is not matched";
        }
        else {
            $request->session()->put('user',$user);
            return redirect('/');
        }
    }

    public function register(Request $request) {
        $user = new user();
        $user->name = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect('/login');

    }
}
