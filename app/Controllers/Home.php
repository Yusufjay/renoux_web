<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('pages/home');
    }

    public function collections()
    {
        return view('pages/collections');
    }

    public function about()
    {
        return view('pages/about');
    }
}