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
}