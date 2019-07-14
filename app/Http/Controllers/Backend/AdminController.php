<?php

namespace App\Http\Controllers\Backend;

use App\Model\Entities\Admin;

class AdminController  extends BackendController
{
    public function __construct()
    {
    }

    public function index()
    {
        $entities = Admin::all();

        $viewDatas = [
            'entities' => $entities
        ];

        return view('backend.admin.index', $viewDatas);
    }

    public function create()
    {
        return view('backend.admin.create');
    }
}
