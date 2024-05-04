<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    //

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::guard('web')->attempt($credentials)) {
            return view('formateur.index');
        }
        
        return redirect()->back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->back();
    }

}
