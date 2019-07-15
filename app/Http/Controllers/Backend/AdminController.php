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
        return view('backend.admin.create');
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

    public function destroy($id)
    {
        $entity = Admin::findOrFail($id);
        $entity->delete();

//        Session::flash('message', 'Successfully deleted the nerd!');
        return redirect()->back();
    }
}
