<?php

namespace App\Controllers;

class Home_page extends BaseController
{
    public function home()
    {
        return view('header') . view('home_page');
    }
}