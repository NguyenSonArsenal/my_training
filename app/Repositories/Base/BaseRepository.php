<?php

namespace App\Repositories\Base;

use Prettus\Repository\Eloquent\BaseRepository as BaseRepo;

abstract class BaseRepository extends BaseRepo
{
    public function getList()
    {
        return $this->get();
    }
}