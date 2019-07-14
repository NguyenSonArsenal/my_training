<?php

namespace App\Http\Controllers\Backend\Auth;

use Illuminate\Http\Request;
use App\Http\Requests\AdminUserRequest;
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
            return $this->renderJson();
        }
        $errors = ['login_error' => transMessage('login_error')];
        $this->setMessage($errors);
        return $this->renderErrorJson();
    }

    public function logout()
    {
        adminGuard()->logout();
        return redirect()->route('backend.login');
    }

    protected function _backWithError($errors)
    {
        return $this->_back()
            ->withErrors($errors)// send back all errors to the login form
            ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
    }
}
