<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //load helper
        $this->load->helper('url');
    }
    public function index()
    {
        $data = [];
        $data['title'] = 'Admin';

        $this->load->view('header', $data);
        $this->load->view('admin/index');
        $this->load->view('footer');
    }


    //category list view
    public function category_list()
    {
        $data = [];
        $data['title'] = 'Category List';

        $this->load->view('header', $data);
        $this->load->view('admin/category/list');
        $this->load->view('footer');
    }

    public function companies_list()
    {
        $data = [];
        $data['title'] = 'Companies List';

        $this->load->view('header', $data);
        $this->load->view('admin/companies/list');
        $this->load->view('footer');
    }

    public function add_company()
    {
        $data = [];
        $data['title'] = 'Add Company';

        $this->load->view('header', $data);
        $this->load->view('admin/companies/add');
        $this->load->view('footer');
    }

    public function users_list()
    {
        $data = [];
        $data['title'] = 'Users List';

        $this->load->view('header', $data);
        $this->load->view('admin/users/list');
        $this->load->view('footer');
    }

    public function add_user()
    {
        $data = [];
        $data['title'] = 'Add User';

        $this->load->view('header', $data);
        $this->load->view('admin/users/add');
        $this->load->view('footer');
    }

    //category add view
    public function add_category()
    {
        $data = [];
        $data['title'] = 'Add Category';

        $this->load->view('header', $data);
        $this->load->view('admin/category/add');
        $this->load->view('footer');
    }
}
