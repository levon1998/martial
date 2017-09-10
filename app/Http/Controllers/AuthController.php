<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function login(Request $request)
    {
        if ($request->isMethod('post')) {

            $email = $request->input('email');
            $password = $request->input('password');
            if (Auth::attempt(['email' => $email, 'password' => $password])) {
                return redirect('/adminchik');
            } else {
                return redirect()->back();
            }
        } else {
            return view('auth.login');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
