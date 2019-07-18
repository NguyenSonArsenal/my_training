<?php

namespace App\Model\Base\Auth\AuthTmp;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AuthTmp extends Authenticatable {
    use Notifiable;
}