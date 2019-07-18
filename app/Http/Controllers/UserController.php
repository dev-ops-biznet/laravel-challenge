<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function signIn(Request $request)
    {
        $credentials = $request-only('email', 'password');

        if (Auth->attempt($credential)) {
            return redirect->intended('home');
        }
        return redirect->intended('login');
    }

    public function signInPage(Request $request)
    {
        return view("login");
    }

    public function homePage(Request $request)
    {
        return view("home");
    }
}
