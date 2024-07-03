<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ResetPasswordController extends Controller
{
    use ResetsPasswords;

    protected $redirectTo = '/admin/dashboard';

    protected function broker()
    {
        return Password::broker('admins');
    }

    public function showResetForm(Request $request, $token = null)
    {
        return view('admin.auth.passwords.reset')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }
}
