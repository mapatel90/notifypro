<?php

namespace App\Controllers;

class Home extends BaseController
{

    public function __construct()
    {
        //load helper
         
    }

    public function index()
    {
       
        $data = []; 
        $data['title'] = 'Home';
        // Load each view separately
        $header = view('header', $data);
        $content = view('home');
    
        // Concatenate the views
        $combinedViews = $header . $content;
    
        // Return the combined views
        return $combinedViews;
    }
}
