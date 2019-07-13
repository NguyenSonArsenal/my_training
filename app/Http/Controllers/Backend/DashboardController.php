<?php

namespace App\Http\Controllers\Backend;

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
