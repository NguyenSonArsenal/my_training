<?php

namespace App\Model\Presenters;

trait AdminPresenter
{
    public function getRoleTypeAlias()
    {
        return $this->role_type == getConstant('ADMIN_TYPE_SUPER_ADMIN') ? "SuperAdmin" : "Admin";
    }

    public function isSuperAdmin()
    {
        return $this->role_type == getConstant('ADMIN_TYPE_SUPER_ADMIN', 1);
    }

    public function isAdmin()
    {
        return $this->role_type == getConstant('ADMIN_TYPE_ADMIN', 2);
    }

    public function allowDeleted()
    {
        $isCurrentLogin = $this->getKey() != getCurrentAdminId();
        return $isCurrentLogin && !$this->isSuperAdmin();
    }

    public function allowEdited()
    {
        if (getCurrentAdminEntity()->isSuperAdmin()) {
            return true;
        }

        return $this->isAdmin();
    }

    public function getRoleType()
    {
        $roleType = getConfig('role_type_admin');

        if (empty($this->getKey())) { // For case create admin
            return $roleType;
        }

        // For case update admin
        if ($this->isAdmin() && getCurrentAdminEntity()->isAdmin()) {
            unset($roleType[getConstant('ADMIN_TYPE_SUPER_ADMIN', 1)]);
        }

        return $roleType;
    }
}