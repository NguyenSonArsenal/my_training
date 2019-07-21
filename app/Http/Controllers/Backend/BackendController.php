<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Base\BaseController;

class BackendController extends BaseController
{
    public function __construct()
    {

    }

    public function _backWithError($errors)
    {
        return $this->_back()
            ->withErrors($errors)// send back all errors to the login form
            ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
    }
}
