<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class User extends Controller
{

    public function __construct()
    {
        //load helper
        helper('html');
    }

    public function home_page()
    {
        $data = [];
        $data['title'] = 'Home Page';
        
        $header = view('header', $data);
        $content = view('user/home_page');
        $footer = view('footer');

        $combinedViews = $header . $content. $footer;

        return $combinedViews;
    }
    public function login()
    {
        $data = [];
        $data['title'] = 'login';
        
        $header = view('header', $data);
        $content = view('user/login');
        $footer = view('footer');

        $combinedViews = $header . $content .$footer;

        return $combinedViews;
    }
    public function create_notification()
    {
        $data = [];
        $data['title'] = 'create_notification';
        
        $header = view('header', $data);
        $content = view('user/create_notification');
        $footer = view('footer');

        $combinedViews = $header . $content. $footer;

        return $combinedViews;
    }
    public function create_notification_details()
    {
        $data = [];
        $data['title'] = 'create_notification_details';
        
        $header = view('header', $data);
        $content = view('user/create_notification_details');
        $footer = view('footer');

        $combinedViews = $header . $content .$footer;

        return $combinedViews;
    }
    public function document_confirmation()
    {
        $data = [];
        $data['title'] = 'document_confirmation';
        
        $header = view('header', $data);
        $content = view('user/document_confirmation');
        $footer = view('footer');

        $combinedViews = $header . $content .$footer;

        return $combinedViews;
    }

    public function list()
    {
        $data = [];
        $data['title'] = 'list';
        // Load each view separately
        $header = view('header', $data);
        $content = view('user/list');
        $footer = view('footer');

        // Concatenate the views
        $combinedViews = $header . $content . $footer;

        // Return the combined views
        return $combinedViews;
    }
}
