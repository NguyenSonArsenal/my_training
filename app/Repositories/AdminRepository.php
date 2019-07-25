<?php

namespace App\Repositories;

use App\Model\Entities\Admin;
use App\Repositories\Base\BaseRepository;

class AdminRepository extends BaseRepository
{
    public function model()
    {
        return Admin::class;
    }

    public function deleteAdmin($ids)
    {
        return $this->getModel()->whereIn('id', $ids)->update([getSystemConfig('deleted_at_column') => getConstant('UN_ACTIVE', 1)]);
    }

    public function findIdsForDelete($id)
    {
        return $this->getModel()->where('id', $id)->orWhere(getSystemConfig('created_by_column'), $id)->withActive()->pluck('id')->toArray();
    }
}