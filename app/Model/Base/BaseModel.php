<?php

namespace App\Model\Base;

use App\Model\Presenters\Base\BasePresenter;
use App\Model\Scopes\Base\BaseScope;
use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    use BasePresenter;
    use BaseScope;
}