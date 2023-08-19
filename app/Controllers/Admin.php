<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Admin extends Controller
{
    public function __construct()
    {
        //load helper
        helper('html');
    }
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
        $content = view('admin/category/list');
        $footer = view('footer');

        $combinedViews = $header . $content . $footer;
        return $combinedViews;
    }

    public function companies_list()
    {
        $data = [];
        $data['title'] = 'Companies List';

        $header = view('header', $data);
        $content = view('admin/companies/list');
        $footer = view('footer');

        $combinedViews = $header . $content . $footer;
        return $combinedViews;
    }

    public function add_company()
    {
        $data = [];
        $data['title'] = 'Add Company';

        $header = view('header', $data);
        $content = view('admin/companies/add');
        $footer = view('footer');

        $combinedViews = $header . $content . $footer;
        return $combinedViews;
    }

    public function users_list()
    {
        $data = [];
        $data['title'] = 'Users List';

        $header = view('header', $data);
        $content = view('admin/users/list');
        $footer = view('footer');

        $combinedViews = $header . $content . $footer;
        return $combinedViews;
    }

    public function add_user()
    {
        $data = [];
        $data['title'] = 'Add User';

        $header = view('header', $data);
        $content = view('admin/users/add');
        $footer = view('footer');

        $combinedViews = $header . $content . $footer;
        return $combinedViews;
    }

    
    //category add view
    public function add_category()
    {
        $data = [];
        $data['title'] = 'Add Category';

        $header = view('header', $data);
        $content = view('admin/category/add');
        $footer = view('footer');

        $combinedViews = $header . $content . $footer;
        return $combinedViews;
    }
}
