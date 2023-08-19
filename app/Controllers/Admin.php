<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class Admin extends Controller
{
   public function index()
   {
    $data = []; 
    $data['title'] = 'Admin';

    $header = view('header', $data);
    $content = view('admin/index');
    $footer = view('footer');
    $combinedViews = $header . $content . $footer;
    return $combinedViews;
   }

   //category list view
    public function category_list()
    {
     $data = []; 
     $data['title'] = 'Category List';
    
     $header = view('header', $data);
     $content = view('admin/category_list');
    $footer = view('footer');

     $combinedViews = $header . $content . $footer;
     return $combinedViews;
    }
}