<?php

namespace App\Model\Presenters\Base;

use App\Model\Entities\Admin;

trait BasePresenter
{
    public function getActionFormStoreUpdate($object)
    {
        return empty($this->getKey()) ? route($object . ".store") : route($object . ".update", [$this->getKeyName() => $this->getKey()]);
    }

    public function getMethodFormStoreUpdate()
    {
        return !empty($this->getKey()) ? "PATCH" : "POST";
    }

    /**
     * @param $id: ins_id or upd_id
     * @return string
     */
    public function getInsertUpdateId($id)
    {
        $object = Admin::where('id', $id)->select('name')->first();
        if (empty($object)) {
            return '';
        }
        return $object->name;
    }

    public function getCreatedAt()
    {
        return $this->{getSystemConfig('created_at_column')};
    }

    public function getUpdatedAt()
    {
        return $this->{getSystemConfig('updated_at_column')};
    }
}