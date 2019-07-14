<?php

namespace App\Http\Controllers\Base;

use App\Http\Controllers\Controller;
use App\Http\Supports\ApiResponse;

class BaseController extends Controller
{
    use ApiResponse;

    public function __construct()
    {

    }

    protected function _back()
    {
        return redirect()->back();
    }
}
