<?php

namespace App\Http\Controllers\Backend\Auth;

use App\Http\Controllers\Base\BackendController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\AdminUserRequest;
use Mockery\Exception;

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

    public function login()
    {
        $params = Input::all();
    }
}
