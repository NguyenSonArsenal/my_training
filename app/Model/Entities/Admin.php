<?php

namespace App\Model\Entities;

use App\Model\Presenters\AdminPresenter;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;
    use AdminPresenter;

    protected $fillable = [
        'name', 'email', 'password', 'role_type', 'ins_id', 'upd_id', 'upd_datetime'
    ];

    public $timestamps = false;
}
