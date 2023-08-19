<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class Vendor extends Controller
{
  public function index() {
   $data = []; 
   $data['title'] = 'Notification Templete';
   $header = view('header', $data);
   $content = view('vender/index');
   $footer = view('footer');
   $combinedViews = $header . $content . $footer;
   return $combinedViews;   
  }

  public function expense()  {
    $data = []; 
    $data['title'] = 'Expenses';
    $header = view('header', $data);
    $content = view('vender/expense');
    $footer = view('footer');
    $combinedViews = $header . $content . $footer;
    return $combinedViews;  
  }

  public function addmore()  {
    $data = []; 
    $data['title'] = 'Add More';
    $header = view('header', $data);
    $content = view('vender/addmore');
    $footer = view('footer');
    $combinedViews = $header . $content . $footer;
    return $combinedViews;  
  }

   //tank you page
   public function thank_you()
   {
      $data = [];
      $data['title'] = 'Thank You';

      $header = view('header', $data);
      $content = view('vendor/thank_you');
      $footer = view('footer');

      $combinedViews = $header . $content . $footer;
      return $combinedViews;
   }

}