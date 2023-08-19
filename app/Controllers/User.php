<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class User extends Controller
{
    public function home_page()
    {
        $data = [];
        $data['title'] = 'Home';
        // Load each view separately
        $header = view('header', $data);
        $content = view('user/home_page');

        // Concatenate the views
        $combinedViews = $header . $content;

        // Return the combined views
        return $combinedViews;
    }
    public function login()
    {
        $data = [];
        $data['title'] = 'login';
        // Load each view separately
        $header = view('header', $data);
        $content = view('user/login');

        // Concatenate the views
        $combinedViews = $header . $content;

        // Return the combined views
        return $combinedViews;
    }
}
