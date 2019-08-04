<?php

namespace App\Model\Entities;

use App\Model\Presenters\AdminPresenter;
use App\Model\Base\Auth\AuthTmp;
use App\Model\Presenters\PostPresenter;

class Post extends AuthTmp
{
    use PostPresenter;

    protected $fillable = [
        'id', 'status', 'title', 'description', 'content', 'ins_id', 'upd_id', 'upd_datetime', 'del_flag'
    ];

    public $timestamps = false;
}
