<?php

namespace App\Http\Controllers\Backend;

use App\Model\Entities\Admin;
use App\Repositories\AdminRepository;
use App\Validators\AdminValidator;
use Illuminate\Support\Facades\Input;

class AdminController  extends BackendController
{
    protected $_repository;

    public function __construct(AdminRepository $repository)
    {
        $this->_repository = $repository;
    }

    public function index()
    {
        $entities = $this->_repository->getList();

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

    public function store(AdminValidator $adminValidator)
    {
        $entity = new Admin();
        $params = Input::all();
        $params['ins_id'] = getCurrentAdminId();
        $params['password'] = storePassword($params['password']);
        $entity->fill($params);
        $entity->save();
        return redirect()->route('admin.index');
    }

    public function show($id)
    {
        $entity = Admin::findOrFail($id);

        $viewDatas = [
            'entity' => $entity
        ];

        return view('backend.admin.show', $viewDatas);
    }

    public function edit($id)
    {
        $entity = Admin::findOrFail($id);

        $viewDatas = [
            'entity' => $entity
        ];

        return view('backend.admin.edit', $viewDatas);
    }

    public function update(AdminValidator $adminValidator, $id)
    {
        $entity = Admin::findOrFail($id);
        $params = Input::all();
        $params['upd_id'] = getCurrentAdminId();

        if (array_key_exists('password', $params)) {
            if (!$params['password']) {
                unset($params['password']);
            } else {
                $params['password'] = storePassword($params['password']);
            }
        }

        $params['upd_datetime'] = now()->format('Y-m-d H:i:s');

        $entity->fill($params);
        $entity->save();
        return redirect()->route('admin.index');
    }

    public function destroy($id)
    {
        $entity = Admin::findOrFail($id);
        $entity->fill([getSystemConfig('deleted_at_column', 'del_flag') => getConstant('NONE_ACTIVE', 1)]);
        $entity->save();
//        Session::flash('message', 'Successfully deleted the nerd!');
        return redirect()->back();
    }
}
