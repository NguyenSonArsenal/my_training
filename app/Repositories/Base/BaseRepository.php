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
        return $this->getModel()->withActive()->get();
    }
}