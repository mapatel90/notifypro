<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');

        /*Additional code which you want to run automatically in every function call */
    }
    public function index()
    {
        $data = [];
        $data['title'] = 'Home';

        // Load each view separately
       $this->load->view('header', $data);
       $this->load->view('home');
       $this->load->view('footer');
    }
}
