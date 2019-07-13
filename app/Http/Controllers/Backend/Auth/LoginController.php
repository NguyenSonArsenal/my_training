<?php

namespace App\Http\Controllers\Backend\Auth;

use App\Http\Controllers\Base\BackendController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AdminUserRequest;

class LoginController
{
    public $adminUserRequest;

    public function __construct()
    {
    }

    public function showLoginForm()
    {
        return view('backend.auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (adminGuard()->attempt($credentials)) {
            return redirect()->route('dashboard');
        }
        echo "Error login";
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('backend.login');
    }
}
