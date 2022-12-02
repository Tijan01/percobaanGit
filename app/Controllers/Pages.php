<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo 'kontol';
    }
    public function home()
    {
        return view('navbar');
    }
}
