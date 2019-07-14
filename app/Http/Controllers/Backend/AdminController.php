<?php

namespace App\Http\Controllers\Backend;

class AdminController  extends BackendController
{
    public function __construct()
    {
    }

    public function index()
    {
        return view('backend.admin.index');
    }
}
