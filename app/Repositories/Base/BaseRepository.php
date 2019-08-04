<?php

namespace App\Repositories\Base;

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
        $sortType = array_get($params, 'sort_type', '');
        $sortField = array_get($params, 'sort_field', '');

        if ($searchName) {
            $query->where('name', $searchName);
        }

        if ($searchEmail) {
            $query->where('email', $searchEmail);
        }

        if ($searchRoleType) {
            $query->where('role_type', $searchRoleType);
        }

        if ($sortField) {
            $query->orderBy($sortField, $sortType);
        }

        return $query->paginate(getConstant('BACKEND_PAGINATE', 20));
    }

    public function __call($method, $params)
    {
        return call_user_func_array([$this->getModel(), $method], $params);
    }
}