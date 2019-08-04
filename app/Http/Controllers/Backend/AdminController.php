<?php

namespace App\Http\Controllers\Backend;

use App\Model\Entities\Admin;
use App\Repositories\AdminRepository;
use App\Validators\AdminValidator;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Backend\Base\BackendController;

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
        $entity = array_get(session()->all(), 'entity', null) ? array_get(session()->all(), 'entity') : new Admin();

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
        return redirect()->route('admin.index')->with('notification', transMessage('create_success'));
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
        $entity = array_get(session()->all(), 'entity', null) ? array_get(session()->all(), 'entity') : Admin::findOrFail($id);

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
        return redirect()->route('admin.index', $this->_getArrayQueryString())->with('notification', transMessage('update_success'));
    }

    public function destroy($id)
    {
        $ids = $this->_repository->findIdsForDelete($id); // [id1, id2, id3 ...]
        $this->_repository->deleteAdmin($ids);
        return redirect()->back()->with('notification', transMessage('delete_success'));
    }
}
