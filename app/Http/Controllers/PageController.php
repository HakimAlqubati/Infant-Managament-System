<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function openRequest()
    {
        return view('front.request-system');
    }

    public function openBlog(){

        return view('front.blog');
    }

    public function oneblog(){
        return view('front.oneblode');
    }

    public function login(){
        return view('front.login');
    }
}
