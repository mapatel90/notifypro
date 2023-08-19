<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class Home extends Controller
{

    public function __construct()
    {
        //load helper
         helper('html');
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
