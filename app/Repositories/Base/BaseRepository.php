<?php

namespace App\Repositories\Base;

use Illuminate\Container\Container as Application;
use Prettus\Repository\Eloquent\BaseRepository as BaseRepo;

abstract class BaseRepository extends BaseRepo
{
    public function model()
    {
        return "";
    }

    public function getModel()
    {
        return new $this->model();
    }

    public function getList()
    {
        $params = request()->all();
        $query = $this->withActive();
        $searchName = array_get($params, 'name', '');
        $searchEmail = array_get($params, 'email', '');
        $searchRoleType = array_get($params, 'role_type', '');

        if ($searchName) {
            $query->where('name', $searchName);
        }

        if ($searchEmail) {
            $query->where('email', $searchEmail);
        }

        if ($searchRoleType) {
            $query->where('role_type', $searchRoleType);
        }

        return $query->paginate(getConstant('BACKEND_PAGINATE', 20));
    }

    public function __call($method, $params)
    {
        return call_user_func_array([$this->getModel(), $method], $params);
    }
}