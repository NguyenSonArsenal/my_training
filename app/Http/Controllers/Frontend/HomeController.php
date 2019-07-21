<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Frontend\Base\FrontendController;

class HomeController extends FrontendController
{
    public function index()
    {
        return view('frontend.index');
    }

    public function showContact()
    {
        return view('frontend.contact');
    }

    public function showProfile()
    {
        return view('frontend.profile');
    }

    public function showPost()
    {
        return view('frontend.post');
    }
}