<?php

namespace App\Http\Controllers\Backend;

use App\Model\Entities\Admin;
use Illuminate\Support\Facades\Input;

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
        $entity = new Admin();

        $viewDatas = [
            'entity' => $entity
        ];

        return view('backend.admin.create', $viewDatas);
    }

    public function edit($id)
    {
        $entity = Admin::findOrFail($id);

        $viewDatas = [
            'entity' => $entity
        ];

        return view('backend.admin.edit', $viewDatas);
    }

    public function store()
    {
        $entity = new Admin();
        $params = Input::all();
        $params['ins_id'] = getCurrentId();
        $entity->fill($params);
        $entity->save();
        return redirect()->route('admin.index');
    }

    public function update($id)
    {
        $entity = Admin::findOrFail($id);
        $params = Input::all();
        $params['upd_id'] = getCurrentId();

        if (array_key_exists('password', $params) && !$params['password']) {
            unset($params['password']);
        }

        $entity->fill($params);
        $entity->save();
        return redirect()->route('admin.index');
    }

    public function destroy($id)
    {
        $entity = Admin::findOrFail($id);
        $entity->delete();

//        Session::flash('message', 'Successfully deleted the nerd!');
        return redirect()->back();
    }
}
