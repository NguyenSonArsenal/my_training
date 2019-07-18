<?php

namespace App\Model\Presenters;

use App\Model\Presenters\Base\BasePresenter;

trait AdminPresenter
{
    use BasePresenter;

    public function getRoleTypeAlias()
    {
        return $this->role_type == getConstant('ADMIN_TYPE_SUPER_ADMIN') ? "SuperAdmin" : "Admin";
    }
}