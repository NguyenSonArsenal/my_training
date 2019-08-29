<?php

namespace App\Http\Controllers\Backend\Auth;

use App\Http\Controllers\Backend\Base\BackendController;
use Illuminate\Http\Request;

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
            if (!getCurrentAdminEntity()->{getSystemConfig('deleted_at_column')}) {
                return redirect()->route('dashboard');
            }
        }

        return $this->_backWithError(['errors' => transMessage('login_error')]);
    }

    public function logout()
    {
        adminGuard()->logout();
        return redirect()->route('backend.login');
    }
}
