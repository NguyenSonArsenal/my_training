<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Frontend\Base\FrontendController;

class PostController extends FrontendController
{
    public function index()
    {
        return view('frontend.post.index');
    }

    public function show($id)
    {
        switch ($id) {
            case 1:
                $view = 'frontend.post.post1';
                break;
            case 2:
                $view = 'frontend.post.post2';
                break;
            case 3:
                $view = 'frontend.post.post3';
                break;
            default:
                $view = 'layouts.frontend.404';
                break;
        }

        return view($view);
    }
}