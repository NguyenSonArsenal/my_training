<?php

namespace App\Http\Controllers\Backend\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Backend\BackendController;

class LoginController extends BackendController
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
        return $this->_backWithError(['errors' => transMessage('login_error')]);
    }

    public function logout()
    {
        adminGuard()->logout();
        return redirect()->route('backend.login');
    }
}
