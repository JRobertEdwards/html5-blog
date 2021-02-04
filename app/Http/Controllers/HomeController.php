<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{

    public function showLogin()
    {
        return view('login');
    }

    public function doLogin(Request $request) 
    {
        // $user = User::where('email', '=', Input::get('email'))->first();
        // $username = $request->username;
        // $password = $request->password;
        // dd($request);
        $user = User::where('name', '=', $request->username)->first();
        if($user === NULL){
            dd('null user!');
        }
        if($user->password === $request->password) {
            return view('work');
        }
        // dd($request);
        // dd('login hello');
    }
}
