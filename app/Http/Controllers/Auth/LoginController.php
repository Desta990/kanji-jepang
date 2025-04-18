<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    

public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        if (Auth::user()->hasVerifiedEmail()) {
            return redirect()->intended('/dashboard');
        } else {
            Auth::logout();
            return redirect()->route('login')->withErrors(['email' => 'Please verify your email before logging in.']);
        }
    }

    return back()->withErrors(['email' => 'Invalid credentials']);
}

}
