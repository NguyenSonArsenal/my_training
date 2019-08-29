<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Backend\Base\BackendController;

class DashboardController extends BackendController
{
    public function __construct()
    {
    }

    public function index()
    {
        return view('backend.dashboard.index');
    }
}
