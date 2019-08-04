<?php

namespace App\Http\Controllers\Backend;

use App\Repositories\PostRepository;
use App\Http\Controllers\Backend\Base\BackendController;

class PostController  extends BackendController
{
    protected $_repository;

    public function __construct(PostRepository $repository)
    {
        $this->_repository = $repository;
    }

    public function index()
    {
        $entities = $this->_repository->getList();

        $viewDatas = [
            'entities' => $entities
        ];

        return view('backend.post.index', $viewDatas);
    }

    public function create()
    {

    }

    public function store()
    {

    }

    public function show($id)
    {

    }

    public function edit($id)
    {

    }

    public function update($id)
    {

    }

    public function destroy($id)
    {

    }
}
