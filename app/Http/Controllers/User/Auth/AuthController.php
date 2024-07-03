<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('user.auth.login');
    }

    public function signupForm()
    {
        return view('user.auth.register');
    }
}
