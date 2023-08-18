<?php

namespace App\Controllers;

class Create_notification extends BaseController
{
    public function create_notification()
    {
        return view('header') . view('create_notification');
    }
}
