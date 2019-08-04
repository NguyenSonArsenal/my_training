<?php

namespace App\Repositories;

use App\Model\Entities\Admin;
use App\Model\Entities\Post;
use App\Repositories\Base\BaseRepository;

class PostRepository extends BaseRepository
{
    public function model()
    {
        return Post::class;
    }
}