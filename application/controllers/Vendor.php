<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Vendor extends CI_Controller
{

  public function __construct()
  {
    //load helper
    parent::__construct();
    $this->load->helper('url');
  }

  public function index()
  {
    $data = [];
    $data['title'] = 'Notification Template';

    $this->load->view('header', $data);
    $this->load->view('vendor/index');
    $this->load->view('footer');
  }

  public function expense()
  {
    $data = [];
    $data['title'] = 'Expenses';

    $this->load->view('header', $data);
    $this->load->view('vendor/expense');
    $this->load->view('footer');
  }

  public function addmore()
  {
    $data = [];
    $data['title'] = 'Add More';

    $this->load->view('header', $data);
    $this->load->view('vendor/addmore');
    $this->load->view('footer');
  }

  // Thank you page
  public function thank_you()
  {
    $data = [];
    $data['title'] = 'Thank You';

    $this->load->view('header', $data);
    $this->load->view('vendor/thank_you');
    $this->load->view('footer');
  }
}
