<?php

namespace App\Model\Presenters;

trait PostPresenter
{
    public function isActive()
    {
        return $this->status == getConstant('ACTIVE', 1);
    }

    public function getPostStatus()
    {
        return $this->isActive() ? "Active" : "Disable";
    }
}