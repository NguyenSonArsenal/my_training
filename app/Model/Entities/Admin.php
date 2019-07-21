<?php

namespace App\Model\Entities;

use App\Model\Presenters\AdminPresenter;
use App\Model\Base\Auth\AuthTmp;

class Admin extends AuthTmp
{
    use AdminPresenter;

    protected $fillable = [
        'name', 'email', 'password', 'role_type', 'ins_id', 'upd_id', 'upd_datetime', 'del_flag'
    ];

    public $timestamps = false;
}
