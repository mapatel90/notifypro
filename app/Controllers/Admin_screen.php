<?php

namespace App\Controllers;

class Admin_screen extends BaseController
{
    public function home()
    {
        return view('header') . view('admin_screen');
    }
}