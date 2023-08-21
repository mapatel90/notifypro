<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        //load helper
        parent::__construct();
        $this->load->helper('url');
    }

    public function home_page()
    {
        $data = [];
        $data['title'] = 'Home Page';

        $this->load->view('header', $data);
        $this->load->view('user/home_page');
        $this->load->view('footer');
    }

    public function login()
    {
        $data = [];
        $data['title'] = 'Login';

        $this->load->view('header', $data);
        $this->load->view('user/login');
        $this->load->view('footer');
    }

    public function create_notification()
    {
        $data = [];
        $data['title'] = 'Create Notification';

        $this->load->view('header', $data);
        $this->load->view('user/create_notification');
        $this->load->view('footer');
    }

    public function create_notification_details()
    {
        $data = [];
        $data['title'] = 'Create Notification Details';

        $this->load->view('header', $data);
        $this->load->view('user/create_notification_details');
        $this->load->view('footer');
    }

    public function document_confirmation()
    {
        $data = [];
        $data['title'] = 'Document Confirmation';

        $this->load->view('header', $data);
        $this->load->view('user/document_confirmation');
        $this->load->view('footer');
    }

    public function list()
    {
        $data = [];
        $data['title'] = 'List';

        $this->load->view('header', $data);
        $this->load->view('user/list');
        $this->load->view('footer');
    }
}
